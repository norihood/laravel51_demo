<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
//use Input;
use App\Http\Requests\registerForm;
use Illuminate\Http\Request;

class HomeController extends BaseController
{
    use DispatchesJobs, ValidatesRequests;

    public function getIndex(){
    	return view('fo.home_content');
    }
    public function getAbc(){
    	return 'aaaaa';
    }
    public function getDangKy(){
    	return view('fo.dangky');
    }
    public function postDangKy(registerForm $request){
    	echo '<pre>';
    	//print_r(Input::all());
    	print_r($request->all());
    	

    	return ;
    }
}
