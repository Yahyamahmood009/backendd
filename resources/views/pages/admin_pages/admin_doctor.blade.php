<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('cssfile/admindoctor.css')}}">
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
        <p>Doctor</p>
    </div>
    <div class="main2">
    <table border="1">
        <thead>
            <tr>
                <th>FIRST NAME</th>
                <th>LAST NAME</th>
                <th>EMAIL</th>
                <th>MOBILE NUMBER</th>
                <th>ADDRESS</th>
                <th>DELETE</th>
                <th>UPDATE</th>
            </tr>
        </thead>
        <tbody>
            @forelse($doctorsignups as $doctorsignup)
            <tr>
                <td>{{$doctorsignup->first_name}}</td>
                <td>{{$doctorsignup->last_name}}</td>
                <td>{{$doctorsignup->Email}}</td>
                <td>{{$doctorsignup->Mobile_number}}</td>
                <td>{{$doctorsignup->Address}}</td> 
                <td>
                <a href="doctor-edit-admin/{{$doctorsignup->id}}"><button>update</button></a>
                </td>
                <td>  <a href="D_delete/{{$doctorsignup->id}}"><button>delete</button></a></td>
            </tr>
            @empty
                No data Found
            @endforelse
        </tbody>
    </table>
</body>
</html>