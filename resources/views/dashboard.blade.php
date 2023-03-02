@extends('layout')
@section('content')


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand">Hello {{session('user')}}</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/dashboard">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/addblog">Add Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/edit">Edit Profile</span></a>
      </li>
    </ul>
    <div class="form-inline my-2 my-lg-0">
        <a class="nav-link" href="/logout">Log Out</a>
    </div>
  </div>
</nav>



<h2 class="text-center text-muted my-2">Blogs</h2>

<div class="respobox mx-5 my-3">


  
  @foreach($blogs as $blg)
  <div class="card mx-5 my-5" style="width: 18rem;">
    <img class="card-img-top" src="{{asset('uploads/'.$blg->img)}}" alt="blog images" height ="50%">
    <div class="card-body">
      <h5 class="card-title">{{$blg->title}}</h5>
      <h6 class="card-title">written by: {{$blg->writtenby}}</h6>
      <p class="card-text">{{$blg->content}}</p>
      <!--<a href="#" class="btn btn-primary">Go somewhere</a>-->
    </div>
  </div>
  @endforeach
  
</div>


<x-footer/>