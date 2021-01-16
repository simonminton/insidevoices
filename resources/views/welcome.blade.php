<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>InsideVoices</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;500;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>
    <body class="antialiased font-sans font-light">
        <div class="bg-green relative flex flex-col w-full">
            <div class="w-screen-2xl mx-auto pt-8 pb-8 flex justify-end items-center">
                <a class="text-teal-500 text-ultra-light-grey px-4" href="/companies">Companies</a>
                <a class="text-teal-500 text-ultra-light-grey px-4" href="/your-experience">How it Works</a>
                <a class="text-teal-500 text-ultra-light-grey px-4" href="/your-experience">About Us</a>
                <a class="rounded-md bg-light-green px-4 py-3 text-dark-grey font-bold text-base">Share Your Story</a>
            </div>
            
            <div class="w-screen-2xl mx-auto flex-row flex-wrap flex pt-4">
                <div class="w-1/2 h-full items-center pt-32">
                    <h1 class="font-title text-6xl mb-20 text-white font-semibold leading-tight tracking-wide">Workplace culture <span class="border-pink border-b-4">matters</span></h4>
                    <p class="text-white text-xl w-2/3">We built Inside Voices to give you a safe space to share stories about the culture of your organization and learn about others.</p>
                    <div class="w-4/5 flex flex-row mt-8">
                        <div class="bg-white h-16 w-4/5"></div><button class="w-1/5 bg-light-green">Search</button>
                    </div>
                </div>
                <div class="w-1/2 relative">
                    <img class="w-full -mb-16 z-10 top-0" src="https://images.pexels.com/photos/3182829/pexels-photo-3182829.jpeg?cs=srgb&dl=pexels-fauxels-3182829.jpg&fm=jpg" />
                </div>
            </div>
        </div>
        
    </body>
</html>
