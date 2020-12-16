<header class="flex justify-between items-center sticky top-0 z-50 border-b h-20 px-6 bg-white | md:px-32">
    <div id="navbar-logo">
        <img src="{{ asset('/assets/svg/logo.svg') }}" alt="Codefuel" class="h-12" />
    </div>
    <div id="navbar-mobile-icon" class="block | lg:hidden lg:static">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-4 w-4 text-primary">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
    </div>
    <div id="navbar" class="hidden inset-0 absolute top-20 w-full bg-white z-50 | lg:inset-auto lg:top-auto lg:block lg:static lg:m-0 lg:w-auto">
        @include('layouts.partials.navigation')
    </div>
</header>