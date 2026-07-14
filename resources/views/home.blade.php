<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta
            name="description"
            content="Andrew Bielecki is a Lead Software Engineer focused on dependable product engineering, Laravel systems, and practical technical leadership."
        >

        <title>Andrew Bielecki | Lead Software Engineer</title>

        @fonts
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-zinc-50 text-zinc-950 antialiased">
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

                    <div class="hidden items-center gap-7 text-sm font-medium text-zinc-700 sm:flex">
                        <a href="#work" class="hover:text-zinc-950 focus:outline focus:outline-2 focus:outline-offset-4 focus:outline-cyan-600">Work</a>
                        <a href="#expertise" class="hover:text-zinc-950 focus:outline focus:outline-2 focus:outline-offset-4 focus:outline-cyan-600">Expertise</a>
                        <a href="#contact" class="hover:text-zinc-950 focus:outline focus:outline-2 focus:outline-offset-4 focus:outline-cyan-600">Contact</a>
                    </div>
                </nav>
            </header>

            <main id="main">
                <section class="bg-white">
                    <div class="mx-auto grid max-w-7xl gap-12 px-6 py-14 sm:px-8 lg:grid-cols-[1.05fr_0.95fr] lg:items-center lg:py-20">
                        <div class="max-w-3xl">
                            <p class="text-sm font-semibold uppercase text-cyan-700">
                                Lead Software Engineer
                            </p>

                            <h1 class="mt-5 text-4xl font-semibold leading-tight text-zinc-950 sm:text-5xl lg:text-6xl">
                                Building reliable product systems with pragmatic technical leadership.
                            </h1>

                            <p class="mt-6 max-w-2xl text-lg leading-8 text-zinc-700">
                                I help teams turn complex product requirements into maintainable software, with a focus on Laravel, backend architecture, thoughtful frontend delivery, and durable engineering practices.
                            </p>

                            <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                                <a
                                    href="#contact"
                                    class="inline-flex items-center justify-center rounded-md bg-zinc-950 px-5 py-3 text-sm font-semibold text-white shadow-sm transition hover:bg-zinc-800 focus:outline focus:outline-2 focus:outline-offset-4 focus:outline-cyan-600"
                                >
                                    Start a conversation
                                </a>

                                <a
                                    href="#work"
                                    class="inline-flex items-center justify-center rounded-md border border-zinc-300 bg-white px-5 py-3 text-sm font-semibold text-zinc-950 transition hover:border-zinc-500 focus:outline focus:outline-2 focus:outline-offset-4 focus:outline-cyan-600"
                                >
                                    View selected work
                                </a>
                            </div>
                        </div>

                        <div class="grid gap-4 sm:grid-cols-[0.8fr_1.2fr] lg:grid-cols-1">
                            <img
                                src="{{ asset('images/avatar.jpg') }}"
                                alt="Portrait of Andrew Bielecki"
                                class="aspect-square w-full rounded-lg object-cover shadow-lg shadow-zinc-200 sm:max-lg:order-2"
                            >

                            <div class="overflow-hidden rounded-lg border border-zinc-200 bg-zinc-100 shadow-sm">
                                <img
                                    src="{{ asset('images/benny_desk.jpg') }}"
                                    alt="Workspace photo used as a visual reference for software craft"
                                    class="aspect-[16/9] w-full object-cover"
                                >
                            </div>
                        </div>
                    </div>
                </section>

                <section aria-labelledby="proof-heading" class="border-y border-zinc-200 bg-zinc-950 text-white">
                    <div class="mx-auto max-w-7xl px-6 py-8 sm:px-8">
                        <h2 id="proof-heading" class="sr-only">Professional highlights</h2>

                        <dl class="grid gap-6 sm:grid-cols-3">
                            <div>
                                <dt class="text-sm text-zinc-400">Experience</dt>
                                <dd class="mt-2 text-3xl font-semibold">10+ years</dd>
                            </div>
                            <div>
                                <dt class="text-sm text-zinc-400">Primary focus</dt>
                                <dd class="mt-2 text-3xl font-semibold">Product systems</dd>
                            </div>
                            <div>
                                <dt class="text-sm text-zinc-400">Leadership style</dt>
                                <dd class="mt-2 text-3xl font-semibold">Practical and clear</dd>
                            </div>
                        </dl>
                    </div>
                </section>

                <section id="expertise" aria-labelledby="expertise-heading" class="bg-zinc-50">
                    <div class="mx-auto max-w-7xl px-6 py-16 sm:px-8 lg:py-20">
                        <div class="max-w-3xl">
                            <p class="text-sm font-semibold uppercase text-cyan-700">Expertise</p>
                            <h2 id="expertise-heading" class="mt-3 text-3xl font-semibold text-zinc-950 sm:text-4xl">
                                Engineering judgment for teams that need momentum and maintainability.
                            </h2>
                        </div>

                        <div class="mt-10 grid gap-5 md:grid-cols-3">
                            <article class="rounded-lg border border-zinc-200 bg-white p-6 shadow-sm">
                                <h3 class="text-lg font-semibold text-zinc-950">Backend architecture</h3>
                                <p class="mt-3 leading-7 text-zinc-700">
                                    Designing Laravel and PHP systems with clear boundaries, testable flows, and operationally boring deployment paths.
                                </p>
                            </article>

                            <article class="rounded-lg border border-zinc-200 bg-white p-6 shadow-sm">
                                <h3 class="text-lg font-semibold text-zinc-950">Product delivery</h3>
                                <p class="mt-3 leading-7 text-zinc-700">
                                    Translating ambiguous product goals into scoped implementation plans, useful milestones, and maintainable interfaces.
                                </p>
                            </article>

                            <article class="rounded-lg border border-zinc-200 bg-white p-6 shadow-sm">
                                <h3 class="text-lg font-semibold text-zinc-950">Frontend collaboration</h3>
                                <p class="mt-3 leading-7 text-zinc-700">
                                    Building accessible Blade and JavaScript experiences that respect design intent without turning every page into a SPA.
                                </p>
                            </article>
                        </div>
                    </div>
                </section>

                <section id="work" aria-labelledby="work-heading" class="bg-white">
                    <div class="mx-auto max-w-7xl px-6 py-16 sm:px-8 lg:py-20">
                        <div class="flex flex-col justify-between gap-6 lg:flex-row lg:items-end">
                            <div class="max-w-3xl">
                                <p class="text-sm font-semibold uppercase text-cyan-700">Selected work</p>
                                <h2 id="work-heading" class="mt-3 text-3xl font-semibold text-zinc-950 sm:text-4xl">
                                    Placeholder projects for the first content pass.
                                </h2>
                            </div>

                            <p class="max-w-xl leading-7 text-zinc-700">
                                These examples are intentionally temporary. They show the kind of evidence this page will hold once final project details are ready.
                            </p>
                        </div>

                        <div class="mt-10 grid gap-6 lg:grid-cols-3">
                            <article class="overflow-hidden rounded-lg border border-zinc-200 bg-white shadow-sm">
                                <img
                                    src="{{ asset('images/divelogrepeat_header.jpg') }}"
                                    alt="Boat on the water representing a hobby project placeholder"
                                    class="aspect-[16/7] w-full object-cover"
                                >
                                <div class="p-6">
                                    <p class="text-sm font-semibold text-cyan-700">Platform modernization</p>
                                    <h3 class="mt-3 text-xl font-semibold text-zinc-950">Operational workflow rebuild</h3>
                                    <p class="mt-3 leading-7 text-zinc-700">
                                        Placeholder summary for a system that improved reliability, clarified domain workflows, and reduced support burden.
                                    </p>
                                </div>
                            </article>

                            <article class="overflow-hidden rounded-lg border border-zinc-200 bg-white shadow-sm">
                                <img
                                    src="{{ asset('images/beer_banner.jpg') }}"
                                    alt="Close-up banner image representing a learning project placeholder"
                                    class="aspect-[16/7] w-full object-cover"
                                >
                                <div class="p-6">
                                    <p class="text-sm font-semibold text-cyan-700">Technical leadership</p>
                                    <h3 class="mt-3 text-xl font-semibold text-zinc-950">Delivery planning system</h3>
                                    <p class="mt-3 leading-7 text-zinc-700">
                                        Placeholder summary for aligning engineering work with product goals, review loops, and realistic sequencing.
                                    </p>
                                </div>
                            </article>

                            <article class="overflow-hidden rounded-lg border border-zinc-200 bg-white shadow-sm">
                                <img
                                    src="{{ asset('images/benny_desk_ps.jpg') }}"
                                    alt="Desk photo representing an internal tooling project placeholder"
                                    class="aspect-[16/7] w-full object-cover"
                                >
                                <div class="p-6">
                                    <p class="text-sm font-semibold text-cyan-700">Developer experience</p>
                                    <h3 class="mt-3 text-xl font-semibold text-zinc-950">Maintainable toolchain</h3>
                                    <p class="mt-3 leading-7 text-zinc-700">
                                        Placeholder summary for improving local development, test confidence, and shared engineering conventions.
                                    </p>
                                </div>
                            </article>
                        </div>
                    </div>
                </section>

                <section aria-labelledby="approach-heading" class="bg-zinc-50">
                    <div class="mx-auto grid max-w-7xl gap-10 px-6 py-16 sm:px-8 lg:grid-cols-[0.8fr_1.2fr] lg:py-20">
                        <div>
                            <p class="text-sm font-semibold uppercase text-cyan-700">Approach</p>
                            <h2 id="approach-heading" class="mt-3 text-3xl font-semibold text-zinc-950 sm:text-4xl">
                                Calm execution in messy systems.
                            </h2>
                        </div>

                        <div class="grid gap-5 sm:grid-cols-2">
                            <article class="rounded-lg border border-zinc-200 bg-white p-6 shadow-sm">
                                <h3 class="font-semibold text-zinc-950">Clarify the problem</h3>
                                <p class="mt-3 leading-7 text-zinc-700">
                                    Start with the constraints, users, data, and failure modes before reaching for implementation details.
                                </p>
                            </article>

                            <article class="rounded-lg border border-zinc-200 bg-white p-6 shadow-sm">
                                <h3 class="font-semibold text-zinc-950">Ship durable increments</h3>
                                <p class="mt-3 leading-7 text-zinc-700">
                                    Keep releases understandable, observable, and easy to adapt when the next round of product learning arrives.
                                </p>
                            </article>

                            <article class="rounded-lg border border-zinc-200 bg-white p-6 shadow-sm">
                                <h3 class="font-semibold text-zinc-950">Protect maintainability</h3>
                                <p class="mt-3 leading-7 text-zinc-700">
                                    Prefer code paths that future teammates can reason about, test, debug, and safely change.
                                </p>
                            </article>

                            <article class="rounded-lg border border-zinc-200 bg-white p-6 shadow-sm">
                                <h3 class="font-semibold text-zinc-950">Lead through context</h3>
                                <p class="mt-3 leading-7 text-zinc-700">
                                    Make tradeoffs explicit so product, design, and engineering can move with shared expectations.
                                </p>
                            </article>
                        </div>
                    </div>
                </section>

                <section id="contact" aria-labelledby="contact-heading" class="bg-white">
                    <div class="mx-auto max-w-7xl px-6 py-16 sm:px-8 lg:py-20">
                        <div class="rounded-lg border border-zinc-200 bg-zinc-950 p-8 text-white shadow-lg shadow-zinc-200 sm:p-10 lg:flex lg:items-center lg:justify-between lg:gap-10">
                            <div class="max-w-2xl">
                                <p class="text-sm font-semibold uppercase text-cyan-300">Contact</p>
                                <h2 id="contact-heading" class="mt-3 text-3xl font-semibold sm:text-4xl">
                                    Looking for a lead engineer who can bridge product, architecture, and delivery?
                                </h2>
                                <p class="mt-4 leading-7 text-zinc-300">
                                    This area will eventually include final contact details. For now, it provides the intended shape for employer-focused calls to action.
                                </p>
                            </div>

                            <div class="mt-8 flex flex-col gap-3 sm:flex-row lg:mt-0 lg:flex-col xl:flex-row">
                                <a
                                    href="https://github.com/andrewbielecki"
                                    class="inline-flex items-center justify-center rounded-md bg-white px-5 py-3 text-sm font-semibold text-zinc-950 transition hover:bg-zinc-100 focus:outline focus:outline-2 focus:outline-offset-4 focus:outline-cyan-300"
                                >
                                    GitHub
                                </a>
                                <a
                                    href="https://www.linkedin.com/"
                                    class="inline-flex items-center justify-center rounded-md border border-zinc-600 px-5 py-3 text-sm font-semibold text-white transition hover:border-zinc-300 focus:outline focus:outline-2 focus:outline-offset-4 focus:outline-cyan-300"
                                >
                                    LinkedIn
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
            </main>

            <footer class="border-t border-zinc-200 bg-zinc-50">
                <div class="mx-auto flex max-w-7xl flex-col gap-3 px-6 py-8 text-sm text-zinc-600 sm:flex-row sm:items-center sm:justify-between sm:px-8">
                    <p>&copy; {{ date('Y') }} Andrew Bielecki</p>
                    <p>Built with Laravel, Blade, and Tailwind CSS.</p>
                </div>
            </footer>
        </div>
    </body>
</html>
