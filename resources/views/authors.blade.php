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

    @foreach ($authors as $item)
        <ul>
            <li>{{ $item['name'] }}</li>
            <li>{{ $item['photo'] }}</li>
            <li>{{ $item['bio'] }}</li>
    
        </ul>
    @endforeach
</body>
</html>