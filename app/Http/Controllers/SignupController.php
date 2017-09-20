<?php

namespace App\Http\Controllers;
use App\Model\User;
use Hash;

use Illuminate\Http\Request;

class SignupController extends Controller
{
    
	public function index(){

    	return view('sign_up');
    }


    public function register(Request $request){

    	//validation for all fields
    	$this->validate($request,[
    			'name' => 'required',
    			'password' => 'required|min:4',
    			'email' => 'required|email|unique:users',
    			'mobile' => 'required|numeric|unique:users',
    			'company_name' => 'required',
    			'designation' => 'required',
    			'company_size' => 'required'
    		],[
    			'name.required' => ' The name field is required.',
    			'password.required' => ' The password field is required.',
    			'password.min' => ' The password must be at least 4 characters.',
    			'email.required' => ' The email field is required.',
    			'mobile.required' => 'The mobile field is required.',
    			'company_name.required' => 'The company name field is required.',
    			'designation.required' => 'The designation field is required.',
    			'company_size.required' => 'The company size field is required.',
    			'email.unique' => ' The email already exists.',
    			'mobile.unique' => ' The mobile already exists.',
    	]);

    	$requestData = $request->all();      

        $name = $requestData['name'];
        $email = $requestData['email'];
        $password = Hash::make($requestData['password']);
        $mobile = $requestData['mobile'];
        $company_name = $requestData['company_name'];
        $designation = $requestData['designation'];
        $company_size = $requestData['company_size'];

        $data_insert = array(

        	'name' => $name,
        	'email' => $email,
        	'password' => $password,
        	'mobile' => $mobile,
        	'company_name' => $company_name,
        	'designation' => $designation,
        	'company_size' => $company_size
        );

        //insert all data in database
       	$register = User::insert($data_insert);

        if($register){

        	echo "Registered Successfully!";
        }
    }

}
