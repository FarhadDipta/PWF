<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Modul Pertemuan 1</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                /*! tailwindcss v4.0.7 | MIT License | https://tailwindcss.com */
                @layer theme {
                    :root, :host {
                        --font-sans: 'Instrument Sans', ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
                    }
                }
            </style>
            {{-- Menggunakan Script Tailwind CDN untuk memastikan style berjalan jika Vite tidak aktif --}}
            <script src="https://cdn.tailwindcss.com"></script>
        @endif
    </head>
    <body class="bg-black text-white min-h-screen flex items-center justify-center p-6 font-sans">

        <div class="w-full max-w-4xl border border-zinc-800 rounded-lg p-12 bg-[#0a0a0a]/50">
            
            <h1 class="text-white font-medium text-lg mb-1">
                Farhad Dipta Utama
            </h1>

            <p class="text-zinc-500 mb-6">
                20230140206
            </p>

            <a href="{{ route('dashboard') }}"
            class="inline-block bg-white text-black px-4 py-2 rounded text-sm font-medium hover:bg-gray-200 transition-colors">
                Dashboard
            </a>

        </div>

    </body>
</html>