<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('cssfile/Patientsignup.css')}}">
  <title>Document</title>
</head>
<body>
<form action="store" method="post">
    @csrf
<div class="main-p-signup">
  
      <div class="main-p-logo">
        <img class="main-p-logo1" src="images/logo.jpg" alt="logo" />
      </div>

      <div class="title">Medisist</div>

      <div class="login">Create your Medisist Account</div>

      <div class="form1">
        <div class="form1a">
          <label for="fname">First Name*</label>
          <input
            type="text"
            placeholder="Enter First Name"
            id="fname"
            name="fname"
          ></input>
        </div>

        <div class="form1b">
          <label for="lname">Last Name*</label>
          <input
            type="text"
            id="lname"
            placeholder="Enter Last Name"
            name="lname"
          ></input>
        </div>
      </div>

      <div class="form1">
        <label for="lname">Email*</label>
        <input
          type="text"
          id="email"
          placeholder="Enter Email"
          name="email"
        ></input>
      </div>

      <div class="form1">
        <label for="fname">Password*</label>
        <input
          type="text"
          placeholder="Enter Password"
          id="pass"
          name="pass"
        ></input>
      </div>

      <div class="form1">
        <label for="lname">Date of Birth*</label>
        <input type="date" id="dob" name="dob"></input>
      </div>

      <div class="form1">
        <div class="form1a">
          <label for="fname">Mobile Number*</label>
          <input
            type="tel"
            placeholder="Enter Mobile Number"
            id="m_num"
            name="m_num"
          ></input>
        </div>

        <div class="form1b">
          <label for="lname">CNIC*</label>
          <input
            type="text"
            id="cnic"
            placeholder="Enter CNIC Number"
            name="cnic"
          ></input>
        </div>
      </div>

      <div class="form1">
        <label for="lname">Address*</label>
        <input
          type="text"
          id="add"
          placeholder="Enter Complete Address"
          name="add"
        ></input>
      </div>

      <div class="form1">
        <label for="lname">Gender*</label>
      </div>
      <div class="form1">
        <div class="form1a">
          <input type="radio" id="r1" name="r1"></input> Male
        </div>

        <div class="form1b">
          <input type="radio" id="r1" name="r1"></input> Female
        </div>
      </div>

      <div class="btnnn">
        <button class="btnn1">
        <a href="{{url('Patient_signup')}}">Sign Up</a>
        </button>
        <button class="btnn2" type="submit">
          Sign In
        </button> 
      </div>
  
    </div>
    </form>
</body>
</html>