<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Learning Laravel 11</title>
</head>

<body class="h-full">
    <div class="min-h-full">
        <!-- //start: Navbar -->
        <x-navbar></x-navbar>
        <!-- //end: Navbar -->

        <!-- //start: Header -->
        <x-header>{{ $title }}</x-header>
        <!-- //end: Header -->

        <!-- //start: Main -->
        <main>
            <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
                <!-- Your content -->
                <!-- //note: Get from Homepage -->
                {{ $slot }}
            </div>
        </main>
        <!-- //end: Main -->
    </div>


</body>

</html