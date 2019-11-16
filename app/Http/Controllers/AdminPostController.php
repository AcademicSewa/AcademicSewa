<?php

namespace App\Http\Controllers;
use App\Adminpost;
use Illuminate\Http\Request;

class AdminPostController extends Controller
{
    
    public function add()
    {
        return view('admin.posts.add_post');

    }
    
    public function store(Request $request)
    {
          // dd($request)->all();
          $this->validate($request,['title'=>'required','message'=>'required']);
          $post=new Adminpost(); 
  
          $post->title = $request->title;
          $post->message = $request->message;
        //   $post->file = $request->file;
         
          $post->save();
          
      
      return redirect()->route('admin.posts.add_post');
      }
    public function display(){
        $adminposts=Adminpost::all();
        return view('admin.posts.viewpost')->with('adminposts',$adminposts);
    }
      public function delete($id){
        Adminpost::where('id',$id)->delete();
        session()->flash('message','Successfully deleted');
        return redirect()->back();

    }
}
