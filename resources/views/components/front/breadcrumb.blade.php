<section id="breadcrumb" class="breadcrumb px-6 | md:px-32">
    <div class="container mx-auto">
        <p class="text-5xl text-primary">{{ $title ?? '' }}</p>
        @if(isset($description))
        <p class="text-xl text-white">{{ $description }}</p>
        @endif
    </div>
</section>