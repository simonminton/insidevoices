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
        
       
         <div class="relative bg-black flex flex-col w-full h-screen bg-cover bg-right" style="background-image: url('/images/how-it-works-bg.jpg')">
            <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-t from-black"></div>
             <x-navigation></x-navigation>
            <div class="container px-8 lg:px-0 relative mx-auto flex-row flex-wrap flex pt-4 h-full items-center ">
                <div class="w-full lg:w-1/2">
                    <h1 class="font-title text-5xl md:text-6xl mb-12 text-white font-semibold leading-tight tracking-wide">Share your story</h1>
                    <p class="text-white text-xl w-full md:w-2/3 mb-12">We want to know how your company performs when it comes to diversity, equity and inclusion. Whether you’re a person of color or an ally, anonymously review your employer so we can see how they measure up against others.</p>
                    <a href="/your-story" class="rounded-md inline-flex bg-light-green px-5 py-4 text-dark-grey font-bold text-lg md:text-xl">Share Your Story</a>
                </div>
            </div>
         </div>

         <div class="relative bg-white flex flex-col w-full bg-cover" id="how-it-works">
            <div class="px-8 lg:px-0 container mx-auto flex-row flex-wrap flex py-20 lg:py-32">
                <div class="w-full">
                    <h1 class="font-title text-5xl lg:text-6xl mb-10 lg:mb-20 text-black font-semibold leading-tight tracking-wide">How it Works</h1>
                </div>
                <div class="w-full lg:w-1/3 mt-8 lg:mt-0">
                    <div class="mb-4 lg:mb-8"><img src="/images/read.svg"></div>
                    <h3 class="font-title font-bold mb-4 lg:mb-8 text-2xl lg:text-3xl">Read some reviews</h3>
                    <p class="text-black text-xl w-full lg:w-4/5">Browse our reviews for companies that interest you. You can upvote reviews that you find helpful.</p>
                </div>
                 <div class="w-full lg:w-1/3 mt-8 lg:mt-0">
                    <div class="mb-4 lg:mb-8"><img src="/images/write.svg"></div>
                    <h3 class="font-title font-bold mb-4 lg:mb-8 text-2xl lg:text-3xl">Share your story</h3>
                    <p class="text-black text-xl w-full lg:w-4/5">Review your company by answering 6 multiple-choice questions. After each one, add detail to tell us what’s driving your answers.</p>
                </div>
                 <div class="w-full lg:w-1/3 mt-8 lg:mt-0">
                    <div class="mb-4 lg:mb-8"><img src="/images/review.svg"></div>
                    <h3 class="font-title font-bold mb-4 lg:mb-8 text-2xl lg:text-3xl">Spread the word</h3>
                    <p class="text-black text-xl w-full lg:w-4/5">Ask your friends to write a review. This is anti-racism in action, but it takes all of us.</p>
                </div>
            </div>
         </div>
         <x-lr--layout>
            <x-slot name="image">
                <img class="w-full md:-mb-16 z-10 top-0" src="/images/sitting.jpg" />
            </x-slot>
            <x-slot name="title">
                Amplify your voice
            </x-slot>
            <x-slot name="body">
                <p class="mb-12">Lack of representation? A racial pay gap? A glass ceiling? We haven’t heard it all until we’ve heard from you.</p>
            </x-slot>
        </x-lr--layout>
        
        <x-footer></x-footer>
        
    </body>
</html>
