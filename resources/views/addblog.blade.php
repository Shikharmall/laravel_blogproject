@extends('layout')
@section('content')


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand">Hello {{session('user')}}</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/dashboard">Home </a>
      </li>
      <li class="nav-item  active">
        <a class="nav-link" href="/addblog">Add Blog <span class="sr-only">(current)</span></a>
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




<div class="mx-5">

  <form action="addbloguser" method="POST" enctype="multipart/form-data">
    @csrf
    <h2 class="text-center text-muted">Add Blog</h2>
    <div class="form-group">
      <input type="file" name="file" id="exampleFormControlInput1" placeholder="name@example.com" required>
    </div>
    <div class="form-group">
      <input type="hidden" name="writtenby" id="exampleFormControlInput1" placeholder="name@example.com" value="{{session('user')}}"required>
    </div>

    <div class="form-group">
      <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Enter the title of the blog...">
    </div>

    <div class="form-group">
      <textarea class="form-control" name = "content" id="exampleFormControlTextarea1" rows="10" placeholder="Write your blog content..." required></textarea>
    </div>

    <div class="form-group col-md-2 p-2 d-flex align-items-center">
      <button class="btn btn-outline-info my-2 my-sm-0 " type="submit">ADD</button>
    </div>

  </form>

</div>



<x-footer/>