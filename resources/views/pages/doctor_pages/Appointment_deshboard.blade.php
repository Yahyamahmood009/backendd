<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('cssfile/Appointment.css')}}">
  <title>Document</title>
</head>
<body>
<nav class="navbar">
      <img class="logo" src="images/logo.JPG"/>
      

      <div class="dropdown">
      <button class="dropbtn">Dr Nauman Mirza</button>
      <div class="dropdown-content">
        <a href="#">Setting</a>
        <a href="#">Log Out</a>
      </div>
      </div>  
    </nav>
    <div class="sidenav">
    <a href="{{url('/Doctor_Deshboard')}}">
          <p>Dashboard</p>
        </a>

        <a href="{{url('/Doctor_Deshboard_history')}}">Patient's Medical History</a>
        <a href="{{url('/Doctor_Deshboard_prescription')}}">
          Digital Prescription Form
          </a>
          <a href="{{url('/Doctor_Deshboard_appointment')}}">Set Appointments</a>
      </div>
      
      <div class="main1">
      <form method="POST" action="appoint_store">
        @csrf
      <div class='title'>
        Medisist
      </div>
      
      <div class='login'>
        Appointment Form
      </div>
    
      <div class='form1'>
        
        <div class='form1a'>
        <label for="fname">Patient Name*</label>
        <input type="text" placeholder='Enter Patient Name' id="p_name" name="p_name"></input>
        </div>

        <div class='form1b'>
        <label for="lname">Patient ID*</label>
        <input type="number" id="p_id" name="p_id"></input>
        </div>
      </div>

      <div class='form1'>
      <label for="lname">Appointment Date*</label>
        <input type="datetime-local" id="app_date" name="app_date"></input>
      </div> 

      <div class='btn-rem'>
        <button class='btn1-rem' type="submit">Set</button>
      </div>
      </form>
    </div>
    
</body>
</html>