<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <p>Hi {{ $data->name }}</p>
    <p>Email của bạn vừa được sử dụng đăng ký thành viên tại website {{ url('') }}</p>
    <p>Bạn vui lòng kích hoạt link dưới để sử dụng tài khoản!</p>
    <a href="{{ url('user/verify/'.$data->password) }}">Kích hoạt tài khoản</a>
</body>
</html>