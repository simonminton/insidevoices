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
            <x-plain-header>
                <x-slot name="title">Story Guidelines</x-slot>
                <x-slot name="body">
                    <p class="text-white text-lg md:text-xl">Updated: February 24, 2020<p>
                </x-slot>
            </x-plain-header>
        </div>
         <div class="relative bg-white flex flex-col w-full" >
            <div class="container relative mx-auto flex-row flex-wrap flex h-full items-center ">
                <div class="w-full py-10">
                    CONTENT
                </div>
            </div>
         </div>


        <x-footer></x-footer>
        
    </body>
</html>
