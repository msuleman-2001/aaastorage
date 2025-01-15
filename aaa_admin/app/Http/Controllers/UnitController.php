<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function unitList(){
        return view ('unit-list');
    }
    public function unitDetail(){
        return view ('unit-detail');
    }
}