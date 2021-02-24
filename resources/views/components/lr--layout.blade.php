      <div class="bg-green relative flex flex-col w-full">
            <div class="container mx-auto flex-col md:flex-row flex-wrap flex md:pt-4">
                <div class="w-full md:w-1/2 relative md:pr-32 md:-mt-20 md:mb-32">
                    {{ $image }}
                </div>
                <div class="w-full md:w-1/2 h-full items-center pt-10 px-8 pb-20 md:pb-12 md:px-0 md:pt-24">
                    <h4 class="font-title text-5xl md:text-6xl mb-8 text-white font-semibold leading-tight tracking-wide">{{ $title }}</h4>
                    <div class="text-white text-lg md:text-xl w-full">
                        {{ $body }}
                    </div>
                    <x-share-button-large></x-share-button-large>
                </div>
                
            </div>
        </div>