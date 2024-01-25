@props([
    'title' => 'LaraGigs | Find Laravel Jobs & Projects',
])

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="/images/favicon.ico" />
    <title>
        {{ $title }}
    </title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    @yield('head')

    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @vite('resources/js/alpinejs_3.12.3_dist.min.js')
</head>

<body class="mb-48">

    <x-flash-message />

    <header>
        <x-navbar />
    </header>

    <main>
        {{ $slot }}
    </main>

    <x-footer />
</body>

</html>
