@extends('front.layout', ['title' => 'Contact'])

@section('mainContent')
<x-front.breadcrumb description="Here's how to get in touch with us" />

<main>
    <section id="contact-us" class="px-6 py-20 | md:px-32">
        <div class="container mx-auto grid gap-4 | md:gap-8">
            <div>
                <h2 class="text-md font-bold uppercase text-center">
                    Contact Us Over Mail
                </h2>
                <div class="w-full grid grid-cols-1 py-10 gap-4 | md:w-2/3 md:mx-auto | lg:w-1/2">
                    <div class="text-center">
                        <div class="inline-block bg-red-600 text-white rounded-lg">
                            <svg class="h-20 w-20 p-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <h4 class="text-xl"><a href="mailto:hello@codefuel.in" class="text-black hover:no-underline">hello@codefuel.in</a></h4>
                    </div>
                </div>
            </div>
            <div>
                <h2 class="text-md font-bold uppercase text-center">
                    Or Connect With Us On Social Media
                </h2>
                <div class="w-full flex justify-between items-center py-10 mx-auto | md:w-1/3">
                    <div>
                        <a href="https://facebook.com/codefuelcf" target="__blank">@include('svgs.social-media.facebook-circle', ['class' => 'h-12 w-12'])</a>
                    </div>
                    <div>
                        <a href="https://instagram.com/codefuelcf" target="__blank">@include('svgs.social-media.instagram-circle', ['class' => 'h-12 w-12'])</a>
                    </div>
                    <div>
                        <a href="https://twitter.com/codefuelcf" target="__blank">@include('svgs.social-media.twitter-circle', ['class' => 'h-12 w-12'])</a>
                    </div>
                    <div>
                        <a href="https://m.me/codefuelcf" target="__blank">@include('svgs.social-media.messenger-circle', ['class' => 'h-12 w-12'])</a>
                    </div>
                </div>
            </div>
            <div>
                <h2 class="text-md font-bold uppercase text-center">
                    Or Simply Fill This Form And We'll Get Back To You
                </h2>
                <div class="w-full py-10 mx-auto | md:w-1/3">
                    <form action="{{ route('front.contact.store') }}" method="post">
                        @csrf
                        <div class="grid gap-4">
                            <input class="block w-full rounded-md" type="text" name="name" placeholder="Your Name" />
                            <input class="block w-full rounded-md" type="email" name="email" placeholder="Your Email" />
                            <input class="block w-full rounded-md" type="text" name="subject" placeholder="Subject" />
                            <textarea class="block w-full rounded-md resize-none" name="message" rows="4" placeholder="Message"></textarea>
                            <button class="bg-primary text-white rounded-md p-2">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection