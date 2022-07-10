@section('title','Login')
@extends('Doctor.Layout.Auth.Doctor')

@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="css-3d-text" href="{{route('doctor.welcome')}}">UrDoc</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Signup
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="{{route('patient.registration')}}">Patient</a>
          <a class="dropdown-item" href="{{route('doctor.registration')}}">Doctor</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Login
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="{{route('patient.login')}}">Patient</a>
          <a class="dropdown-item" href="{{route('doctor.login')}}">Doctor</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contactus">Contact Us</a>
      </li>
    </ul>
  </div>
</nav>


<div class="card">
    <div class="card-header">Doctor's Login</div>
    <div class="card-body">
    <form method="POST" action={{route('doctor.login.save')}}>
      @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="validationServer01" required aria-describedby="emailHelp" name="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" required minlength="4">
  </div>

  


  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <a href="{{route('doctor.registration')}}">Create New Account</a>

</form>
    </div>
</div>


<div class="row container-fluid"  id="contactus" style=" background-color:rgb(17, 19, 235); text-align:center;">
    <div class="col-md-4" style="color: white; font-weight:bolder; font-size:larger">
      Contact: 1234567890
    </div>
    <div class="col-md-4" style="color: white; font-weight:bolder; font-size:larger">&copy;Doctor
    </div>
    <div class="col-md-4" style="color: white; font-weight:bolder; font-size:larger">Email: doctor@doctor.com</div>
  </div>


@endsection