<?php

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\Activation;
use App\User;

class RoleSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Activation::truncate();
        DB::table('role_user')->truncate();
        Role::truncate();
        User::truncate();
        $this->seedRole();
        $this->seedUser();
    }

    private function seedRole()
    {
    	$roles = [
          'Superuser', 'Administrator', 'Guest'
        ];

        for ($i=0; $i < count($roles); $i++) {
            Role::create([
              'name' => $roles[$i],
              'slug' => str_slug($roles[$i])
            ]);
        }
    }

    private function seedUser()
    {
    	$roles = Role::all();
    	foreach ($roles as $role) {
    		$user = factory(User::class)->create([
            	'name' => $role->name,
            	'email' => $role->slug.'@app.com',
                'is_active' => 1
            ]);

            $user->roles()->attach($role->id);

            factory(Activation::class)->create([
            	'user_id' => $user->id
            ]);
    	}
    }
}
