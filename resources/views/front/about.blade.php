@extends('layouts.default')

@section('beforeMainContent')
    @include('layouts.partials.breadcrumb', ['breadcrumbPageDescription' => 'Get to know more about us'])
@endsection

@section('mainContent')
<main>
    <section id="about-us" class="px-6 py-20 | md:px-32 md:flex md:items-center">
        <div class="w-full mb-8 | md:px-8 md:w-1/4 md:mb-0">
            @include('svgs.logo', ['class' => 'h-32 mx-auto text-primary'])
        </div>
        <div class="w-full text-justify | md:px-8 md:w-3/4">
            <p class="text-md">
                Codefuel is a digital agency startup that provides robust and quality solutions for Development, Designing and Marketing to Individuals & Businesses. Started back in early 2015, as an abstract idea, that started finally taking shape in mid 2016, Codefuel provides a wide range of products for all. Providing services at affordable pricing with the best quality is what sets Codefuel apart from it’s competitors. Having an online workfplace gives us the flexibility to provide services to customers in Cities, States, & Countries from across the globe, we make it easy for customers to connect and stay in touch with us and let us assist them grow their business.
            </p>
        </div>
    </section>
</main>
@endsection