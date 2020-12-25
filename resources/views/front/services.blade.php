@extends('layouts.default')

@section('beforeMainContent')
    @include('layouts.partials.breadcrumb', ['breadcrumbPageDescription' => 'Here\'s the range of services that we provide'])
@endsection

@section('mainContent')
<main>
    <section id="services" class="px-6 py-20 | md:px-32 md:flex md:items-start">
        <div class="w-full py-8 | md:py-0 md:px-8 md:w-1/3">
            <div class="mb-8">
                <img src="{{ asset('/assets/svg/services-web-development.svg') }}" alt="Codefuel" class="h-40 mx-auto" />
            </div>
            <div class="text-center">
                <h2 class="text-2xl">
                    Development
                </h2>
                <p class="text-md">
                    Web and Mobile Apps are indeed necessary nowadays for all the businesses. We as developers understand your needs and provide custom scalable quality solutions at affordable pricing.
                </p>
            </div>
        </div>
        <div class="w-full py-8 | md:py-0 md:px-8 md:w-1/3">
            <div class="mb-8">
                <img src="{{ asset('/assets/svg/services-designing.svg') }}" alt="Codefuel" class="h-40 mx-auto" />
            </div>
            <div class="text-center">
                <h2 class="text-2xl">
                    Designing
                </h2>
                <p class="text-md">
                    Gone are the days when good design used to be a luxury. We at Codefuel craft beautiful designs with utmost love and perfection, so you give out the good vibes to your audience.
                </p>
            </div>
        </div>
        <div class="w-full py-8 | md:py-0 md:px-8 md:w-1/3">
            <div class="mb-8">
                <img src="{{ asset('/assets/svg/services-marketing.svg') }}" alt="Codefuel" class="h-40 mx-auto" />
            </div>
            <div class="text-center">
                <h2 class="text-2xl">
                    Marketing
                </h2>
                <p class="text-md">
                    Marketing and Strategy are important functions of a business and we are provide them both, best-in-class. Products ranging from online marketing to print media, we have it all at best pricing.
                </p>
            </div>
        </div>
    </section>
</main>
@endsection