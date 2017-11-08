<?php

namespace App\Http\Controllers\Portfolio;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PortfolioController extends Controller
{
    public function index()
    {
    	return view('portfolio.bootstrap.portfolio_master')->with([
    		'knowledges' => $this->getKnowledge()
    	]);
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
