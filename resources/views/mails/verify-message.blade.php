<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <p>Hi {{ $name }}</p>
    <p>Email của bạn vừa được sử dụng đăng ký thành viên tại website {{ url('') }}</p>
    {{-- <p>Thông tin tài khoản:</p>
    <ul class="mx-2">
        <li>Tài khoản: {{ $email }}</li>
        <li>Mật Khẩu: {{ $password }}</li>
    </ul> --}}
    <p>Bạn vui lòng kích hoạt link dưới để sử dụng tài khoản!</p>
    <a href="{{ $url_verify }}">Kích hoạt tài khoản</a>
</body>
</html>