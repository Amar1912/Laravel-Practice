<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function getUser(){ 
        return "Hello User";
    }
    function getProfile(){ 
        return "Hello Profile";
    }
    function getusername($name){ 
        return "Hello Username . " . $name;
    }
}
