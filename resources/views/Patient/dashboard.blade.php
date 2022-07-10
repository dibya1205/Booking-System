@section('title','dashboard')
@extends('Patient.Layout.Pat.Header')

@section('content')
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a target="blank"  class="css-3d-text" href="{{route('doctor.welcome')}}">
  UrDoc
</a>
<br>
  <a style="color: white;" class="btn btn-primary" href="{{route('patient.dashboard')}}">
  Bookings
</a>
<br>
<a style="color: white;" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Profile
</a>
<br>
<a style="color: white;" class="btn btn-primary" href="{{route('doctor.welcome')}}" target="blank">
  Book Appointment
</a>
<br>
<a style="color: white;" class="btn btn-primary" data-toggle="modal" data-target="#contactus">
 Contact Us
</a>
<br>
<a style="color: white;" class="btn btn-primary" href="{{route('logout')}}">
  Logout
</a>


    <!-- <a href="#">Clients</a>
  <a href="#">Contact</a> -->
</div>

<!-- Use any element to open the sidenav -->
<span onclick="openNav()"><button>&#9776;&emsp;&emsp;</button>
<span class="css-3d-text">UrDoc</span></span>


<!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
<div id="main">
        <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Patient's | Profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        Name: @php  print_r(Auth::User()->name); @endphp <br><br>
        Email id: @php print_r(Auth::User()->email); @endphp<br><br>
        Contact: @php print_r(Auth::User()->contact); @endphp<br>
      </div> 
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="contactus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Contact Us</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        Contact: 8136088135<br><br>
        Email: dibyajyoti.das.1205@gmail.com<br><br>
        Address: Gauhati University Institute of Science and Technology, India<br>
      </div> 
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<div class="content">
<div class="dashboard_header">
<h2 style="text-align: center;" >Your Consultation Details</h2>
<h5><p><a href={{route('doctor.welcome')}} target="blank" >Click Here to Book an Appointment</a></h5></p>
</div>    
<table class="table table-dark table-striped">

        <tr>
           
            <th> <i class="fa fa-flag"></i>&nbsp; Sr. No</th>
            <th><i class="fa fa-user-md"></i>&nbsp;Doctors Name</th>
            <th><i class="fa fa-hospital"></i>&nbsp;Department</th>
            <th><i class="fa fa-clock"></i>&nbsp;Date | Time (24 hours)</th>
        </tr>
        @php
                $appoint = DB::table('appointment')->where('email',Auth::User()->email)->get();
                $i=0;
        @endphp
        @foreach($appoint as $apt)
            <tr>
                <td>{{++$i}}</td>
                <td>{{$apt->docname}}</td>
                <td>{{$apt->department}}</td>
                <td>{{$apt->timing}}</td>
                
            </tr>
        @endforeach
    </table>

</div>


</div>




@endsection