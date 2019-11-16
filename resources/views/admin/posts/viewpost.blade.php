@extends('layouts.adminlayout.master')
@section('content')
@foreach($errors->all() as $error)
             {{$error}}
            @endforeach

  @if(session()->has('message'))
    {{session()->get('messsage')}}
  @endif


  

  <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>View Post</h5>
           
   
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>id</th>
                  <th>Title</th>
                  <th>Message</th>
                  <th>Files</th>
                 
                  
                </tr>
              </thead>
              @foreach($adminposts as $adminpost)
              <tbody>
            <tr>
            <td>{{$adminpost->id}}</td>
            <td>{{$adminpost->title}}</td>
            <td>{{$adminpost->message}}</td>
            <td>{{$adminpost->file}}</td>
           
        <td>
        
       
        <a href="{{route('admin.posts.delete',[$adminpost->id])}}" class="btn btn-info">Delete</a>
        </td>
        </tr>
        </tbody>
        @endforeach
        </table>
        </div>


@endsection