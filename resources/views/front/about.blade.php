@extends('front.layout', ['title' => 'About'])

@section('mainContent')
<x-front.breadcrumb description="Get to know more about us" />

<main>
    <section id="about-us" class="px-6 py-20 | md:px-32">
        <div class="container mx-auto grid grid-cols-1 gap-4 | md:grid-cols-3 md:gap-8">
            <div class="col-span-1">
                @include('svgs.logo', ['class' => 'h-32 mx-auto text-primary'])
            </div>
            <div class="col-span-1 | md:col-span-2">
                <p class="text-md text-justify">
                    Codefuel is a digital agency startup that provides robust and quality solutions for Development, Designing and Marketing to Individuals & Businesses. Started back in early 2015, as an abstract idea, that started finally taking shape in mid 2016, Codefuel provides a wide range of products for all. Providing services at affordable pricing with the best quality is what sets Codefuel apart from it's competitors. Having an online workfplace gives us the flexibility to provide services to customers in Cities, States, & Countries from across the globe, we make it easy for customers to connect and stay in touch with us and let us assist them grow their business.
                </p>
            </div>
        </div>
    </section>
    <section id="our-technology-stack" class="px-6 py-20 bg-gradient-to-b from-gray-50 to-white border-t-2 border-gray-100 bg-white | md:px-32">
        <div class="container mx-auto">
            <h2 class="text-md font-bold uppercase mb-8 text-center">
                Our Technology Stack
            </h2>
            <div class="grid grid-cols-1 gap-4 | md:grid-cols-3 md:gap-8">
                <div>
                    <div class="border-0 border-l-2 border-gray-300 pl-2 mb-8">
                        <h4 class="text-md font-bold">Frontend</h4>
                        <ul class="text-sm inline-bullets">
                            <li>Alpine</li>
                            <li>Vue</li>
                            <li>React</li>
                            <li>jQuery</li>
                            <li>VanillaJS</li>
                            <li>Tailwind</li>
                            <li>Bootstrap</li>
                            <li>PostCSS</li>
                            <li>NPM</li>
                            <li>Laravel Mix</li>
                            <li>Webpack</li>
                        </ul>
                    </div>
                    <div class="border-0 border-l-2 border-gray-300 pl-2">
                        <h4 class="text-md font-bold">Backend</h4>
                        <ul class="text-sm inline-bullets">
                            <li>Laravel</li>
                            <li>PHP</li>
                            <li>MySQL</li>
                            <li>Redis</li>
                            <li>Wordpress</li>
                        </ul>
                    </div>
                </div>
                <div>
                    <div class="border-0 border-l-2 border-gray-300 pl-2 mb-8">
                        <h4 class="text-md font-bold">Server</h4>
                        <ul class="text-sm inline-bullets">
                            <li>AWS</li>
                            <li>Digital Ocean</li>
                            <li>Ubuntu</li>
                            <li>Nginx</li>
                        </ul>
                    </div>
                    <div class="border-0 border-l-2 border-gray-300 pl-2">
                        <h4 class="text-md font-bold">Integrations</h4>
                        <ul class="text-sm inline-bullets">
                            <li>Stripe</li>
                            <li>Razorpay</li>
                            <li>Fathom Analytics</li>
                            <li>Google Analytics</li>
                            <li>Google Maps</li>
                            <li>Google Tag Manager</li>
                            <li>Mailcoach</li>
                            <li>Mailchimp</li>
                            <li>Sendgrid</li>
                        </ul>
                    </div>
                </div>
                <div>
                    <div class="border-0 border-l-2 border-gray-300 pl-2 mb-8">
                        <h4 class="text-md font-bold">Designing</h4>
                        <ul class="text-sm inline-bullets">
                            <li>Adobe Illustrator</li>
                            <li>Corel Draw</li>
                            <li>Figma</li>
                            <li>Adobe Photoshop</li>
                            <li>Corel Photopaint</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection