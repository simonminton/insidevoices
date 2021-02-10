<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>inside voices</title>

        <!-- Fonts -->
        
        <link rel="stylesheet" href="https://use.typekit.net/wsk2kkl.css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>
    <body class="antialiased font-sans font-light">
        <!-- Home page main section -->
        <div class="bg-green relative flex flex-col w-full">
            <x-navigation></x-navigation>
            <div class="container mx-auto flex-row flex-wrap flex pt-4 px-8 md:px-0">
                <div class="w-full md:w-1/2 h-full items-center pt-32 md:pr-12">
                    <h1 class="font-title text-5xl md:text-6xl mb-12 text-white font-semibold leading-tight tracking-wide">You want to end racial injustice.<br>Does your employer?</h4>
                    <p class="text-white text-xl w-full md:w-3/4 mb-12">We built inside voices so you can tell the world whether your employer’s actions match their words.</p>
                    <div class="w-full md:w-5/6 flex flex-row">
                        <input placeholder="Search for a company" class="bg-white px-4 rounded-l-md h-16 text-lg w-4/5">
                        <button class="w-1/5 rounded-r-md  text-dark-grey font-bold text-lg bg-light-green">Search</button>
                    </div>
                </div>
                <div class="w-full md:w-1/2 relative  pt-12 md:pt-0">
                    <img class="w-full top-0 -mb-16 md:pl-24 relative z-40" src="/images/home.jpg" />
                    <img src="/images/logo-overlay.svg" class="absolute z-50 top-10 right-14">
                </div>
            </div>
        </div>

        <div class="bg-yellow relative flex flex-col w-full">
            <div class="container mx-auto flex-col md:flex-row-reverse flex-wrap flex md:pt-32 ">
                <div class="w-full md:w-1/2 h-full items-center pt-12  md:pl-24 px-8 md:px-0">
                    <h1 class="font-title text-6xl mb-12 text-black font-semibold leading-tight tracking-wide">What's really happening?</h4>
                    <p class="text-off-black text-xl mb-12 w-full">A lot of organizations say they want to end systemic racism, but they don’t always practice what they preach.</p>
                    <p class="text-off-black text-xl mb-12 w-full">Even when companies say they want a diverse workforce, they fail to create environments that are truly inclusive. They struggle to recruit and retain diverse talent, and they stunt careers through bad practices.</p>
                    <div class="w-full md:-mb-16 md:pl-20 z-50 relative top-0 justify-center flex flex-wrap">
                        <img class="text-center -mb-20 relative z-50" src="/images/white-logo-overlay.svg" />
                        <img src="/images/tables@2x.jpg" />
                    </div>
                </div>
                <div class="w-full md:w-1/2 relative mt-12 md:mt-0 md:pr-20 flex flex-col-reverse md:flex-col">
                    <img class="w-full md:mb-16 z-10 top-0" src="/images/pink-sign@2x.jpg" />
                    <p class="text-off-black text-xl mb-12 w-full px-8 md:px-0">We built inside voices to give employees a safe space to share their stories. We want to amplify your voices so you can speak truth to power freely, and help others figure out if your organization is right for them.</p>
                </div>
                
            </div>
        </div>

        <x-latest-stories></x-latest-stories>
        <div class="bg-green relative flex flex-col w-full">
            <div class="container mx-auto flex-col md:flex-row flex-wrap flex md:pt-4">
                <div class="w-full md:w-1/2 relative md:pr-32 md:-mt-20 md:mb-32">
                    <img class="w-full md:-mb-16 z-10 top-0" src="/images/group@2x.jpg" />
                </div>
                <div class="w-full md:w-1/2 h-full items-center pt-10 px-8 pb-20 md:pb-12 md:px-0 md:pt-24">
                    <h4 class="font-title text-6xl mb-8 text-white font-semibold leading-tight tracking-wide">Knowledge is Power</h4>
                    <div class="text-white text-xl w-full">
                        <p class="mb-12">A company's mission statement and press releases don't always tell the whole story. Only the employees within an organization know wehter it's truly living up to its commitments.</p>
                        <p class="mb-12">Shine a light on your employer's behaviour so we can celebrate best practices and hold bad actors accountable.</p>
                    </div>
                    <x-share-button-large></x-share-button-large>
                </div>
                
            </div>
        </div>

        <x-footer></x-footer>
    </body>
</html>
