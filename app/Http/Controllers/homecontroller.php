<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homecontroller extends Controller
{
    function index(Request $req){
    	$data = ['id'=> 123, 'name'=> 'asif'];
    	return view('home.index', $data);

    	
    	
    }

    public function create(){
        return view('home.create');
    }
}
