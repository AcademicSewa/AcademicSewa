@extends('layouts.adminlayout.master')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
<title>Message Form</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="{{asset('adminassets/css/bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{asset('adminassets/css/bootstrap-responsive.min.css') }}" />
<link rel="stylesheet" href="{{asset('adminassets/css/colorpicker.css') }}" />
<link rel="stylesheet" href="{{asset('adminassets/css/datepicker.css') }}" />
<link rel="stylesheet" href="{{asset('adminassets/css/uniform.css') }}" />
<link rel="stylesheet" href="{{asset('adminassets/css/select2.css') }}" />
<link rel="stylesheet" href="{{asset('adminassets/css/matrix-style.css') }}" />
<link rel="stylesheet" href="{{asset('adminassets/css/matrix-media.css') }}" />
<link rel="stylesheet" href="{{asset('adminassets/css/bootstrap-wysihtml5.css') }}" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="row-fluid">
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h4>Add new post</h4>
        </div>
        <div class="widget-content nopadding">
          <form action="{{url('addpost')}}" method="post" class="form-horizontal" enctype="multipart/form-deta">{{csrf_field()}}
            <div class="control-group">
              <label class="control-label">Title</label>
              <div class="controls">
                <input type="text" class="span11" name="title" placeholder="Enter title here" />
              </div>
            </div>
            
          
<!--            
            <div class="control-group">
              <label class="control-label">Description field:</label>
              <div class="controls">
                <input type="text" class="span11" />
                <span class="help-block">Description field</span> </div>
            </div> -->
            <div class="control-group">
              <label class="control-label" >Message</label>
              <div class="controls">
                <textarea class="span11" name="message" ></textarea>
              </div>
            </div>
            <!-- <div>
            <input type="file" name="file">
            </div> -->

            <div class="form-actions">
              <button type="submit" class="btn btn-success " >Post</button>
            </div>
          </form>
        </div>
      </div>
      </body></html>
@endsection



