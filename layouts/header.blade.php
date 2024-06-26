@auth
    {{-- header  --}}
    <header>
        <nav class="border-gray-200 bg-white px-4 py-2.5 dark:bg-gray-900 lg:px-6">
            <div class="mx-auto flex max-w-screen-xl flex-wrap items-center justify-between px-4 md:px-6">
                <div class="flex items-center justify-start">
                    <a href="" class="mr-6 flex xl:mr-8">
                        @if (Settings::has('logo'))
                            <img src="@settings('logo')" class="mr-3 h-8 rounded" alt="@settings('app_name', 'WemX')" />
                        @endif
                        <span class="self-center whitespace-nowrap text-2xl font-semibold dark:text-white">
                            @settings('app_name', 'WemX')
                        </span>
                    </a>
                </div>
                @include(Theme::path('layouts.widgets.user-dropdown'))
            </div>
        </nav>

        <div class="border-b border-t border-gray-100 bg-gray-50 dark:border-gray-800 dark:bg-gray-800">
            <div class="mx-auto flex max-w-screen-xl flex-wrap items-center justify-between px-4 md:px-6">
                <ul class="-mb-px -ml-4 flex flex-wrap">
                    <li class="mr-2">
                        <a class="{{ is_active('dashboard') }} group inline-flex rounded-t-lg border-b-2 border-gray-50 px-4 py-4 text-center text-sm font-medium text-gray-500 dark:border-gray-800 dark:text-gray-400"
                            href="{{ route('dashboard') }}">
                            <span class="mr-2" style="font-size: 20px;">
                                <i class='bx bxs-dashboard'></i>
                            </span>
                            {!! __('client.dashboard') !!}
                        </a>
                    </li>
                    <li class="mr-2">
                        <a class="{{ is_active('news.index') }} group inline-flex rounded-t-lg border-b-2 border-gray-50 px-4 py-4 text-center text-sm font-medium text-gray-500 dark:border-gray-800 dark:text-gray-400"
                            href="{{ route('news.index') }}">
                            <span class="mr-2" style="font-size: 20px;">
                                <i class='bx bxs-news'></i>
                            </span>
                            {{ __('client.news') }}
                        </a>
                    </li>
                    <li class="mr-2">
                        <a class="{{ is_active('store.index') }} group inline-flex rounded-t-lg border-b-2 border-gray-50 px-4 py-4 text-center text-sm font-medium text-gray-500 dark:border-gray-800 dark:text-gray-400"
                            href="{{ route('store.index') }}">
                            <span class="mr-2" style="font-size: 20px;">
                                <i class='bx bxs-server'></i>
                            </span>
                            {!! __('client.services') !!}
                        </a>
                    </li>

                    @foreach (Page::getActive() as $page)
                        @if (in_array('navbar', $page->placement))
                            <li class="mr-2">
                                <a class="{{ is_active('page', ['page' => $page->path]) }} group inline-flex rounded-t-lg border-b-2 border-gray-50 px-4 py-4 text-center text-sm font-medium text-gray-500 dark:border-gray-800 dark:text-gray-400"
                                    href="{{ route('page', $page->path) }}"
                                    @if ($page->new_tab) target="_blank" @endif>
                                    <span class="mr-2" style="font-size: 20px;">
                                        {!! $page->icon !!}
                                    </span>
                                    {{ $page->name }}
                                </a>
                            </li>
                        @endif
                    @endforeach

                    {{-- load module nav items  --}}
                    @foreach (Module::allEnabled() as $module)
                        @if (config($module->getLowerName() . '.elements.main_menu'))
                            @foreach (config($module->getLowerName() . '.elements.main_menu') as $key => $menu)
                                <li class="mr-2">
                                    <a class="group inline-flex rounded-t-lg border-b-2 border-gray-50 px-4 py-4 text-center text-sm font-medium text-gray-500 dark:border-gray-800 dark:text-gray-400"
                                        href="{{ $menu['href'] }}">
                                        <span class="mr-2" style="font-size: 20px; {{ $menu['style'] }}">
                                            {!! $menu['icon'] !!}
                                        </span>
                                        {!! __($menu['name']) !!}
                                    </a>
                                </li>
                            @endforeach
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
    </header>
    {{-- end header --}}
@endauth

@guest
    <header>
        <nav class="bg-white border-gray-200 px-4 lg:px-6 py-2.5 dark:bg-gray-800">
            <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
                <a href="/" class="flex items-center">
                    <img src="@settings('logo', '/assets/core/img/logo.png')" class="mr-3 h-6 sm:h-9"
                        alt="@settings('app_name', 'WemX')" />
                    <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">@settings('app_name',
                        'WemX')</span>
                </a>
                @include(Theme::path('layouts.widgets.user-dropdown'))
                <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                    <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                        <li>
                            <a href="#home"
                                class="block py-2 pr-4 pl-3 text-white rounded bg-primary-700 lg:bg-transparent lg:text-primary-700 lg:p-0 dark:text-white"
                                aria-current="page">{!! __('client.home') !!}</a>
                        </li>
                        <li>
                            <a href="#features"
                                class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">{!! __('client.features') !!}</a>
                        </li>
                        <li>
                            <a href="#pricing"
                                class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">{!! __('client.pricing') !!}</a>
                        </li>
                    </ul>
                </div>
        </nav>
    </header>
@endguest
