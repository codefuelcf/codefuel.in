@extends('layouts.default', ['title' => 'Services'])

@section('mainContent')
<x-front.breadcrumb description="Here's the range of services that we provide" />

<main>
    <section id="services" class="px-6 py-20 grid grid-cols-1 gap-4 | md:px-32 md:grid-cols-3 md:gap-8">
        <div>
            <div class="mb-8">
                @include('svgs.services.development', ['class' => 'h-40 mx-auto'])
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
        <div>
            <div class="mb-8">
                @include('svgs.services.designing', ['class' => 'h-40 mx-auto'])
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
        <div>
            <div class="mb-8">
                @include('svgs.services.marketing', ['class' => 'h-40 mx-auto'])
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