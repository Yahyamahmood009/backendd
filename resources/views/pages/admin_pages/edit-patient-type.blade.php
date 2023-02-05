<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modify Project Types</title>
</head>
<body>

    <table>
        <form action="/P_update/{{$patient->id}}" method="POST">
            @csrf
            <tbody>
                <tr>
                    <td><label for="">First name</label></td>
                    <td><input type="text" name="fname" value="{{$patient->fIrst_name}}" /></td></tr>

                    <td><label for="">Last name</label></td>
                    <td><input type="text" name="lname" value="{{$patient->last_name}}" /></td></tr>

                    <tr> <td><label for="">Email</label></td>
                    <td><input type="text" name="email" value="{{$patient->Email}}" /></td></tr>

                    <tr><td><label for="">Mobile Number</label></td>
                    <td><input type="text" name="mobile" value="{{$patient->Mobile_number}}" /></td></tr>

                    <tr><td><label for="">Address</label></td>
                    <td><input type="text" name="address" value="{{$patient->Address}}" /></td></tr>

                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Update">
                        <input type="reset" value="Clear">
                    </td>
                </tr>
            </tbody>
        </form>
    </table>
</body>
</html>
