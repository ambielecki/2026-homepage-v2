<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $title ?? 'Admin' }} | Andrew Bielecki</title>

        @fonts
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-screen bg-zinc-50 text-zinc-950 antialiased">
        <a
            href="#main"
            class="sr-only focus:not-sr-only focus:fixed focus:left-4 focus:top-4 focus:z-50 focus:rounded-md focus:bg-zinc-950 focus:px-4 focus:py-3 focus:text-sm focus:font-semibold focus:text-white focus:outline focus:outline-2 focus:outline-offset-2 focus:outline-cyan-500"
        >
            Skip to content
        </a>

        <div class="min-h-screen">
            <header class="border-b border-zinc-200 bg-white/90">
                <nav
                    class="mx-auto flex max-w-7xl items-center justify-between gap-6 px-6 py-5 sm:px-8"
                    aria-label="Primary navigation"
                >
                    <a href="/" class="text-base font-semibold text-zinc-950 focus:outline focus:outline-2 focus:outline-offset-4 focus:outline-cyan-600">
                        Andrew Bielecki
                    </a>

                    @auth
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button
                                type="submit"
                                class="rounded-md border border-zinc-300 bg-white px-4 py-2 text-sm font-semibold text-zinc-950 transition hover:border-zinc-500 focus:outline focus:outline-2 focus:outline-offset-4 focus:outline-cyan-600"
                            >
                                Log out
                            </button>
                        </form>
                    @endauth
                </nav>
            </header>

            <main id="main" class="mx-auto w-full max-w-5xl px-6 py-12 sm:px-8">
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
