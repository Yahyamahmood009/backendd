<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('cssfile/Digital_prescripiton.css')}}">
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
      

      <form action="D_presciption_store" method="GET">
        @csrf
      <div class="main1">
      
      <div class='title'>
        Medisist
      </div>
      
      <div class='login'>
        Digital Prescription Form
      </div>
      
      <div class='form1'>
        <div class='form1a'>
        <label for="fname">Patient Name*</label>
        <input type="text" placeholder='Enter Patient Name' id="p_name" name="p_name"></input>
        </div>

        <div class='form1b'>
        <label for="lname">Prescription Date*</label>
        <input type="date" id="pre_date" name="pre_date"></input>
        </div>
      </div>

      <div class='form1'>
        <div class='form1a'>
        <label for="fname">Patient ID*</label>
        <input type="number" placeholder='Enter First Name' id="p_id" name="p_id"></input>
        </div>

        <div class='form1b'>
        <label for="lname">Diagnose*</label>
        <input type="text" id="dia" placeholder='Enter Diagnose Name' name="dia"></input>
        </div>
      </div>

      <div class='form1'>
        <div class='form1a'>
        <label for="fname">Medicine Name*</label>
        <input type="text" placeholder='Enter Medicine Name' id="med1" name="med[]"></input>
        </div>

        <div class='form1b'>
        <label for="lname">Timing*</label><br/><br/>
        <input type="checkbox" id="ch1a" name="time[]" value="Morning"></input>Morning
        <input type="checkbox" id="ch2a" name="time[]" value="Afternoon"></input>Afternoon
        <input type="checkbox" id="ch3a" name="time[]" value="Night"></input>Night
        </div>
      </div>

      <div class='form1'>
        <div class='form1a'>
        <label for="fname">Medicine Name*</label>
        <input type="text" placeholder='Enter Medicine Name' id="med2" name="med[]"></input>
        </div>

        <div class='form1b'>
        <label for="lname">Timing*</label><br/><br/>
        <input type="checkbox" id="ch1b" name="time[]" value="Morning"></input>Morning
        <input type="checkbox" id="ch2b" name="time[]" value="Afternoon"></input>Afternoon
        <input type="checkbox" id="ch3b" name="time[]" value="Night"></input>Night
        </div>
      </div>

      <div class='btn-pre'>
        <button class='btn1-pre' type="submit">Submit</button>
      </div>
    </div>
      </form>
</body>
</html>