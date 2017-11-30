<?php

namespace App\Http\Controllers\Portfolio;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Session;
use App\Models\Inbox;
use App\Mail\ResumeMail;
use Mail;

class PortfolioController extends Controller
{
    public function index()
    {
    	return view('portfolio.bootstrap.portfolio_master')->with([
    		'knowledges' => $this->getKnowledge()
    	]);
    }

    public function sendResume(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:200',
            'email' => 'required|email',
            'subject' => 'required|max:100',
            'message' => 'required|max:300',
        ]);

        if ($validator->fails()) {
            return redirect('/dani-lesmiadi')
                        ->withErrors($validator)
                        ->withFlag(true)
                        ->withInput();
        }

        $inbox = Inbox::create($request->all());
        Mail::to($inbox->email)
            ->queue(new ResumeMail($inbox));

        return redirect('/dani-lesmiadi')->withSuccess('The Resume file will send to you shortly, thank you.');
        
    }

    private function getKnowledge()
    {
    	$knowledges = [
    		['name' => 'Ms. Project', 'skore' => 75],
    		['name' => 'Photoshop', 'skore' => 90],
    		['name' => 'Html', 'skore' => 85],
    		['name' => 'Css', 'skore' => 80],
    		['name' => 'Javascript', 'skore' => 80],
    		['name' => 'Vue Js', 'skore' => 85],
            ['name' => 'React Js', 'skore' => 87],
            ['name' => 'React-Native', 'skore' => 80],
    		['name' => 'Laravel', 'skore' => 85],
    		['name' => 'Codeigniter', 'skore' => 80],
    		['name' => 'MySql', 'skore' => 80],
    		['name' => 'Redis', 'skore' => 70],
    		['name' => 'Unit Testing', 'skore' => 80],
    		['name' => 'Git, Github', 'skore' => 75],
    		['name' => 'Linux Server', 'skore' => 70],
    		['name' => 'NGINX', 'skore' => 70],
    	];
    	return $knowledges;
    }
}
