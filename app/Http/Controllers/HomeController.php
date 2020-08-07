<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

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

        public function store(Request $request)
    {
        Client::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'macaddress' => $request->macaddress,
            'ipaddress'=> $request->ipaddress,
            'phone'=> $request->phone,

        ]);
        return redirect('/');
    }
    
}
