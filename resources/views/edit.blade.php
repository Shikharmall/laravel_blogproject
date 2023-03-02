@extends('layout')
@section('content')


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand">Hello {{session('user')}}</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="/dashboard">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/addblog">Add Blog</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/edit">Edit Profile <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <div class="form-inline my-2 my-lg-0">
        <a class="nav-link" href="/logout">Log Out</a>
    </div>
  </div>
</nav>



<div class="card-body py-5 px-md-4" >

<div class="row d-flex justify-content-center ">
  <div class="col-lg-4">
    <form action="edituser" method="post">
    <h2 class="fw-bold mb-5 text-muted text-center">Edit Profile</h2>
      @if(Session::has('success'))
      <div class="alert alert-success">{{Session::get('success')}}</div>
      @endif
      @if(Session::has('fail'))
      <div class="alert alert-danger">{{Session::get('fail')}}</div>
      @endif
    @csrf

      <!-- 2 column grid layout with text inputs for the first and last names -->
      <div class="row">
        <div class="col-md-6 mb-4">
          <div class="form-outline">
            <input type="text"  name="fname" id="form3Example1" class="form-control" placeholder="First name" value="{{$userdetails[0]->fname}}" required/>
          </div>
        </div>
        <div class="col-md-6 mb-4">
          <div class="form-outline">
            <input type="text"  name="lname" id="form3Example2" class="form-control" placeholder="Last name" value="{{$userdetails[0]->lname}}" required/>
          </div>
        </div>
      </div>

      <!-- Email input -->
      <div class="form-outline mb-4">
        <input type="email" name="email" id="form3Example3" class="form-control" placeholder="Enter your email address" value="{{$userdetails[0]->email}}" required/>
        <!--<span class="text-danger">@error('email') {{$message}} @enderror</span>-->
      </div>

      <!-- Password input -->
      <div class="form-outline mb-4">
        <input type="text" name="password" id="form3Example4" class="form-control" placeholder="Enter your password" value="{{$userdetails[0]->password}}" required/>
        <!--<span class="text-danger">@error('password') {{$message}} @enderror</span>-->
      </div>

      <!-- Password input -->
      <div class="form-outline mb-4">
        <input type="text" name="compassword" id="form3Example4" class="form-control" placeholder="Re-enter your password"  value="{{$userdetails[0]->password}}"  required/>
        <!--<span class="text-danger">@error('password') {{$message}} @enderror</span>-->
      </div>

      <!-- Submit button -->
      <button type="submit" class="btn btn-primary btn-block mb-4">
        Edit
      </button>

    </form>
  </div>
</div>
</div>



<x-footer/>