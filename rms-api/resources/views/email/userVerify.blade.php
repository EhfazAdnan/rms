<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verify Email</title>
</head>
<body>
    <h2>Dear <span>{{$details['name']}}</span></h2>
    <p>We are requesting you to verify your email address. Please click below link to verify your account</p>
    <a href="http:127.0.0.1:8000/auth/verify/{{$details['token']}}/{{$details['hash_Email']}}">Verify Here</a>
    <br><br><br>
    <p>Thank You</p>
</body>
</html>
