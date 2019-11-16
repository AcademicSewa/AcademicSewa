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
            <h5>Message table</h5>
           
   
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Full name</th>        
                  <th>Email</th>               
                  <th>Message</th>
                </tr>
              </thead>
              @foreach($messages as $message)
              <tbody>
            <tr>
            <td>{{$message->id}}</td>
            <td>{{$message->full_name}}</td>
            <td>{{$message->email}}</td>
            <td>{{$message->message}}</td></tr>
          </tbody>@endforeach</div>
        </div>
        @endsection