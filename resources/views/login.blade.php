@extends('layout')
@section('content')



<!-- Section: Design Block -->
<section class="text-center">
  <!-- Background image -->
  <div class="p-5 bg-image" style="
        background-image: url('img/delivery.jpg');
        height: 300px;
        ">
      
      <h1 class="fw-bold mb-5 text-muted">Blog's APP</h1>  
      </div>
  <!-- Background image --> 

  <div class="card mx-4 mx-md-5 shadow-5-strong" style="
        margin-top: -100px;
        background: hsla(0, 0%, 100%, 0.6);
        backdrop-filter: blur(30px);
        ">


    <div class="card-body py-5 px-md-4" >

      <div class="row d-flex justify-content-center ">
        <div class="col-lg-4">
          <h2 class="fw-bold mb-5 text-primary">Log In</h2>
          <form action="login" method="post" >
            @if(Session::has('success'))
            <div class="alert alert-success">{{Session::get('success')}}</div>
            @endif
            @if(Session::has('fail'))
            <div class="alert alert-danger">{{Session::get('fail')}}</div>
            @endif
          @csrf

            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email" name="email" id="form3Example3" class="form-control" placeholder="Enter your email address" required/>
              <!--<span class="text-danger">@error('email') {{$message}} @enderror</span>-->
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
              <input type="password" name="password" id="form3Example4" class="form-control" placeholder="Enter your password" required/>
              <!--<span class="text-danger">@error('password') {{$message}} @enderror</span>-->
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">
              Sign up
            </button>


            <a href="/register" class="link-dark">New?  Register Now</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>


<br><br><br>
<!-- Section: Design Block -->
@stop