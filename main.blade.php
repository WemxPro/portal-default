<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>@settings('seo::title', 'WemX')</title>
    <link rel="icon" href="@settings('favicon', '/assets/core/img/logo.png')">

    {{-- meta tags --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Meta Description Tag: Affects click-through rates from search results -->
    <meta name="description"
        content="{{ $meta_description ?? settings('seo::description', 'Manage your orders with an easy-to-use Dashboard') }}">
    <meta name="theme-color" content="@settings('seo::color', '#4f46e5')">
    <meta name="keywords" content="{{ $meta_keywords ?? settings('seo::keywords', '') }}">

    <!-- Meta Robots Tag: Controls search engine crawling and indexing -->
    <meta name="robots" content="@settings('seo::robots', 'index, follow')">

    <!-- Open Graph Tags: Enhances visibility and engagement on social media platforms -->
    <meta property="og:title" content="@settings('seo::title', 'WemX')">
    <meta property="og:description"
        content="{{ $meta_description ?? settings('seo::description', 'Manage your orders with an easy-to-use Dashboard') }}">
    <meta property="og:image" content="@settings('seo::image', '/static/wemx.png')">

    <link rel="stylesheet" href="{{ Theme::get('Default')->assets }}assets/css/custom.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">

    @if (settings('google::analytics_code'))
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id={{ settings('google::analytics_code') }}"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', '{{ settings('google::analytics_code') }}');
        </script>
    @endif

    @include(Portal::path('layouts.tailwind'))
</head>

<body>
    @include(Portal::path('layouts.header'))

    <section id="home" class="bg-white dark:bg-gray-900">
        <div class="mx-auto grid max-w-screen-xl px-4 py-8 lg:grid-cols-12 lg:gap-8 lg:py-16 xl:gap-0">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1 class="mb-4 max-w-2xl text-4xl font-extrabold leading-none dark:text-white md:text-5xl xl:text-6xl">
                    @settings('portal::title', 'Minecraft Server Hosting')
                </h1>
                <p class="mb-6 max-w-2xl font-light text-gray-500 dark:text-gray-400 md:text-lg lg:mb-8 lg:text-xl">
                    @settings('portal::description', 'Start your Minecraft server today for as low as $1/GB and be equiped for all
                    situations with our high performance gear keeping your servers running 24/7')
                </p>
                <a href="#pricing"
                    class="bg-primary-700 hover:bg-primary-800 focus:ring-primary-300 dark:focus:ring-primary-900 mr-3 inline-flex items-center justify-center rounded-lg px-5 py-3 text-center text-base font-medium text-white focus:ring-4">
                    @settings('portal::button', __('client.explore_plans') )
                    <svg class="-mr-1 ml-2 h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
                <a href="@settings('socials::discord')"
                    class="inline-flex items-center justify-center rounded-lg border border-gray-300 px-5 py-3 text-center text-base font-medium text-gray-900 hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                    {!! __('auth.join_discord') !!}
                </a>
            </div>
            <div class="hidden lg:col-span-5 lg:mt-0 lg:flex">
                <img src="@settings('portal::default::header_image', 'https://www.freepnglogos.com/uploads/minecraft-png/download-minecraft-characters-png-png-image-pngimg-29.png')"
                    alt="{!! __('mockup') !!}">
            </div>
        </div>
    </section>

    <section class="bg-white dark:bg-gray-900">
        <div class="mx-auto max-w-screen-xl px-4 py-8 lg:py-16">
            <h2
                class="mb-8 text-center text-3xl font-extrabold leading-tight tracking-tight text-gray-900 dark:text-white md:text-4xl lg:mb-16">
                {!! __('client.host_favorite_games') !!}</h2>
            <div class="grid grid-cols-2 gap-8 text-gray-500 dark:text-gray-400 sm:gap-12 md:grid-cols-3 lg:grid-cols-3">
                <a href="#" class="flex items-center justify-center">
                    <img src="/assets/core/img/logos/rust.png" class="hover:text-gray-900 dark:hover:text-white"
                        style="height: 60px;" />
                    <h2
                        class="ml-4 text-center text-3xl font-extrabold leading-tight tracking-tight text-gray-900 dark:text-white md:text-3xl">
                        {!! __('client.rust') !!}
                    </h2>
                </a>

                <a href="#" class="flex items-center justify-center">
                    <img src="/assets/core/img/logos/minecraft.png" class="hover:text-gray-900 dark:hover:text-white"
                        style="height: 60px;" />
                    <h2
                        class="ml-4 text-center text-3xl font-extrabold leading-tight tracking-tight text-gray-900 dark:text-white md:text-3xl">
                        {!! __('client.minecraft') !!}
                    </h2>
                </a>

                <a href="#" class="flex items-center justify-center">
                    <img src="/assets/core/img/logos/ark.png" class="hover:text-gray-900 dark:hover:text-white"
                        style="height: 60px;" />
                    <h2
                        class="ml-4 text-center text-3xl font-extrabold leading-tight tracking-tight text-gray-900 dark:text-white md:text-3xl">
                        {!! __('client.ack') !!}
                    </h2>
                </a>

            </div>
        </div>
    </section>

    <section id="features" class="bg-gray-50 dark:bg-gray-800">
        <div class="mx-auto max-w-screen-xl px-4 py-8 sm:py-16 lg:px-6">
            <div class="mb-8 max-w-screen-md lg:mb-16">
                <h2 class="mb-4 text-4xl font-extrabold text-gray-900 dark:text-white">{!! __('client.our_game_anel') !!}</h2>
                <p class="text-gray-500 dark:text-gray-400 sm:text-xl">
                    {!! __('client.our_game_anel_desc', ['app' => settings('app_name', 'WemX')]) !!}
                </p>
            </div>
            <div class="space-y-8 md:grid md:grid-cols-2 md:gap-12 md:space-y-0 lg:grid-cols-3">
                <div>
                    <div
                        class="bg-primary-100 dark:bg-primary-900 mb-4 flex h-10 w-10 items-center justify-center rounded-full lg:h-12 lg:w-12">
                        <div class="text-primary-600 dark:text-primary-300 text-2xl">
                            <i class="bx bxs-file"></i>
                        </div>
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">{!! __('client.file_manager') !!}</h3>
                    <p class="text-gray-500 dark:text-gray-400">
                        {!! __('client.file_manager_desc') !!}
                    </p>
                </div>

                <div>
                    <div
                        class="bg-primary-100 dark:bg-primary-900 mb-4 flex h-10 w-10 items-center justify-center rounded-full lg:h-12 lg:w-12">
                        <div class="text-primary-600 dark:text-primary-300 text-2xl">
                            <i class="bx bxs-plug"></i>
                        </div>
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">{!! __('client.plugins_manager') !!}</h3>
                    <p class="text-gray-500 dark:text-gray-400">
                        {!! __('client.plugins_manager_desc') !!}
                    </p>
                </div>

                <div>
                    <div
                        class="bg-primary-100 dark:bg-primary-900 mb-4 flex h-10 w-10 items-center justify-center rounded-full lg:h-12 lg:w-12">
                        <div class="text-primary-600 dark:text-primary-300 text-2xl">
                            <i class="bx bx-revision"></i>
                        </div>
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">{!! __('client.backup_manager') !!}</h3>
                    <p class="text-gray-500 dark:text-gray-400">
                        {!! __('client.backup_manager_desc') !!}
                    </p>
                </div>

                <div>
                    <div
                        class="bg-primary-100 dark:bg-primary-900 mb-4 flex h-10 w-10 items-center justify-center rounded-full lg:h-12 lg:w-12">
                        <div class="text-primary-600 dark:text-primary-300 text-2xl">
                            <i class="bx bxs-user"></i>
                        </div>
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">{!! __('client.user_manager') !!}</h3>
                    <p class="text-gray-500 dark:text-gray-400">
                        {!! __('client.user_manager_desc') !!}
                    </p>
                </div>

                <div>
                    <div
                        class="bg-primary-100 dark:bg-primary-900 mb-4 flex h-10 w-10 items-center justify-center rounded-full lg:h-12 lg:w-12">
                        <div class="text-primary-600 dark:text-primary-300 text-2xl">
                            <i class="bx bxs-time-five"></i>
                        </div>
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">{!! __('client.schedule_manager') !!}</h3>
                    <p class="text-gray-500 dark:text-gray-400">
                        {!! __('client.schedule_manager_desc') !!}
                    </p>
                </div>

                <div>
                    <div
                        class="bg-primary-100 dark:bg-primary-900 mb-4 flex h-10 w-10 items-center justify-center rounded-full lg:h-12 lg:w-12">
                        <div class="text-primary-600 dark:text-primary-300 text-2xl">
                            <i class="bx bxs-data"></i>
                        </div>
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">{!! __('client.database_manager') !!}</h3>
                    <p class="text-gray-500 dark:text-gray-400">
                        {!! __('client.database_manager_desc') !!}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white dark:bg-gray-900" id="pricing">
        <div class="mx-auto max-w-screen-xl px-4 py-8 lg:px-6 lg:py-16">
            @if ($selected_category !== null)
                <div class="mx-auto mb-8 max-w-screen-md text-center lg:mb-12">
                    <h2 class="mb-4 text-4xl font-extrabold tracking-tight text-gray-900 dark:text-white">{!! __('client.viewing_plans_for') !!}
                        {{ $selected_category->name }}</h2>
                    <p class="mb-5 font-light text-gray-500 dark:text-gray-400 sm:text-xl">{{ $selected_category->description }}</p>
                </div>
                <div class="space-y-8 sm:gap-6 lg:grid lg:grid-cols-3 lg:space-y-0 xl:gap-10">
                    @foreach ($selected_category->packages as $package)
                        @if ($package->status == 'unlisted' or $package->status == 'inactive' or $package->status == 'restricted')
                            @if ($package->status == 'restricted')
                                @if (Auth::guest() or !Auth::user()->is_admin())
                                    @continue
                                @endif
                            @else
                                @continue
                            @endif
                        @endif
                        <div
                            class="mx-auto flex max-w-lg flex-col rounded-lg border border-gray-100 bg-white p-6 text-center text-gray-900 shadow dark:border-gray-600 dark:bg-gray-800 dark:text-white xl:p-8">
                            <h3 class="mb-4 text-2xl font-semibold">{{ $package->name }}</h3>
                            <p class="font-light text-gray-500 dark:text-gray-400 sm:text-lg">
                                {!! __('client.price_block_desc', [
                                    'period' => mb_strtolower($package->prices->first()->period()),
                                    'total_price' => $package->prices->first()->totalPrice(),
                                    'renewal_price' => $package->prices->first()->renewal_price,
                                    'per_period' => mb_strtolower($package->prices->first()->periodToHuman()),
                                    'symbol' => currency('symbol'),
                                ]) !!}
                            </p>
                            <div class="my-8 flex items-baseline justify-center">
                                <span class="mr-2 text-5xl font-extrabold">
                                    {{ currency('symbol') }}{{ $package->prices->first()->renewal_price }}
                                </span>
                                <span class="text-gray-500 dark:text-gray-400">/{{ $package->prices->first()->periodToHuman() }}</span>
                            </div>

                            <!-- List -->
                            <ul role="list" class="mb-8 space-y-4 text-left">
                                <img class="h-auto w-full" src="{{ asset('storage/products/' . $package->icon) }}" alt="icon" />
                                <div class="grid grid-cols-1 gap-4">
                                    @foreach ($package->features()->orderBy('order', 'desc')->get() as $feature)
                                        <li class="flex items-center space-x-3">
                                            <!-- Icon -->
                                            <span class="text-{{ $feature->color }}-500 dark:text-{{ $feature->color }}-500 bx-sm">
                                                {!! $feature->icon !!}
                                            </span>
                                            <span>{{ $feature->description }}</span>
                                        </li>
                                    @endforeach
                                </div>
                            </ul>
                            <a href="{{ route('store.package', ['package' => $package->id]) }}"
                                class="bg-primary-600 hover:bg-primary-700 focus:ring-primary-200 dark:focus:ring-primary-900 rounded-lg px-5 py-2.5 text-center text-sm font-medium text-white focus:ring-4 dark:text-white">
                                {!! __('client.get_started') !!}</a>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="mx-auto mb-8 max-w-screen-md text-center lg:mb-12">
                    <h2 class="mb-4 text-4xl font-extrabold tracking-tight text-gray-900 dark:text-white">
                        {!! __('client.no_plans_display') !!}
                    </h2>
                    <p class="mb-5 font-light text-gray-500 dark:text-gray-400 sm:text-xl">
                        {!! __('client.no_plans_display_desc') !!}
                    </p>
                </div>
            @endif
        </div>
    </section>

    <section>
        <aside aria-label="Related articles" class="lg:py-15 bg-white py-8 dark:bg-gray-900">
            <div class="mx-auto max-w-screen-xl px-4">
                <h2 class="mb-8 text-2xl font-bold text-gray-900 dark:text-white">{!! __('client.other_categories') !!}</h2>
                <div class="grid gap-12 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ($categories->all() as $category)
                        @if (in_array($category->status, ['unlisted', 'inactive', 'restricted']))
                            @if ($category->status == 'restricted')
                                @if (Auth::guest() or !Auth::user()->is_admin())
                                    @continue
                                @endif
                            @else
                                @continue
                            @endif
                        @endif
                        <article class="max-w-xs">
                            <a href="{{ url()->current() }}?category={{ $category->link }}#pricing">
                                <img src="{{ $category->icon() }}" class="mb-5 rounded-lg" alt="Image 1" style="height: 200px;">
                            </a>
                            <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 dark:text-white">
                                <a href="#">{{ $category->name }}</a>
                            </h2>
                            <p class="mb-4 font-light text-gray-500 dark:text-gray-400">{{ $category->description }}</p>
                            <a href="{{ url()->current() }}?category={{ $category->link }}#pricing"
                                class="mb-2 mr-2 min-w-full rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-center text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700">
                                @if (request()->input('category', isset($selected_category->link) ? $selected_category->link : '') == $category->link)
                                    {!! __('client.selected') !!}
                                @else
                                    {!! __('client.pricing') !!}
                                @endif
                            </a>
                        </article>
                    @endforeach
                </div>
            </div>
        </aside>
    </section>

    <section class="bg-white dark:bg-gray-900">
        <div class="mx-auto max-w-screen-xl px-4 py-8 sm:py-16 lg:px-6">
            <div class="mx-auto max-w-screen-sm text-center">
                <h2 class="mb-4 text-4xl font-extrabold leading-tight text-gray-900 dark:text-white">{!! __('client.get_started_now') !!}</h2>
                <p class="mb-6 font-light text-gray-500 dark:text-gray-400 md:text-lg">
                    {!! __('client.register_your_account_no-time') !!}
                </p>
                <a href="{{ route('register') }}"
                    class="bg-primary-700 hover:bg-primary-800 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 mb-2 mr-2 rounded-lg px-5 py-2.5 text-sm font-medium text-white focus:outline-none focus:ring-4">
                    {!! __('client.create_my_account') !!}
                </a>
            </div>
        </div>
    </section>

    @include(Theme::path('layouts.cookie'))

    <footer class="bg-gray-50 p-4 dark:bg-gray-800 sm:p-6">
        <div class="mx-auto max-w-screen-xl">
            <div class="md:flex md:justify-between">
                <div class="mb-6 md:mb-0">
                    <a href="/" class="flex items-center">
                        <img src="@settings('logo', '/assets/core/img/logo.png')" class="mr-3 h-8"
                            alt="@settings('app_name', 'WemX') Logo" />
                        <span class="self-center whitespace-nowrap text-2xl font-semibold dark:text-white">
                            @settings('app_name', 'WemX')
                        </span>
                    </a>
                </div>
                <div class="grid grid-cols-2 gap-8 sm:grid-cols-3 sm:gap-6">
                    <div>
                        <h2 class="mb-6 text-sm font-semibold uppercase text-gray-900 dark:text-white">{!! __('client.resources') !!}</h2>
                        <ul class="text-gray-600 dark:text-gray-400">
                            @foreach (Page::getActive() as $page)
                                @if (in_array('footer_resources', $page->placement))
                                    <li class="mb-4">
                                        <a href="{{ route('page', $page->path) }}"
                                            @if ($page->new_tab) target="_blank" @endif class="hover:underline">
                                            {{ $page->name }}
                                        </a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold uppercase text-gray-900 dark:text-white">{!! __('client.help_center') !!}</h2>
                        <ul class="text-gray-600 dark:text-gray-400">
                            @foreach (Page::getActive() as $page)
                                @if (in_array('footer_help_center', $page->placement))
                                    <li class="mb-4">
                                        <a href="{{ route('page', $page->path) }}"
                                            @if ($page->new_tab) target="_blank" @endif class="hover:underline">
                                            {{ $page->name }}
                                        </a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold uppercase text-gray-900 dark:text-white">{!! __('client.legal') !!}</h2>
                        <ul class="text-gray-600 dark:text-gray-400">
                            @foreach (Page::getActive() as $page)
                                @if (in_array('footer_legal', $page->placement))
                                    <li class="mb-4">
                                        <a href="{{ route('page', $page->path) }}"
                                            @if ($page->new_tab) target="_blank" @endif class="hover:underline">
                                            {{ $page->name }}
                                        </a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-gray-200 dark:border-gray-700 sm:mx-auto lg:my-8" />
            <div class="mt-4 flex space-x-6 sm:mt-0 sm:justify-center">
                @if (settings('socials::discord'))
                    <a href="@settings('socials::discord')" target="_blank"
                        class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <i class='bx bxl-discord-alt' style="font-size: 1.25rem"></i>
                    </a>
                @endif
                @if (settings('socials::twitter'))
                    <a href="@settings('socials::twitter')" target="_blank"
                        class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                        </svg>
                    </a>
                @endif
                @if (settings('socials::github'))
                    <a href="@settings('socials::github')" target="_blank"
                        class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                @endif
            </div>
        </div>
    </footer>
</body>

</html>
