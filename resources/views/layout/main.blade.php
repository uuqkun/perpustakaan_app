<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cabin:wght@400;500;600;700&family=Raleway:ital,wght@0,100;0,300;0,400;0,600;0,700;1,500&display=swap"
        rel="stylesheet">
    <title>Perpustakaan || {{ $title }}</title>
</head>

<body class="font-raleway">
    @include('partials.navbar')
    <main class="container mx-auto">
        <section class="w-full">
            @yield('container')
        </section>
    </main>
</body>

</html>
