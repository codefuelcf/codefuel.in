@extends('layouts.default')

@section('beforeMainContent')
    @include('layouts.partials.breadcrumb', ['breadcrumbPageDescription' => 'Get to know more about us'])
@endsection

@section('mainContent')
<main>
    <section id="about-us" class="px-6 py-20 grid grid-cols-1 gap-4 | md:px-32 md:grid-cols-3 md:gap-8">
        <div class="col-span-1">
            @include('svgs.logo', ['class' => 'h-32 mx-auto text-primary'])
        </div>
        <div class="col-span-1 | md:col-span-2">
            <p class="text-md text-justify">
                Codefuel is a digital agency startup that provides robust and quality solutions for Development, Designing and Marketing to Individuals & Businesses. Started back in early 2015, as an abstract idea, that started finally taking shape in mid 2016, Codefuel provides a wide range of products for all. Providing services at affordable pricing with the best quality is what sets Codefuel apart from it’s competitors. Having an online workfplace gives us the flexibility to provide services to customers in Cities, States, & Countries from across the globe, we make it easy for customers to connect and stay in touch with us and let us assist them grow their business.
            </p>
        </div>
    </section>
</main>
@endsection