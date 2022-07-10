@section('title','Signup')
@extends('Patient.Layout.Auth.Patient')

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
    <div class="card-header">Patient | Signup</div>
    <div class="card-body">
    <form action="{{route('patient.registration.save')}}" method="post">
      @csrf
  <div class="mb-3">
  <i class="fa fa-user"></i>
    <label for="exampleInputEmail1" class="form-label">Full Name</label>
    <input type="text" class="form-control" name="name" required>
  </div>
  <!-- <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Specialisation</label>
    <input type="text" class="form-control" name="spl" required>
  </div> -->
  <div class="mb-3">
  <i class="fa fa-birthday-cake"></i>
      <label for="exampleFormControlInput1" class="form-label">Date of Birth</label>
      <input type="date" class="form-control" id="exampleFormControlInput1" name="exp" placeholder="Date of Birth">
  </div>

  <div class="mb-3">
    <i class="fa fa-address-card"></i>
      <label for="exampleFormControlInput1" class="form-label">Address</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="spl" placeholder="Address">
  </div>
  

  <div class="mb-3">
  <i class="fa fa-envelope"></i>
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
  <i class="fa fa-phone"></i>

    <label for="exampleInputPassword1" class="form-label">Contact</label>
    <input type="contact" class="form-control" id="exampleInputPassword1" name="contact">
  </div>
  <div class="mb-3">
  <i class="fa fa-key"></i>

    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password" required minlength="6">
  </div>
  <div class="mb-3">
  <i class="fa fa-check"></i>

    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="confirm_password" name="password_confirmation" required min="6">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>&emsp;
  Already Registered&asymp;<a target="blank" href="{{route('patient.login')}}"><b>Login here</b></a>

</form>
    </div>
</div>


<div class="row container-fluid"  id="contactus" style=" background-color:rgb(17, 19, 235); text-align:center ">
    <div class="col-md-4" style="color: white; font-weight:bolder; font-size:larger">
      Contact: 1234567890
    </div>
    <div class="col-md-4" style="color: white; font-weight:bolder; font-size:larger">&copy;Doctor
    </div>
    <div class="col-md-4" style="color: white; font-weight:bolder; font-size:larger">Email: doctor@doctor.com</div>
  </div>

@endsection