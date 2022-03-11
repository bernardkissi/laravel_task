<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style type="text/tailwindcss">
        @layer base {
            nav > ul > li:hover {
                color: pink;
                cursor: pointer;
            }
        }
  </style>
</head>

<body class="antialiased min-h-full font-sans text-gray-700">
    <header class="container mx-auto max-w-6xl">
        @include('partials.navbar')
    </header>
    <main class="container mx-auto max-w-6xl mt-16">
        @yield('content')
    </main>
</body>

</html>
