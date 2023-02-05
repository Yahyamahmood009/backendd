<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('cssfile/Doctorsignup.css')}}">
  <title>Document</title>
</head>
<body>
<form action="D_signup_store" method="POST">
        @csrf
<div class="main-d-signup">
     
      <div class='logo-d-signup'>
        <img class='logo1-d-signup' src='images/logo.jpg'/>
      </div>
      
      <div class='title'>
        Medisist
      </div>
      
      <div class='login'>
        Create your Medisist Account
      </div>
      
      <div class='form1'>
        <div class='form1a'>
        <label for="fname">First Name</label>
        <input type="text" placeholder='Enter First Name' id="fname" name="fname"></input>
        </div>

        <div class='form1b'>
        <label for="lname">Last Name</label>
        <input type="text" id="lname" placeholder='Enter Last Name' name="lname"></input>
        </div>
      </div>

      <div class='form1'>
      <label for="lname">Email</label>
        <input type="text" id="email" placeholder='Enter Email' name="email"></input>
      </div> 

      <div class='form1'>
        <label for="fname">Password</label>
        <input type="text" placeholder='Enter Password' id="pass" name="pass"></input>
      </div>

      <div class='form1'>
      <label for="lname">Date of Birth*</label>
        <input type="date" id="dob" name="dob"></input>
      </div> 

      <div class='form1'>
        <div class='form1a'>
        <label for="fname">Mobile Number*</label>
        <input type="tel" placeholder='Enter Mobile Number' id="m_num" name="m_num"></input>
        </div>

        <div class='form1b'>
        <label for="lname">License Number*</label>
        <input type="text" id="l_num" placeholder='Enter License Number' name="l_num"></input>
        </div>
      </div>

      <div class='form1'>
        <label for="lname">Address*</label>
        <input type="text" id="add" placeholder='Enter Complete Address' name="add"></input>
      </div> 

      <div class='form1'>
        <label for="lname">Gender*</label>
      </div> 
      <div class='form1'>
        <div class='form1a'>
        <input type="radio" id="r1" name="ro1" value="male"></input> Male
        </div>

        <div class='form1b'>
        <input type="radio" id="r1" name="ro1" value="female"></input> Female
        </div>
      </div>

      <div class='butn'>
        <button class='butn1'> <a href="{{url('Doctor_signup')}}">Sign Up</a></button>
        <button class='butn2'> <Link to="/Main-deshboard">Sign In</Link></button>
      </div>
      
    </div>
  </form>
</body>
</html>