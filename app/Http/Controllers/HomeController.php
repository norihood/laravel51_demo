<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
//use Input;
use App\Http\Requests\registerForm;
use Illuminate\Http\Request;
use App\User;
use App\Role;

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
        $a = User::with(array('roles' => function($query){
            return $query->select('name')->where('relation_type','group');
        }))->get()->toArray();
        echo '<pre>';print_r($a);
        $user = User::find(1)->roles;
        echo '<pre>';print_r($user->toArray());
        echo 'uR<pre>';print_r($user->with(array('roles' => function($query){
            return $query->where('relation_type','group');
        }))->get()->toArray());
        $role = Role::find(1);
        echo 'Role<pre>';print_r($role);
        die();
    	return view('fo.dangky');
    }
    public function postDangKy(registerForm $request){
    	echo '<pre>';
    	//print_r(Input::all());
    	print_r($request->all());
    	

    	return ;
    }
}
