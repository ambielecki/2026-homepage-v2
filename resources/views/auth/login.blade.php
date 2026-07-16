<x-layouts.admin title="Admin login">
    <div class="flex min-h-[calc(100vh-12rem)] w-full items-start justify-center pt-10 sm:pt-16">
        <div class="w-full max-w-[29.5rem] rounded-lg border border-zinc-200 bg-white p-8 shadow-sm sm:p-9">
            <p class="text-sm font-semibold uppercase text-cyan-700">Admin</p>
            <h1 class="mt-4 text-3xl font-semibold text-zinc-950">Log in</h1>

            <form method="POST" action="{{ route('login') }}" class="mt-8 space-y-6">
                @csrf

                <div>
                    <label for="email" class="block text-sm font-semibold text-zinc-800">Email</label>
                    <input
                        id="email"
                        name="email"
                        type="email"
                        value="{{ old('email') }}"
                        autocomplete="email"
                        required
                        autofocus
                        class="mt-3 block h-12 w-full rounded-md border border-zinc-300 bg-white px-3 text-zinc-950 shadow-sm focus:border-cyan-600 focus:outline-none focus:ring-2 focus:ring-cyan-600"
                    >
                    @error('email')
                        <p class="mt-2 text-sm font-medium text-red-700">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="password" class="block text-sm font-semibold text-zinc-800">Password</label>
                    <input
                        id="password"
                        name="password"
                        type="password"
                        autocomplete="current-password"
                        required
                        class="mt-3 block h-12 w-full rounded-md border border-zinc-300 bg-white px-3 text-zinc-950 shadow-sm focus:border-cyan-600 focus:outline-none focus:ring-2 focus:ring-cyan-600"
                    >
                    @error('password')
                        <p class="mt-2 text-sm font-medium text-red-700">{{ $message }}</p>
                    @enderror
                </div>

                <button
                    type="submit"
                    class="inline-flex h-12 w-full items-center justify-center rounded-md bg-zinc-950 px-5 text-sm font-semibold text-white shadow-sm transition hover:bg-zinc-800 focus:outline focus:outline-2 focus:outline-offset-4 focus:outline-cyan-600"
                >
                    Log in
                </button>
            </form>
        </div>
    </div>
</x-layouts.admin>
