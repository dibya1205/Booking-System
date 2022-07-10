@section('title','Signup')
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
    <div class="card-header">Doctor | Signup</div>
    <div class="card-body">
    <form action="{{route('doctor.registration.save')}}" method="post">
      @csrf
  <div class="mb-3">
  <i class="fa fa-user"></i>
    <label for="exampleInputEmail1" class="form-label">Full Name</label>
    <input type="text" class="form-control" name="name" required>
  </div>
  <div class="mb-3">
  <i class="fa fa-user-md"></i>

    <label for="exampleInputEmail1" class="form-label">Specialisation</label>
    <input type="text" class="form-control" name="spl" required>
  </div>
  <div class="mb-3">
  <i class="fa fa-history"></i>

    <label for="exampleInputEmail1" class="form-label">Experience (in number of years)</label>
    <select type="text" class="form-control" name="exp" required>
      <option>Select the year of experience</option>
      <option>2+ years</option>
      <option>5+ years</option>
      <option>10+ years</option>
      <option>20+ years</option>
</select>
  </div>
  <div class="mb-3">
  <i class="fa fa-calendar"></i>
    <label for="exampleInputEmail1" class="form-label">Select your Available days</label>
    <div class="form-check">
  <input class="form-check-input" type="checkbox" value="Monday" id="defaultCheck1"  name="day[]">
  <label class="form-check-label" for="defaultCheck1">
    Monday
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="Tuesday" id="defaultCheck2"  name="day[]"  d>
  <label class="form-check-label" for="defaultCheck2">
    Tuesday
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="Wednesday" id="defaultCheck3"  name="day[]"  d>
  <label class="form-check-label" for="defaultCheck2">
    Wednesday
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="Thursday" id="defaultCheck4" name="day[]" d>
  <label class="form-check-label" for="defaultCheck2">
    Thursday
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="Friday" id="defaultCheck5"  name="day[]"  d>
  <label class="form-check-label" for="defaultCheck2">
    Friday
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="Saturday" id="defaultCheck6"  name="day[]"  d>
  <label class="form-check-label" for="defaultCheck2">
    Saturday
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="Sunday" id="defaultCheck7"  name="day[]"  d>
  <label class="form-check-label" for="defaultCheck2">
    Sunday
  </label>
</div>


</div>


  <div class="mb-3">
  <i class="fa fa-envelope"></i>

    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
  <i class="fa fa-phone"></i>

    <label for="exampleInputEmail1" class="form-label">Contact Number</label>
    <input type="contact" class="form-control" name="contact" maxlength="10" minlength="10" required>
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
  Already Registered&asymp;<a href="{{route('doctor.login')}}"><b>Login here<b></a>

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