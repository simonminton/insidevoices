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
                <div class="w-full md:w-1/3 lg:w-1/2 h-full items-center pt-4 md:pt-12 xl:pt-32 xl:pr-12">
                    <h1 class="font-title text-5xl md:text-6xl mb-12 text-white font-semibold leading-tight tracking-wide">Diversity <span class="special-underline">matters</span></h4>
                    <p class="text-white text-lg md:text-xl w-full xl:w-3/4 mb-12">Hold your employer accountable by anonymously sharing how they <strong>really</strong> perform on diversity, equity and inclusion. Tell the world whether their actions match their words.</p>
                    <div class="w-full xl:w-5/6 flex flex-row">
                        <input placeholder="Search for a company" class="bg-white px-3 md:px-4 rounded-l-md h-12 md:h-16 text-base md:text-lg w-3/4 md:w-4/5">
                        <button class="w-1/4 md:w-1/5 rounded-r-md  text-dark-grey font-bold text-base md:text-lg bg-light-green">Search</button>
                    </div>
                </div>
                <div class="w-full md:w-2/3 lg:w-1/2 relative  pt-12 md:pt-0">
                    <img class="w-full top-0 -mb-16 md:pl-24 relative z-40" src="/images/home.jpg" />
                    <img src="/images/logo-overlay.svg" class="absolute z-50 top-10 right-14">
                </div>
            </div>
        </div>

        <div class="bg-yellow relative flex flex-col w-full">
            <div class="container mx-auto flex-col md:flex-row-reverse flex-wrap flex md:pt-32 ">
                <div class="w-full md:w-1/2 h-full items-center pt-24 md:pt-12  md:pl-24 px-8 md:px-0">
                    <h1 class="font-title text-5xl md:text-6xl mb-12 text-black font-semibold leading-tight tracking-wide">What's really happening?</h4>
                    <p class="text-off-black  text-lg md:text-xl mb-12 w-full">Many companies say they celebrate diversity, but they don’t always practice what they preach.</p>
                    <p class="text-off-black  text-lg md:text-xl mb-12 w-full">Since George Floyd’s murder, lots of companies have ben claiming to be <span class="underline">anti-racist</span>. But only their employees know what the culture is really like.</p>
                    <p class="text-off-black  text-lg md:text-xl mb-12 w-full">Building an inclusive environment takes work. Some companies are working harder than others. At inside voices we ask employees what’s really happening.</p>
                    <div class="w-full md:-mb-16 md:pl-20 z-50 relative top-0 justify-center flex flex-wrap">
                        <img class="text-center -mb-20 relative z-50" src="/images/white-logo-overlay.svg" />
                        <img src="/images/tables@2x.jpg" />
                    </div>
                </div>
                <div class="w-full md:w-1/2 relative mt-12 md:mt-0 md:pr-20 flex flex-col-reverse md:flex-col">
                    <img class="w-full md:mb-16 z-10 top-0" src="/images/pink-sign@2x.jpg" />
                    <p class="text-off-black  text-lg md:text-xl mb-12 w-full px-8 md:px-0">We built inside voices to give employees a safe space to share their stories. We want to amplify your voices so you can speak truth to power freely, and help others figure out if your organization is right for them.</p>
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
                    <h4 class="font-title text-5xl md:text-6xl mb-8 text-white font-semibold leading-tight tracking-wide">Knowledge is power</h4>
                    <div class="text-white text-lg md:text-xl w-full">
                        <p class="mb-12">If you’ve been paying attention, you know what commitments your employer has made to promote diversity, equity & inclusion, and you know if they’re living up to them.</p>
                        <p class="mb-12">Write an anonymous review to help others figure out if your company is right for them.</p>
                    </div>
                    <x-share-button-large></x-share-button-large>
                </div>
                
            </div>
        </div>

        <x-footer></x-footer>
    </body>
</html>
