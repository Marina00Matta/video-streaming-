<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index()
        {
            return view('index');
        }

    public function elements(){
        return view ('elements');
    }    

    public function freetest(){
        return view ('freetest');
    }    
}
