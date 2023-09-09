<section id="breadcrumb" class="breadcrumb px-6 | md:px-32">
    <div class="w-full | md:w-1/3">
        <p class="text-5xl text-primary">{{ $title ?? '' }}</p>
        @if(isset($description))
        <p class="text-xl text-white">{{ $description }}</p>
        @endif
    </div>
</section>