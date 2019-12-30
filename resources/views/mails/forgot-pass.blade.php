<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <p>Hi {{ $user->name }}</p>
    <p>Bạn đang nhận được email này vì chúng tôi đã nhận được yêu cầu đặt lại mật khẩu cho tài khoản của bạn.</p>
    <p>Bạn chỉ cần nhấn vào nút bên dưới:</p>
    <a href="{{url('/reset-password/true', $token) }}">Đặt Lại Mật Khẩu</a>
    <p>Liên kết đặt lại mật khẩu này sẽ hết hạn sau 60 phút.</p>
    <p>Nếu bạn không yêu cầu đặt lại mật khẩu, không cần thực hiện thêm hành động nào.</p>
</body>
</html>