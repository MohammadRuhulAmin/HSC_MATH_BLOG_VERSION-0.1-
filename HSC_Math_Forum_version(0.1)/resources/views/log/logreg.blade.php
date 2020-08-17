<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Log In</h1>
        <form action="{{url('/log-varification')}}" method="post">
            @csrf
            <table>
                <tr>
                    <td>User Email</td>
                    <td><input type="text" name="userEmail"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>
                        <input type="password" name="userPassword">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Log">
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <div>
        <h1>Registration</h1>
        <form action="{{url('/user-registration')}}" method="post">
            @csrf
            <table>
                <tr>
                    <td>User Name</td>
                    <td><input type="text" name="userName"></td>
                </tr>
                <tr>
                    <td>User Email</td>
                    <td><input type="text" name="userEmail"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="userPassword"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Save"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
