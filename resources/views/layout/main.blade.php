<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: '#da373d',
                    }
                }
            }
        }
    </script>
    <title>Perpustakaan || {{ $title }}</title>
</head>

<body>
    @include('partials.navbar')
    <main class="container w-[80%] mx-auto">
        <section>
            @yield('container')
        </section>
    </main>
</body>

</html>
