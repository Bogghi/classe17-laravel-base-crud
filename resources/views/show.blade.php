<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <h2>{{ $book->title }}</h2>
        <img src="{{ $book->image }}" alt="">
        <h3>{{ $book->author }}</h3>
        <small>{{ $book->edition }}</small>
        <small>{{ $book->year }}</small>
        <small>{{ $book->isbn }}</small>
        <small>{{ $book->genere }}</small>
        <small>{{ $book->pages }}</small>
    </div>
</body>

</html>
