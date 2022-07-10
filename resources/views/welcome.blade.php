<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> rDocU </title>
        <link rel="icon" href="icon_path" type="image/icon type">

        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align: middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
                
            }
            .carousel-inner{
              margin-bottom: 5px;
              
            }
        
            .row{
              margin-left: 5px;
              
            }
            nav{
              margin-left: 5px; 
            }
        </style>
        <style>
 .css-3d-text {
    font-size: 50px;
    padding-right:12px;
    color: #17d6eb;
    font-family: Times New Roman;
   font-weight: bold;
    text-shadow: 0px 0px 0 rgb(6,197,218),
                 1px 1px 0 rgb(-10,181,202),
                 2px 2px 0 rgb(-27,164,185),
                 3px 3px 0 rgb(-44,147,168),
                 4px 4px 0 rgb(-61,130,151),
                 5px 5px 0 rgb(-77,114,135),
                 6px 6px 0 rgb(-94,97,118),
                 7px 7px 0 rgb(-111,80,101),
                 8px 8px 0 rgb(-128,63,84),
                 9px 9px 0 rgb(-144,47,68),
                 10px 10px 0 rgb(-161,30,51),
                 11px 11px 0 rgb(-178,13,34),
                 12px 12px  0 rgb(-195,-4,17),
                 13px 13px 12px rgba(0,0,0,1),
                 13px 13px 1px rgba(0,0,0,0.5),
                 0px 0px 12px rgba(0,0,0,.2);
 }
 .glow {
  font-size: 80px;
  color: blue;
  text-align: center;
  -webkit-animation: glow 1s ease-in-out infinite alternate;
  -moz-animation: glow 1s ease-in-out infinite alternate;
  animation: glow 1s ease-in-out infinite alternate;
}

@-webkit-keyframes glow {
  from {
    text-shadow: 0 0 10px red, 0 0 20px red, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073;
  }
  to {
    text-shadow: 0 0 20px #fff, 0 0 30px #fff, 0 0 40px #ff4da6, 0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
  }
}

.card {
  transition: transform .2s; /* Animation */
  margin: 0 auto;
}

.card:hover {
  background-color: #3e8e41;
  color: white;
  transform: scale(1.1); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}

</style>
    </head>
    <body class="antialiased" onload="titleMarquee()">
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Doctors Appointment</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form method="POST" action={{route('save.appointment')}}>
                @csrf
                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="name@example.com">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Contact Number</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="contact" placeholder="Contact Number">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Name</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="Name">
              </div>

              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Consulting Department</label>
                <select type="text" class="form-control" name="department">
                    <option>Select the Department of visit</option>
                    <?php
          		$conn = mysqli_connect("localhost", "root", "", "doc");
            $sql="Select spl from users where user_type='doctor'";
             $result=mysqli_query($conn,$sql);
             $i=0;
             if($result->num_rows>0){
                while($rows=$result->fetch_assoc()){
             echo '
             <option>'.$rows['spl'].'</option>
             ';
            
}}
else{
  echo"";
}
?>
                </select>
              </div>
              
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Doctor's Name</label>
                <select type="text" class="form-control" name="docname">
                    <option>Select the Consulting Doctor</option>
                    <?php
          		$conn = mysqli_connect("localhost", "root", "", "doc");
            $sql="Select name,email,spl,exp,day from users where user_type='doctor'";
             $result=mysqli_query($conn,$sql);
             $i=0;
             if($result->num_rows>0){
                while($rows=$result->fetch_assoc()){
             echo '
             <option>'.$rows['name'].'  ('.$rows['spl'].')</option>
             ';
            
}}
else{
  echo"";
}
?>
                </select>
              </div>
              

              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Timing</label>
                <input type="datetime-local" class="form-control" id="exampleFormControlInput1" name="timing" placeholder="Time of Appointment">
              </div>
              
         
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Book Now</button>
            </div>
          </form>
          </div>
        </div>
      </div>
        <!-- As a link -->


        
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

  <!-- <div id="carouselExampleSlidesOnly" class="carousel slide m-0" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item">
        <img src="https://img.freepik.com/free-vector/doctor-character-background_1270-84.jpg?w=2000" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://media.istockphoto.com/photos/doctor-holding-digital-tablet-at-meeting-room-picture-id1189304032?k=20&m=1189304032&s=612x612&w=0&h=ovTNnR0JX2cRZkzMBed9exRO_PamZLlysLDFkXesr4Q=" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item active">
        <img src="https://renovahospitals.com/wp-content/uploads/2021/04/b2-1.png" class="d-block w-100" alt="...">
      </div>
    </div>
  </div> -->
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner" style=" border:5px solid #555;">
    <div class="carousel-item active">
    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><img style="height: 350px; width:auto;" class="d-block w-100" src="https://thumbs.dreamstime.com/b/book-your-medical-appointment-online-using-mobile-app-doctor-sitting-desk-background-wearing-face-mask-190595834.jpg" alt="First slide"></a>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://mobisoftinfotech.com/resources/wp-content/uploads/2018/07/Banner-1.png" height="285px" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://sc04.alicdn.com/kf/U3db117176e5048109d53049785397510I.png" height="285px" alt="Third slide">
    </div>
    <!-- <div class="carousel-item">
      <img class="d-block w-100" src=".."  alt="Third slide">
    </div> -->
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<hr>



<div class="glow">
  <h1>Our Available Doctors</h1>
</div>
             <div class="row container-fluid mt-5">
  <div class="row">
          <?php
          		$conn = mysqli_connect("localhost", "root", "", "doc");
            $sql="Select name,email,spl,exp,day from users where user_type='doctor'";
             $result=mysqli_query($conn,$sql);
             $i=0;
             if($result->num_rows>0){
                while($rows=$result->fetch_assoc()){
             echo '

    <div class="col-md-4">
      <div class="card" style="width: 23rem; border: 2px dotted black; box-shadow:10px 10px 1px grey;  ">
        <img src="https://img.freepik.com/free-photo/image-professional-woman-doctor-physician-with-clipboard-writing-listening-patient-hospital-clinic-appointment-standing-torquoise-background_1258-85618.jpg?w=2000" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Name:  <b>'.$rows['name'].'</b></h5>
          <p class="card-text">Specialization:  <b>'.$rows['spl'].'</b></p>
          <p class="card-text">Experience:  <b>'.$rows['exp'].'</b></p>
          <p class="card-text">Availability:  <b>'.$rows['day'].'</b></p>
          <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Book Appointment</a>
        </div>
      </div> 
<hr>
   
      </div>  

  ';
            
}}
else{
  echo"";
}
?>
    </div>
  </div>
  <hr>
  <span class="footer"><div class="row container-fluid"  id="contactus" style="margin-top: 10px; background-color:rgb(17, 19, 235); text-align:center;">
    <div class="col-md-4" style="color: white; font-weight:bolder; font-size:larger">
      Contact: 8136088135
    </div>
    <div class="col-md-4" style="color: white; font-weight:bolder; font-size:larger">&copy;Dian
    </div>
    <div class="col-md-4" style="color: white; font-weight:bolder; font-size:larger">Email: dibyajyoti.das.1205@gmail.com</div>
  </div></span>

 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>      
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript">

var titleText = document.title;

function titleMarquee() {

 titleText = titleText.substring(1, titleText.length) + titleText.substring(0, 1);
 document.title = titleText;
 setTimeout("titleMarquee()", 450);
 }

</script>
</body>
</html>
