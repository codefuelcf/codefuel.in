<header class="flex justify-between items-center sticky top-0 z-50 border-b h-20 px-6 bg-white | md:px-32" x-data="{mobileNavigationOpen: false}">
    <div id="navbar-logo">
        <a href="/"> @include('svgs.logo', ['class' => 'h-12 text-primary']) </a>
    </div>
    <div id="navbar-mobile-icon" class="block | lg:hidden lg:static" x-bind:class="{ 'transform rotate-90': mobileNavigationOpen }" x-on:click="mobileNavigationOpen = !mobileNavigationOpen">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-4 w-4 text-primary">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
    </div>
    <div id="navbar" class="hidden inset-0 absolute top-20 w-full bg-white z-50 | lg:inset-auto lg:top-auto lg:block lg:static lg:m-0 lg:w-auto" x-bind:class="{ 'hidden': !mobileNavigationOpen }">
        <nav class=" bg-white py-4 px-6 | md:px-32 | lg:px-0 lg:py-0">
            <ul class="menu list-none uppercase text-sm sm:mt-0">
                <li class="menu-item mx-4"><a href="{{ route('front.home') }}">Home</a></li>
                <li class="menu-item mx-4"><a href="{{ route('front.about') }}">About</a></li>
                <li class="menu-item mx-4"><a href="{{ route('front.services') }}">Services</a></li>
                <li class="menu-item mx-4"><a href="{{ route('front.contact') }}">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>