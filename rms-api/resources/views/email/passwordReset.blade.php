<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reset Password Email</title>
</head>
<body>
    <h2>Dear <span>{{$details['name']}}</span></h2>
    <p>You are requesting to change your password. Please click below link to update your password</p>
    <a href="http:127.0.0.1:8000/auth/forgot-password/{{$details['token']}}/{{$details['hashEmail']}}">Click Here</a>
    <br><br><br>
    <p>Thank You</p>
</body>
</html>
