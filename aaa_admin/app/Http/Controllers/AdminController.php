<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login(){
        return view("login");
    }

    public function changePassword(){
        return view("change-password");
    }

    public function showNewAdmin(){
        return view("new-admin");
    }

    public function editProfile(){
        return view('edit-profile');
    }
}
