<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sanayi Tostçusu')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@400;500;700;800&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Main content -->
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
