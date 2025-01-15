<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminList(){
        return view ('admin-list');
    }

    public function editProfile(){
        return view('edit-profile');
    }

    public function login(){
        return view("page-login");
    }

    public function changePassword(){
        return view("change-password");
    }

    public function newAdmin(){
        return view("new-admin");
    }
}
