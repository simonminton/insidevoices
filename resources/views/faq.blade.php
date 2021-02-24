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
                <x-slot name="title">Frequently Asked Questions</x-slot>
                <x-slot name="body">
                    <p class="text-white text-lg md:text-xl">If you have any further questions please reach out to us<p></x-slot>
            </x-plain-header>
        </div>

            
            

        <div class="bg-light-grey  relative flex flex-col w-full pt-12">
            <div class="container mx-auto w-full flex flex-row">
                <div class="w-1/5 sticky top-0 pr-4">
                    <a href="" class="bg-light-green font-bold text-dark-grey w-full text-lg flex rounded-md mb-4 py-3 px-6">Getting Started</a>
                    <a href="" class="bg-white text-dark-grey w-full text-lg flex rounded-md mb-4 py-3 px-6">Getting Started</a>
                    <a href="" class="bg-white text-dark-grey w-full text-lg flex rounded-md mb-4 py-3 px-6">Getting Started</a>
                </div>
                <div class="w-4/5 pl-8 pb-12">
                    <x-qa-section>
                        <x-slot name="title">Getting Started</x-slot>
                        <x-slot name="body">
                            <x-qa>
                                <x-slot name="question">How do I write a good story?</x-slot>
                                <x-slot name="answer">
                                    <p>No people of colour in Leadership - all white however since the Black Lives Matter movement has exploded the business has appointed a member of the BLM committee to represent at all Leadership meetings, which is great progress. However I’m unsure whether someone of that level and who will actually be able to command that level of respect to be listened to will actually be hired in the future. I do hope so.</p>
                                </x-slot>
                            </x-qa>
                            <x-qa>
                                <x-slot name="question">How do I write a good story?</x-slot>
                                <x-slot name="answer">
                                    <p>No people of colour in Leadership - all white however since the Black Lives Matter movement has exploded the business has appointed a member of the BLM committee to represent at all Leadership meetings, which is great progress. However I’m unsure whether someone of that level and who will actually be able to command that level of respect to be listened to will actually be hired in the future. I do hope so.</p>
                                </x-slot>
                            </x-qa>
                        </x-slot>
                    </x-qa-section>
                </div>
            </div>
            
        </div>
        <x-footer>
        </x-footer>
        
    </body>
</html>
