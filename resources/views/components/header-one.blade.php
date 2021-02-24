<div class="container mx-auto flex-row flex-wrap flex pt-4 px-8 md:px-0">
    <div class="w-full md:w-1/3 lg:w-1/2 h-full items-center pt-4 md:pt-12 xl:pt-24 2xl:pt-32">
        <h1 class="font-title text-5xl md:text-6xl mb-12 text-white font-semibold leading-tight tracking-wide">{{ $title }}</h4>
        <div class="leading-loose">{{ $body }}</div>
            
    </div>
    <div class="w-full md:w-2/3 lg:w-1/2 relative  pt-12 md:pt-0">
        <img class="w-full top-0 -mb-16 md:pl-24 relative z-40" src="{{ $image }}" />
        <img src="/images/logo-overlay.svg" class="absolute z-50 top-10 right-14">
    </div>
</div>