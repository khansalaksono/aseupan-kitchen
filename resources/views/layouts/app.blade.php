<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aseupan</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <header>
        <!-- Tambahkan konten header yang diinginkan -->
    </header>

    <main class="container">
        @yield('content')
    </main>

    <footer>
        <!-- Tambahkan konten footer yang diinginkan -->
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>