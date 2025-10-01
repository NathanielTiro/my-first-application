<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Site</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 font-sans">

    <!-- Navbar -->
    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 py-3 flex justify-between items-center">
            <!-- Logo / Title -->
            <div class="text-xl font-bold text-blue-600">
                JobPortal
            </div>

            <!-- Links -->
           <div class="ml-10 flex items-baseline space-x-4">
    <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
    <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
    <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
</div>

        </div>
    </nav>

    <!-- Page Header -->
    <header class="bg-blue-600 text-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4">
            <h1 class="text-3xl font-bold">{{ $heading ?? 'Welcome' }}</h1>
        </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto py-8 px-4">
        <div class="bg-white rounded-lg shadow p-6">
            {{ $slot }}
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-gray-300 text-center py-4 mt-12">
        &copy; {{ date('Y') }} JobPortal. All rights reserved.
    </footer>

</body>
</html>
