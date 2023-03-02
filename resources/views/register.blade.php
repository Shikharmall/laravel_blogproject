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
          <form action="registeruser" method="post" >
          <h2 class="fw-bold mb-5 text-primary">Register Now</h2>
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
                  <input type="text"  name="fname" id="form3Example1" class="form-control" placeholder="First name" required/>
                </div>
              </div>
              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input type="text"  name="lname" id="form3Example2" class="form-control" placeholder="Last name" required/>
                </div>
              </div>
            </div>

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

            <!-- Password input -->
            <div class="form-outline mb-4">
              <input type="password" name="compassword" id="form3Example4" class="form-control" placeholder="Re-enter your password" required/>
              <!--<span class="text-danger">@error('password') {{$message}} @enderror</span>-->
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">
              Register
            </button>


           <a href="/" class="link-dark">Sign in</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->

<br>
@stop