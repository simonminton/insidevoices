<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>InsideVoices</title>

        <!-- Fonts -->
        
        <link rel="stylesheet" href="https://use.typekit.net/wsk2kkl.css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>
    <body class="antialiased font-sans font-light">
        <!-- Home page main section -->
        <div class="bg-green relative flex flex-col w-full">
            <x-navigation></x-navigation>
            <x-header-one>
                <x-slot name="title">
                    Sharing knowledge is sharing power
                </x-slot>
                <x-slot name="body">
                    <h2 class="font-title text-3xl md:text-3xl mb-12 text-white font-semibold leading-tight tracking-wide">Our Mission</h2>
                    <p class="text-white text-lg md:text-xl w-full xl:w-5/6 mb-12">Historically, companies have managed to be commercially successful without truly committing to diversity. It’s never been a priority because it hasn’t affected their bottom line.</p>
                    <p class="text-white text-lg md:text-xl w-full xl:w-5/6 mb-12">At inside voices, our mission is to change the incentive structure, so that companies need to <span class="pinkUnderline">embrace</span> diversity, equity and inclusion (DEI) in order to be successful.</p>
                    <p class="text-white text-lg md:text-xl w-full xl:w-5/6 mb-12">By providing transparency, we can force companies with toxic cultures to reform, and share progressive strategies.</p>
                    
                </x-slot>
                <x-slot name="image">
                    /images/coffee.jpg
                </x-slot>
            </x-header-one>
            
        </div>

        <div class="bg-yellow relative flex flex-col w-full">
            <div class="container mx-auto flex-row flex-wrap flex pt-32">
                <div class="w-full mb-24">
                    <div class="w-full lg:w-1/2 flex flex-row flex-wrap items-center">
                        <div class="w-full flex justify-center text-center mb-2 lg:mb-0 lg:w-1/5 px-8 lg:px-0"><img src="/images/green-logo.svg"></div>
                        <h3 class="text-green w-full lg:w-4/5 font-title font-bold px-8 lg:px-0 text-3xl lg:text-4xl leading-tight">What do you wish you knew before you started?</h3>
                    </div>
                </div>
                <div class="w-full flex flex-row flex-wrap -mb-14 relative z-50">
                    <div class="w-full lg:w-1/2 items-center pt-16 lg:pt-32 bg-green p-8">
                        <h4 class="font-title text-4xl mb-10 lg:mb-20 text-white font-semibold leading-tight tracking-wide">The Strategy</h4>
                        <div class="text-lg text-white leading-loose">
                            <p class="mb-12">Many of us want to work for inclusive employers. For Black people and other underrepresented minorities, it’s not a want, it’s a need. Toxic work cultures harm careers, but it’s too late to find out the truth once you join a company.</p>
                            <p class="mb-12">At inside voices, we want to help jobseekers make informed choices when deciding where to work.</p>
                            <p class="mb-12">Believe it or not, companies compete to attract the best talent. By avoiding employers that don’t align with our anti-racist values, we can decide who wins that competition.</p>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/2 relative bg-black bg-cover bg-right" style="background-image: url('/images/smiling.jpg');">
                    </div>
                </div>
            </div>
        </div>
    
         <div class="bg-white relative flex flex-col w-full mt-32 pb-24">
            <div class="container mx-auto flex-row flex-wrap flex pt-4">
                <div class="w-full xl:w-2/3 lg:w-1/2">
                    <h4 class="font-title text-4xl mb-12 px-8 lg:px-0 text-black font-semibold leading-tight tracking-wide">
                        Our Story
                    </h4>
                    <div class="text-lg text-black px-8 lg:px-0 lg:pr-32 leading-loose">
                            <p class="mb-12">We’re a Black-led team of problem solvers, who know first-hand how damaging a lack of representation in leadership can be.</p>
                            <p class="mb-12">Our founder, Ekow, started inside voices in the summer of 2020 after hearing dozens of companies finally promise to combat anti-Black racism. It was a start, but there was no way to hold them accountable. After a decade in financial services, he knew that change would only come if it impacted a company’s bottom line. And he was tired of being the only Black face in the room.</p>
                            <p class="mb-12">Think we need you on our team? Drop us an email at <a href="mailto:support@insidevoices.io">support@insidevoices.io</a></p>
                        </div>
                </div>
                <div class="w-full xl:w-1/3 lg:w-1/2 -mb-24 flex items-end">
                   <div class="w-32 h-32 rounded-full bg-black"></div>
                   <p>Ekow Sanni-Thomas, Founder</p>
                </div>
            </div>
        </div>
        <x-footer></x-footer>        
    </body>
</html>
