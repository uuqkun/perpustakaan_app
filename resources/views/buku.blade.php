
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
    <ul style="display: flex; gap: 1.5rem; ">
        @foreach ($books as $b)        
            <article>
                <h3>{{$b['id'] }}</h3>
                <h1>{{$b['title']}}</h1>
                <p>Author : {{$b['author']}}</p>
                <a href="/buku/{{$b['id']}}" class="btn-base">Go</a>
            </article>
        @endforeach
    </ul>
</body>
</html>