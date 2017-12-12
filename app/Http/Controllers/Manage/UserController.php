<?php

namespace App\Http\Controllers\Manage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Role;
use App\Http\Requests\User\StoreUser;
use Image;
use Storage;
use QrCode;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::with('roles')->get();
    	return view('manage.users.index')->withUsers($users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manage.users.create')->withRoles($this->getRoles());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUser $request)
    {
        $user = User::create([
        	'name'=> $request->name,
        	'email'=> $request->email,
        	'phone'=> $request->phone,
        	'password' => bcrypt(str_random(8))
        ]);
        if ($request->has('is_active')) {
        	$user->is_active = 1;
        } else {
        	$user->is_active = 0;
        }
        $user->save();
        $user->roles()->attach($request->role_id);
        if ($request->hasFile('photo')){
        	$photo = $request->file('photo');
        	$this->savePhoto($user, $photo);
        }
        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('manage.users.show')->withUser($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('manage.users.edit')->withUser($user)
        	->withRoles($this->getRoles());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    	$user = User::findOrFail($id);
        $user->update([
        	'name'=> $request->name,
        	'email'=> $request->email,
        	'phone'=> $request->phone,
        ]);
        if ($request->has('is_active')) {
        	$user->is_active = 1;
        } else {
        	$user->is_active = 0;
        }
        $user->save();
        $user->roles()->sync($request->role_id);
        if ($request->hasFile('photo')){
        	$photo = $request->file('photo');
        	$this->savePhoto($user, $photo);
        }
        return redirect()->route('users.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    private function savePhoto($user, $photo)
    {
        $folder = 'app/public/users/';
        $mainFileName = $user->id.'.'.$photo->getClientOriginalExtension();
        if (!file_exists(storage_path($folder))) {
            mkdir(storage_path($folder), 0755, true);
        }
        Image::make($photo)->resize(400, null, function ($constraint) {
            $constraint->aspectRatio();
        })->save(storage_path($folder).$mainFileName);
        $publicFolder = explode('/', $folder, 2)[1];
        $user->photo = $publicFolder.$mainFileName;
        $user->save();
        return $user;
    }

    private function getRoles()
    {
    	$roles = Role::select('id', 'name')->orderBy('name')->get();
    	return $roles;
    }
}
