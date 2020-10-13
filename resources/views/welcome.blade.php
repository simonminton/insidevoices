<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>InsideVoices</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                <a class="text-teal-500 text-lg px-4" href="/companies">Companies</a>
                <a class="text-teal-500 text-lg px-4" href="/your-experience">Tell us your experience</a>
            </div>
            

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <h4 class="text-4xl">Inside Voices</h4>
            </div>
        </div>
    </body>
</html>
