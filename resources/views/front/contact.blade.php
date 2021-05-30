@extends('layouts.default')

@section('beforeMainContent')
    @include('layouts.partials.breadcrumb', ['breadcrumbPageDescription' => 'Here\'s how to get in touch with us'])
@endsection

@section('mainContent')
<main>
    <section id="contact-us" class="px-6 py-20 | md:px-32">
        <div class="w-full">
            <h2 class="text-2xl text-center">Contact Us Over Mail/Phone</h2>
            <div class="w-full grid grid-cols-1 py-10 gap-4 | md:w-2/3 md:mx-auto md:grid-cols-2 md:gap-8 | lg:w-1/2">
                <div class="text-center">
                    <div class="inline-block bg-red-600 text-white rounded-lg">
                        <svg class="h-20 w-20 p-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" /></svg>
                    </div>
                    <h4 class="text-xl"><a href="tel:+917006100459" class="text-black hover:no-underline">+917006100459</a></h4>
                </div>
                <div class="text-center">
                    <div class="inline-block bg-red-600 text-white rounded-lg">
                        <svg class="h-20 w-20 p-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                    </div>
                    <h4 class="text-xl"><a href="mailto:hey@codefuel.cf" class="text-black hover:no-underline">hey@codefuel.cf</a></h4>
                </div>
            </div>
        </div>
        <div class="w-full">
            <h2 class="text-2xl text-center">Or Connect With Us On Social Media</h2>
            <div class="w-full flex justify-between items-center py-10 mx-auto | md:w-1/3">
                <div>
                    <a href="https://facebook.com/codefuelcf" target="__blank">@include('svgs.socialMedia.facebook-circle', ['class' => 'h-12 w-12'])</a>
                </div>
                <div>
                    <a href="https://instagram.com/codefuelcf" target="__blank">@include('svgs.socialMedia.instagram-circle', ['class' => 'h-12 w-12'])</a>
                </div>
                <div>
                    <a href="https://twitter.com/codefuelcf" target="__blank">@include('svgs.socialMedia.twitter-circle', ['class' => 'h-12 w-12'])</a>
                </div>
                <div>
                    <a href="https://m.me/codefuelcf" target="__blank">@include('svgs.socialMedia.messenger-circle', ['class' => 'h-12 w-12'])</a>
                </div>
                <div>
                    <a href="https://wa.me/+917006100459" target="__blank">@include('svgs.socialMedia.whatsapp-circle', ['class' => 'h-12 w-12'])</a>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection