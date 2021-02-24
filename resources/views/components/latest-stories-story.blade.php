<div class="w-full bg-ultra-light-grey rounded-lg shadow-md mb-12 flex flex-row flex-wrap px-8 py-10">
    <div class="w-full mb-12 md:mb-0 md:w-1/4">
        <div class="flex flex-row flex-wrap items-center">

        <div class="w-1/3 md:w-full xl:w-1/3">
            <div class="w-20 md:w-24 h-20 md:h-24 bg-black">{{ $logo }}</div>
        </div>
        <div class="w-2/3 md:w-full xl:w-2/3 font-title text-3xl leading-tight font-bold">
            {{ $company }}
        </div>
        </div>
    </div>
    <div class="w-full md:w-3/4 text-lg md:text-xl leading-normal">
        <p>{{ $story }}</p>
    </div>
</div>