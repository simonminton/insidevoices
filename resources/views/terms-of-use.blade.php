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
        <div class="relative bg-green flex flex-col w-full" >
            
             <x-navigation></x-navigation>
            <div class="container relative mx-auto flex-row flex-wrap flex py-12 h-full items-center ">
                <div class="w-full">
                    <h1 class="font-title text-6xl mb-2 text-white font-semibold leading-tight tracking-wide">Terms & Conditions</h1>
                    <p class="text-white text-xl w-full md:w-2/3 mb-12">Updated: February 10, 2021</p>
                </div>
            </div>
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
