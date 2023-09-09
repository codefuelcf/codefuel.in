@extends('layouts.default')

@section('mainContent')
<main>
    <section id="home-hero" class="px-6 py-20 bg-gradient-to-bl from-primary to-red-800 text-white | md:px-32 md:flex md:items-center">
        <div class="hidden mb-8 | md:block md:px-8 md:w-1/3 md:mb-0">
            @include('svgs.logo', ['class' => 'h-32 mx-auto text-primary'])
        </div>
        <div class="w-full text-right | md:px-8 md:w-2/3">
            <h1 class="text-5xl">
                Hey There, We Are <br />
            </h1>
            <h1 class="text-5xl h-12">
                <span id="home-typed-js-hero"></span>
            </h1>
            <p class="mt-8">
                We provide solutions for all your digital needs ranging from development to desigining to marketing.
            </p>
        </div>
    </section>
    <section id="our-numbers" class="px-6 py-20 text-center w-full flex items-center | md:w-1/3 md:mx-auto">
        <div class="px-8 w-1/3">
            <h2 class="text-xl font-bold text-primary">10+</h2>
            <h4 class="text-xs">Clients</h4>
        </div>
        <div class="px-8 w-1/3">
            <h2 class="text-xl font-bold text-primary">
                <span x-data="{}" x-text="new Date().getFullYear() - new Date(2016, 0 , 1).getFullYear()"></span>+
            </h2>
            <h4 class="text-xs">Years</h4>
        </div>
        <div class="px-8 w-1/3">
            <h2 class="text-xl font-bold text-primary">25+</h2>
            <h4 class="text-xs">Projects</h4>
        </div>
    </section>
    <section id="clients" class="bg-gradient-to-b from-gray-50 to-white border-t-2 border-gray-100 px-6 py-20 bg-white text-center | md:px-32">
        <h2 class="text-md font-bold uppercase mb-8">
            Clients we have worked with
        </h2>
        <div class="text-gray-900 grid grid-cols-1 gap-4 | md:grid-cols-4 md:gap-8">
            <div class="h-20">
                @include('svgs.clients.royalenfield', ['class' => 'h-20 mx-auto'])
            </div>
            <div class="h-20">
                @include('svgs.clients.sheengraphics', ['class' => 'h-16 mx-auto'])
            </div>
            <div class="h-20">
                @include('svgs.clients.harame', ['class' => 'h-20 mx-auto'])
            </div>
            <div class="h-20">
                @include('svgs.clients.gesture', ['class' => 'h-20 mx-auto'])
            </div>
        </div>
    </section>
</main>
@endsection

@push('javascripts')
@vite('resources/js/typed.js')
<script>
    setTimeout(function() {
        new Typed('#home-typed-js-hero', {
            strings: ['Codefuel', 'Engineers', 'Developers', 'Designers', 'Creators', 'Marketers'],
            typeSpeed: 100,
            loop: true,
            smartBackspace: false,
            showCursor: false
        });
    }, 1000);
</script>
@endpush