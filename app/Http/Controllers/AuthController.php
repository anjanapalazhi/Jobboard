<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    
    
    public function registerform(){

return view('register');



    }
    
    
    
    
    
    
public function login(){

  return view('login');


    }







}
