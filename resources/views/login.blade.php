<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Panel MLM</title>
</head>
<body>
    <form action="{{route('postlogin')}}" method="post">
        {{ csrf_field() }}
        Email: <input type="text" name="email">
        Password<input type="password" name="password">
        <button type="submit">Submit</button>
    </form>
</body>
</html>