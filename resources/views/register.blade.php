<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <form action="{{ route('register') }}" method="post">

    @csrf 
    <label>login</label>
    <input type="text" name="login" required>
    <label>email</label>
    <input type="email" name="email" required>
    <label>full_name</label>
    <input type="text" name="full_name" required>
    <label>phone</label>
    <input type="tel" name="phone" required>
    <label>password</label>
    <input type="password" name="password" required>
    <button type="submit">Зарегистрироваться</button>
    </form>
</body>
</html>