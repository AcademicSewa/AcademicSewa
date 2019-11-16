<?php






namespace App\Http\Controllers;

use Illuminate\Http\Request;
use auth;
use Session;
use App\Message;
class AdminController extends Controller
{
    public function index(Request $request){
        return view('admin.login');        
    }
           

    public function store(Request $request){
        if ($request->isMethod('post')){
            $data=$request->input();
            if(Auth::attempt(['email'=> $data['email'],'password'=>$data['password'],'admin'=>'1'])){
                // echo "success";die;
                // Session::put('adminSession',$data['email']);
                return redirect ('/admin/dashboard');
               
             }
              else
              
              { return redirect ('/admin')->with('flash_message_error','invalid password or email');
            }
        }       
    }
    
        public function dashboard(){
            
            return view ('admin.dashboard');
        }
        public function logout(){
           Session::flush();
           return redirect ('/admin')->with('flash_message_success','Logout successfully');
        }
        public function settings(){
            return view ('admin.settings');
        }
        public function display(){
            $messages=Message::all();
            return view('admin.message')->with('messages',$messages);
        }

    
        
   

                

               
               
            


    


}
