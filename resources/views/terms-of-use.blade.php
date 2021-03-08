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
                <x-slot name="title">Terms & Conditions</x-slot>
                <x-slot name="body">
                    <p class="text-white text-lg md:text-xl">Updated: February 14, 2021<p>
                </x-slot>
            </x-plain-header>
        </div>
         <div class="relative bg-white flex flex-col w-full" >
            <div class="container relative mx-auto flex-row flex-wrap flex h-full items-center ">
                <div class="w-full py-10">
                    <!-- Termly Tracking Code -->

<div name="termly-embed" data-id="f8c1991f-d542-47b0-9e00-ce1b52690c26" data-type="iframe"></div>
<script type="text/javascript">(function(d, s, id) {
  var js, tjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "https://app.termly.io/embed-policy.min.js";
  tjs.parentNode.insertBefore(js, tjs);
}(document, 'script', 'termly-jssdk'));</script>
                </div>
            </div>
         </div>


        <x-footer></x-footer>
        
    </body>
</html>
