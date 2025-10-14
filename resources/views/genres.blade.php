<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genres</title>
</head>
<body>
    <h1>Hallo Guys</h1>
    <p>Yuuuk Kita Lihat Genre Apa Saja Sih yang Ada</p>

    @foreach ($genres as $item)
        <ul>
            <li>{{ $item['name'] }}</li>
            <li>{{ $item['description'] }}</li>
        </ul>
    @endforeach
</body>
</html>