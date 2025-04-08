<!DOCTYPE html>
<html>
<head>
    <title>Reset Password</title>
</head>
<body>
    <h2>Hello,</h2>
    <p>You requested to reset your password. Click the link below to proceed:</p>
    <a href="{{ url('reset-password/'.$token) }}">Reset Password</a>
    <p>If you did not request this, please ignore this email.</p>
</body>
</html>
