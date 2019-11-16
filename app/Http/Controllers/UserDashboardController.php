<?php

namespace App\Http\Controllers;
use App\Adminpost;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function index(){

       $adminposts=Adminpost::all();
        return view('user.userdashboard')->with('adminposts',$adminposts);
    }
    public function bit(){
        return view('user.bit');
    }
    // public function display(){
        
    //     $adminposts=Adminpost::all();
    //     return view('user.userdashboard')->with('adminposts',$adminposts);

    // }
    public function bca(){
        return view('user.bca');
    }
    public function be(){
        return view('user.be');
    }

    public function civil(){
        return view('user.civil');
    }
}
