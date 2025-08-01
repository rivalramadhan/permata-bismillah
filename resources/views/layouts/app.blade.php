<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Permata')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.1.2/dist/tailwind.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-gray-100">

    <div class="flex">
        <div class="sticky top-0 h-screen">
            <x-sidebar />
        </div>
        <div class="flex-1 overflow-y-auto">
            <main class="p-6 sm:p-8">
                @yield('content')
            </main>
        </div>
        
    </div>
    @stack('scripts')
</body>
</html>