<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\Client;
use App\Http\Controllers\DB;
use Exception;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;
use App\Http\Controllers\Input;

use function Psy\sh;

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
    
    public function error(){
        return view ('error');
    }   

    public function checking(){
        return view ('checkemail');
    }   

    public function store(Request $request)
    {
          try{
            Client::create([
            'name' => sha1($request->name),
            'email' => sha1($request->email),
            'macaddress' => sha1($request->macaddress),
            'ipaddress' => sha1($request->ipaddress),
            'phone' => sha1($request->phone),
        ])->save();

        

            }
         catch (Exception $e){
            $errorCode = $e->errorInfo[1];
            if($errorCode == 1062){
                return redirect('error');
            }
           
         }   
         return redirect('/');
}
 
        public function checkemail(Request $request){
    
            session($request->email);
                // dd($request->email);
    if($client = Client::where('email', 'LIKE', $request->email)){
    
        redirect('index');
    }
    if($client === null)  {
        redirect('freetest');
    }
    
    }
    
    public function runscript() {
        // session(['email' => 'marina@m.com' ]);
        // dd(session('email'));
        // if (session('email') === null)
        // dd('123');

        $process = new Process([storage_path('sc.sh'), '--define', 'memory_limit=1024M', storage_path()]);
        // dd(storage_path());
        $process->run();


        // executes after the command finishes
        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
}

        echo $process->getOutput();
        $process ->getCommandLine('ls');
}


  
    // }

//1- set email fi el session gwa el checkemail function 
//2- run script check email mawgod aw la2 gwa el session 
//3- law mawgod yerun el script w law mesh mawgod yesignup




}

