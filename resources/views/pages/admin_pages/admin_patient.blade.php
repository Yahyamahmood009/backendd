<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('cssfile/adminpatient.css')}}">
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
        <p>Patient</p>
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
                <th>UPDDATE</th>
                <th>DELETE</th>
            </tr>
        </thead>
        <tbody>
            @forelse($patient as $patients)
            <tr>
                <td>{{$patients->fIrst_name}}</td>
                <td>{{$patients->last_name}}</td>
                <td>{{$patients->Email}}</td>
                <td>{{$patients->Mobile_number}}</td>
                <td>{{$patients->Address}}</td> 
                <td>
                <a href="Patient-edit-admin/{{$patients->id}}"><button>update</button></a>
                </td>
                <td> <a href="P_delete/{{$patients->id}}"><button>delete</button></a></td>
            </tr>
            @empty
                No data Found
            @endforelse
        </tbody>
    </table>

</body>
</html>