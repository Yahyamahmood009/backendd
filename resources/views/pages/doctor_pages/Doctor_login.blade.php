<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('cssfile/Doctor_login.css')}}">
  <title>Document</title>
</head>
<body>
<div class="main-login">
      <div class="logo-login">
        <img class="logo1-login" src="images/logo.jpg" />
      </div>

      <div class="title">Medisist</div>

      <div class="login">Sign In</div>

      <div class="form">
        <label for="fname">Email</label>
        <input
          type="text"
          placeholder="Enter Email"
          id="fname"
          name="fname"
        ></input>

        <label for="lname">Password</label>
        <input
          type="text"
          id="lname"
          placeholder="Enter Password"
          name="lname"
        ></input>
      </div>

      <div class="buton">
        
      <input type="submit" value="Sign In" class="buton1">
      
       </input>
        
        <button class="buton2">
         <a href="{{url('Doctor_signup')}}"> Create Account </a>
        </button>
      </div>
    </div>
</body>
</html>