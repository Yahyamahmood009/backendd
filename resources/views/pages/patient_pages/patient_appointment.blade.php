<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('cssfile/P_appoint.css')}}">
  <title>Document</title>
</head>
<body>
<nav class="navbar">
      <img class="logo" src="images/logo.JPG"/>
      

      <div class="dropdown">
      <button class="dropbtn">Shazaib Shehzad</button>
      <div class="dropdown-content">
        <a href="#">Setting</a>
        <a href="#">Log Out</a>
      </div>
      </div>  
    </nav>
    <div class="sidenav">
      <a href="#">
        <p>Dashboard</p>
      </a>

      <a href="#">
      Medical History
      </a>
      <a href="{{url('/Patient_appointment_Deshboard')}}">
      Appointments
      </a>    
    </div>
    <div class="main">
        <img src='images/logo.jpg'/>
        <p>Welcome to Medisist</p>
    </div>
    <div class="main2">
    <table border="1">
        <thead>
            <tr>
                <th>Patient NAME</th>
                <th>Patient ID</th>
                <th>DATE</th>
                
            </tr>
        </thead>
        <tbody>
            @forelse($appointment as $appointments)
            <tr>
                <td>{{$appointments->Patient_Name}}</td>
                <td>{{$appointments->Patient_id}}</td>
                <td>{{$appointments->DATE}}</td>   
            </tr>
            @empty
                No data Found
            @endforelse
        </tbody>
    </table>
</body>
</html>
