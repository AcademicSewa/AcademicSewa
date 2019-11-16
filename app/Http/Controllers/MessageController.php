<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessageController extends Controller
{
    public function index()
    {
    
        return view('user.userdashboard');
    }

    public function store(Request $request)
    {
        //  dd($request)->all();
        $this->validate($request,['full_name'=>'required','email'=>'required','message'=>'required']);
        $message=new Message(); 

        
        $message->full_name = $request->full_name;
        $message->email = $request->email;
        $message->message = $request->message;
      

        $message->save();
        
        return redirect('dashboard');
          
            
           }
       
}
    
