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
                    Use your power to uplift all of our voices.
                </x-slot>
                <x-slot name="body">
                    <h2 class="font-title text-3xl md:text-3xl mb-12 text-white font-semibold leading-tight tracking-wide">Our Mission</h2>
                    <p class="text-white text-lg md:text-xl w-full xl:w-3/4 mb-12">Historically, companies have managed to be commercially successful without truly committing to diversity. Racial justice was never a priority because it didn’t affect their bottom line.</p>
                    <p class="text-white text-lg md:text-xl w-full xl:w-3/4 mb-12">At inside voices, our mission is to change the incentive structure, so that companies need to embrace EDI in order to be successful. Big companies hold the keys to power in our society, but big companies are made up of people.</p>
                    <p class="text-white text-lg md:text-xl w-full xl:w-3/4 mb-12">It’s time for the people to be heard.</p>
                    
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
                        <h3 class="text-green w-full lg:w-4/5 font-title font-bold px-8 lg:px-0 text-3xl lg:text-4xl leading-tight">Together we can give a voice to the voiceless</h3>
                    </div>
                </div>
                <div class="w-full flex flex-row flex-wrap -mb-14 relative z-50">
                    <div class="w-full lg:w-1/2 items-center pt-16 lg:pt-32 bg-green p-8">
                        <h4 class="font-title text-4xl mb-10 lg:mb-20 text-white font-semibold leading-tight tracking-wide">The Strategy</h4>
                        <div class="text-lg text-white leading-loose">
                            <p class="mb-12">Many of us want to work for employers that share our values. At inside voices, we want to hekp jobseekers make informed decisions about their future employers.</p>
                            <p class="mb-12">By sharing the truth about how organizations perform on diversity, equity and inclusion, we can compare them to see who's standing out and who's falling behind. Knowledge is power.</p>
                            <p class="mb-12">Together, we can celebrate the champions, and force organisations with toxic cultures to reform if they want to recruit the best talent.</p>
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
                    <h4 class="font-title text-4xl mb-12 px-8 lg:px-0 text-black font-semibold leading-tight tracking-wide">Who we are</h4>
                    <div class="text-lg text-black px-8 lg:px-0 lg:pr-32 leading-loose">
                            <p class="mb-12">We’re a company of diverse thinkers and doers who take pride in always improving our product. We share a vision and commitment to help each other — and our customers — create great work.</p>
                            <p class="mb-12">Although we’ve grown a lot in the last ten years, our co-founder — Ekow Sanni-Thomas is still here and hands-on when it comes to product development. It’s helped us stay true to our values of collaboration and respect.</p>
                        </div>
                </div>
                <div class="w-full xl:w-1/3 lg:w-1/2 -mb-24 flex content-end">
                   <img src="/images/not-ekow.png">
                </div>
            </div>
        </div>
        <x-footer></x-footer>        
    </body>
</html>
