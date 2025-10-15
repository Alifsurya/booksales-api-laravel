<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authors</title>
</head>
<body>
    <h1>Hello Guys</h1>
    <p>Ayo Kita Kenalan Sama Para Penulis Buku yang Keren</p>

    @foreach ($authors as $auhthor)
        <ul>
            <li>{{ $auhthor['name'] }}</li>
            <li>{{ $auhthor['photo'] }}</li>
            <li>{{ $auhthor['bio'] }}</li>
    
        </ul>
    @endforeach
</body>
</html>