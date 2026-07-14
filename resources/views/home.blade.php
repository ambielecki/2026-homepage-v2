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
                        <a href="#projects" class="hover:text-zinc-950 focus:outline focus:outline-2 focus:outline-offset-4 focus:outline-cyan-600">Projects</a>
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
                                Building useful software, keeping teams moving, and making time for side projects.
                            </h1>

                            <p class="mt-6 max-w-2xl text-lg leading-8 text-zinc-700">
                                I am a lead software engineer who likes steady product delivery, practical architecture, and small details that make software easier to live with. Away from work, I tend to collect hobby projects, notes, and experiments faster than I finish them.
                            </p>

                            <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                                <a
                                    href="#contact"
                                    class="inline-flex items-center justify-center rounded-md bg-zinc-950 px-5 py-3 text-sm font-semibold text-white shadow-sm transition hover:bg-zinc-800 focus:outline focus:outline-2 focus:outline-offset-4 focus:outline-cyan-600"
                                >
                                    Start a conversation
                                </a>

                                <a
                                    href="#projects"
                                    class="inline-flex items-center justify-center rounded-md border border-zinc-300 bg-white px-5 py-3 text-sm font-semibold text-zinc-950 transition hover:border-zinc-500 focus:outline focus:outline-2 focus:outline-offset-4 focus:outline-cyan-600"
                                >
                                    View hobby projects
                                </a>
                            </div>
                        </div>

                        <div>
                            <img
                                src="{{ asset('images/avatar.jpg') }}"
                                alt="Portrait of Andrew Bielecki"
                                class="aspect-[4/5] w-full rounded-lg object-cover shadow-lg shadow-zinc-200"
                            >
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

                <section id="projects" aria-labelledby="projects-heading" class="bg-white">
                    <div class="mx-auto max-w-7xl px-6 py-16 sm:px-8 lg:py-20">
                        <div class="grid gap-10 lg:grid-cols-[0.9fr_1.1fr] lg:items-center">
                            <div class="max-w-3xl">
                                <p class="text-sm font-semibold uppercase text-cyan-700">Hobby projects</p>
                                <h2 id="projects-heading" class="mt-3 text-3xl font-semibold text-zinc-950 sm:text-4xl">
                                    Half-finished ideas, useful experiments, and a few things I keep coming back to.
                                </h2>
                                <p class="mt-5 leading-7 text-zinc-700">
                                    This section is for personal projects and interests rather than polished case studies. The current copy is still placeholder content, but the shape is meant for dive logs, homebrewing notes, small tools, and experiments that make the homepage feel more like mine.
                                </p>
                                <p class="mt-5 leading-7 text-zinc-700">
                                    Some projects turn into real tools. Some stay as notes. Either way, they are a useful counterweight to the more formal engineering experience elsewhere on the page.
                                </p>
                            </div>

                            <img
                                src="{{ asset('images/divelogrepeat_header.jpg') }}"
                                alt="Boat on the water representing a personal scuba diving project"
                                class="aspect-[16/9] w-full rounded-lg object-cover shadow-lg shadow-zinc-200"
                            >
                        </div>

                        <div class="mt-10 grid gap-5 md:grid-cols-3">
                            <article class="rounded-lg border border-zinc-200 bg-zinc-50 p-6">
                                <p class="text-sm font-semibold text-cyan-700">Scuba logs</p>
                                <h3 class="mt-3 text-xl font-semibold text-zinc-950">DiveLogRepeat</h3>
                                <p class="mt-3 leading-7 text-zinc-700">
                                    Placeholder copy for a dive log and hobby project that tracks trips, notes, and the small details that make dives memorable.
                                </p>
                            </article>

                            <article class="rounded-lg border border-zinc-200 bg-zinc-50 p-6">
                                <p class="text-sm font-semibold text-cyan-700">Homebrewing</p>
                                <h3 class="mt-3 text-xl font-semibold text-zinc-950">Homebrew Helper</h3>
                                <p class="mt-3 leading-7 text-zinc-700">
                                    Placeholder copy for brewing notes, recipe experiments, and a simple place to keep batches from disappearing into old spreadsheets.
                                </p>
                            </article>

                            <article class="rounded-lg border border-zinc-200 bg-zinc-50 p-6">
                                <p class="text-sm font-semibold text-cyan-700">Experiments</p>
                                <h3 class="mt-3 text-xl font-semibold text-zinc-950">Small tools</h3>
                                <p class="mt-3 leading-7 text-zinc-700">
                                    Placeholder copy for side utilities, learning projects, and weekend builds that are useful enough to keep around.
                                </p>
                            </article>
                        </div>
                    </div>
                </section>

                <section aria-labelledby="interests-heading" class="bg-zinc-50">
                    <div class="mx-auto max-w-7xl px-6 py-16 sm:px-8 lg:py-20">
                        <div class="grid gap-10 lg:grid-cols-[1.1fr_0.9fr] lg:items-center">
                            <div class="overflow-hidden rounded-lg border border-zinc-200 bg-white shadow-sm">
                                <img
                                    src="{{ asset('images/beer_banner.jpg') }}"
                                    alt="Tap handles representing a homebrewing hobby project"
                                    class="aspect-[16/9] w-full object-cover"
                                >
                            </div>

                            <div>
                                <p class="text-sm font-semibold uppercase text-cyan-700">Interests</p>
                                <h2 id="interests-heading" class="mt-3 text-3xl font-semibold text-zinc-950 sm:text-4xl">
                                    A little more than the work history.
                                </h2>
                                <p class="mt-5 leading-7 text-zinc-700">
                                    The homepage should eventually mix career notes with the parts of life that make the work more grounded: diving, homebrewing, family projects, local experiments, and the occasional overbuilt personal tool.
                                </p>
                                <p class="mt-5 leading-7 text-zinc-700">
                                    This keeps the page useful for professional context without making it feel like a formal resume.
                                </p>
                            </div>
                        </div>
                    </div>
                </section>

                <section aria-labelledby="experience-heading" class="bg-white">
                    <div class="mx-auto grid max-w-7xl gap-10 px-6 py-16 sm:px-8 lg:grid-cols-[0.8fr_1.2fr] lg:py-20">
                        <div>
                            <p class="text-sm font-semibold uppercase text-cyan-700">Experience</p>
                            <h2 id="experience-heading" class="mt-3 text-3xl font-semibold text-zinc-950 sm:text-4xl">
                                Professional experience still does the heavy lifting.
                            </h2>
                        </div>

                        <div class="grid gap-5 sm:grid-cols-2">
                            <article class="rounded-lg border border-zinc-200 bg-white p-6 shadow-sm">
                                <h3 class="font-semibold text-zinc-950">Lead engineering work</h3>
                                <p class="mt-3 leading-7 text-zinc-700">
                                    Help teams turn product goals into steady implementation plans, clear tradeoffs, and maintainable code.
                                </p>
                            </article>

                            <article class="rounded-lg border border-zinc-200 bg-white p-6 shadow-sm">
                                <h3 class="font-semibold text-zinc-950">Build Laravel systems</h3>
                                <p class="mt-3 leading-7 text-zinc-700">
                                    Work across backend architecture, Blade views, databases, queues, tests, and the practical edges of production software.
                                </p>
                            </article>

                            <article class="rounded-lg border border-zinc-200 bg-white p-6 shadow-sm">
                                <h3 class="font-semibold text-zinc-950">Collaborate across disciplines</h3>
                                <p class="mt-3 leading-7 text-zinc-700">
                                    Keep product, design, and engineering conversations grounded in what users need and what the system can support.
                                </p>
                            </article>

                            <article class="rounded-lg border border-zinc-200 bg-white p-6 shadow-sm">
                                <h3 class="font-semibold text-zinc-950">Improve team habits</h3>
                                <p class="mt-3 leading-7 text-zinc-700">
                                    Nudge code review, testing, documentation, and delivery practices toward habits that make future work easier.
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
                                    href="https://github.com/ambielecki"
                                    class="inline-flex items-center justify-center gap-2 rounded-md bg-white px-5 py-3 text-sm font-semibold text-zinc-950 transition hover:bg-zinc-100 focus:outline focus:outline-2 focus:outline-offset-4 focus:outline-cyan-300"
                                >
                                    <svg class="size-4" viewBox="0 0 16 16" aria-hidden="true" fill="currentColor">
                                        <path d="M8 0C3.58 0 0 3.67 0 8.2c0 3.62 2.29 6.69 5.47 7.78.4.08.55-.18.55-.4v-1.53c-2.23.5-2.7-.98-2.7-.98-.36-.95-.89-1.2-.89-1.2-.73-.51.06-.5.06-.5.8.06 1.23.85 1.23.85.72 1.26 1.87.9 2.33.69.07-.53.28-.9.51-1.1-1.78-.21-3.64-.91-3.64-4.05 0-.9.31-1.63.82-2.2-.08-.21-.36-1.04.08-2.17 0 0 .67-.22 2.2.84A7.42 7.42 0 0 1 8 3.96c.68 0 1.35.09 1.98.27 1.52-1.06 2.19-.84 2.19-.84.44 1.13.16 1.96.08 2.17.51.57.82 1.3.82 2.2 0 3.15-1.87 3.84-3.65 4.04.29.26.54.76.54 1.53v2.25c0 .22.15.48.55.4A8.1 8.1 0 0 0 16 8.2C16 3.67 12.42 0 8 0Z" />
                                    </svg>
                                    GitHub
                                </a>
                                <a
                                    href="https://www.linkedin.com/in/andrew-bielecki-5835b5123/"
                                    class="inline-flex items-center justify-center gap-2 rounded-md bg-white px-5 py-3 text-sm font-semibold text-zinc-950 transition hover:bg-zinc-100 focus:outline focus:outline-2 focus:outline-offset-4 focus:outline-cyan-300"
                                >
                                    <svg class="size-4" viewBox="0 0 16 16" aria-hidden="true" fill="currentColor">
                                        <path d="M3.58 5.2H.6V16h2.98V5.2ZM2.09 0C1.13 0 .5.65.5 1.5c0 .83.61 1.5 1.55 1.5h.02c.98 0 1.59-.67 1.59-1.5C3.64.65 3.05 0 2.09 0ZM15.5 9.81c0-3.35-1.73-4.91-4.04-4.91-1.86 0-2.69 1.05-3.15 1.79V5.2H5.33c.04 1.01 0 10.8 0 10.8h2.98V9.97c0-.32.02-.65.12-.88.26-.65.84-1.31 1.82-1.31 1.28 0 1.8.99 1.8 2.45V16h2.98V9.81h.47Z" />
                                    </svg>
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
