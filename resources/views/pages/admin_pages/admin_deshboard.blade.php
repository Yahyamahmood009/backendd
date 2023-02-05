<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('cssfile/Admin_deshboard.css')}}">
  <title>Document</title>
</head>
<body>
<nav class="navbar">
      <img class="logo" src="images/logo.JPG"/>
      

      <div class="dropdown">
      <button class="dropbtn">Admin</button>
      <div class="dropdown-content">
        <a href="#">Setting</a>
        <a href="#">Log Out</a>
      </div>
      </div>  
    </nav>
    <div class="sidenav">
    <a href="{{url('/Admin_Deshboard')}}">
          <p>Dashboard</p>
        </a>

        <a href="{{url('doctor-side-admin')}}">DOCTOR</a>
        <a href="{{url('Patient-side-admin')}}">
         PATIENTS
          </a>
         
      </div>

      <div class="main">
        <img src='images/logo.jpg'/>
        <p>Welcome to Medisist</p>
    </div>

</body>
</html>