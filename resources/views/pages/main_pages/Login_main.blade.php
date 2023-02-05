<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="{{asset('cssfile/Startlogin.css')}}">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Document</title>
</head>
<body>
<div class="Main">
      
      <div class="main2-div1">
      <div class='login-main-logo'>
        <img class='login-main-logo1' src= "images/logo.jpg"/>
      </div>
      
      <div class='title'>
        Medisist
      </div>
      
      <div class='login'>
        Sign In
      </div>
      </div>
      
      <div class="login-main-div2">
        <div class="doctor">
          <img src="images/doc.png" class="doc_logo"></img>
          <br></br>
           <button class="btn">
           <a href="{{url('Doctor_login')}}">  Doctor</a>
          </button>
        </div>

        <div class="patient">
          <img src="images/pat.jpg" class="pat_logo"></img>
          <br></br>
          <button class="btn">
          <a href="{{url('Patient_login')}}"> Patient </a>
          </button>
        </div>

        <div class="admin">
          <img src="images\admin.png" class="ad_logo" />
          <br></br>
          <button class="btn"><a href="{{url('Admin_Login')}}">Admin</a></button>
        </div>
      </div>
    </div>
</body>
</html>