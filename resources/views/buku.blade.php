@dd($buku)
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
</head>
<body>
    <h1>Available Books</h1>
    <ul>
        @foreach ($buku as $b)        
            <article>
                <h3>{{$b->title}}</h3>
                <h1>{{$b->id}}</h1>
                <p>Author : {{$b->author}}</p>
            </article>
        @endforeach
    </ul>
</body>
</html>