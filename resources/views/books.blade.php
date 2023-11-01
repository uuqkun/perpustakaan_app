<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Books</title>
</head>
<body>
    <h1>Books page</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>SubTitle</th>
                <th>Authors</th>
                <th>image</th>
                <th>url</th>
                <th>Availability</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <td>{{ $book->id }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->subtitle }}</td>
                    <td>{{ $book->authors }}</td>
                    <td>{{ $book->image }}</td>
                    <td>{{ $book->url }}</td>
                    <td>{{ $book->availability }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>