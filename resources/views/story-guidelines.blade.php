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
            <div class="w-screen-2xl mx-auto pt-8 pb-8 flex justify-end items-center">
                <a class="text-teal-500 text-ultra-light-grey px-4" href="/companies">Companies</a>
                <a class="text-teal-500 text-ultra-light-grey px-4" href="/your-experience">How it Works</a>
                <a class="text-teal-500 text-ultra-light-grey px-4" href="/your-experience">About Us</a>
                <a class="ml-4 rounded-md bg-light-green px-3 py-4 text-dark-grey font-bold text-base">Share Your Story</a>
            </div>
            
            <div class="w-screen-2xl mx-auto flex-row flex-wrap flex pt-4">
                <div class="w-1/2 h-full items-center pt-32">
                    <h1 class="font-title text-6xl mb-20 text-white font-semibold leading-tight tracking-wide">You want to end racial injustice.<br>Does your employer?</h4>
                    <p class="text-white text-xl w-2/3">We built inside voices so you can tell the world whether your employer’s actions match their words.</p>
                    <div class="w-4/5 flex flex-row mt-8">
                        <div class="bg-white rounded-l-md h-16 w-4/5"></div><button class="w-1/5 rounded-r-md  bg-light-green">Search</button>
                    </div>
                </div>
                <div class="w-1/2 relative">
                    <img class="w-full -mb-16 z-10 top-0" src="https://images.pexels.com/photos/3182829/pexels-photo-3182829.jpeg?cs=srgb&dl=pexels-fauxels-3182829.jpg&fm=jpg" />
                </div>
            </div>
        </div>

        <div class="bg-yellow relative flex flex-col w-full">
            <div class="w-screen-2xl mx-auto flex-row flex-wrap flex pt-4">
                <div class="w-1/2 h-full items-center pt-32">
                    <h1 class="font-title text-6xl mb-20 text-white font-semibold leading-tight tracking-wide">You want to end racial injustice.<br>Does your employer?</h4>
                    <p class="text-white text-xl w-2/3">We built inside voices so you can tell the world whether your employer’s actions match their words.</p>
                    <div class="w-4/5 flex flex-row mt-8">
                        <div class="bg-white h-16 w-4/5"></div><button class="w-1/5 bg-light-green">Search</button>
                    </div>
                </div>
                <div class="w-1/2 relative">
                    <img class="w-full -mb-16 z-10 top-0" src="https://images.pexels.com/photos/3182829/pexels-photo-3182829.jpeg?cs=srgb&dl=pexels-fauxels-3182829.jpg&fm=jpg" />
                </div>
            </div>
        </div>

        <div class="bg-white relative flex flex-col w-full">
            <div class="w-screen-2xl mx-auto flex-row flex-wrap flex pt-4">
                <div class="w-full h-full items-center pt-32">
                    <h1 class="font-title text-6xl mb-20 text-white font-semibold leading-tight tracking-wide">Latest Stories</h4>
                </div>
                <div class="w-full bg-ultra-light-grey rounded-lg shadow-md mb-10 flex flex-row flex-wrap">
                    <div class="w-1/12">
                        LOGO
                    </div>
                    <div class="w-2/12">
                        Deloitte Consulting
                    </div>
                    <div class="w-9/12">
                        Lorem Ipsum
                    </div>
                </div>

                <div class="w-full bg-ultra-light-grey rounded-lg shadow-md mb-10 flex flex-row flex-wrap">
                    <div class="w-1/12">
                        LOGO
                    </div>
                    <div class="w-2/12">
                        Deloitte Consulting
                    </div>
                    <div class="w-9/12">
                        Lorem Ipsum
                    </div>
                </div>

                <div class="w-full bg-ultra-light-grey rounded-lg shadow-md mb-10 flex flex-row flex-wrap">
                    <div class="w-1/12">
                        LOGO
                    </div>
                    <div class="w-2/12">
                        Deloitte Consulting
                    </div>
                    <div class="w-9/12">
                        Lorem Ipsum
                    </div>
                </div>

                View More
               
            </div>
        </div>
        <div class="bg-yellow relative flex flex-col w-full">
            <div class="w-screen-2xl mx-auto flex-row flex-wrap flex pt-4">
                <div class="w-1/2 h-full items-center pt-32">
                    <h1 class="font-title text-6xl mb-20 text-white font-semibold leading-tight tracking-wide">You want to end racial injustice.<br>Does your employer?</h4>
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
         <div class="relative bg-black flex flex-col w-full h-screen bg-cover">
            <div class="w-screen-2xl mx-auto flex-row flex-wrap flex pt-4">
                <div class="w-1/2">
                    <h1 class="font-title text-6xl mb-20 text-white font-semibold leading-tight tracking-wide">Share Your Story</h1>
                    <p class="text-white text-xl w-2/3">Whether your employer is good, bad or middle-of-the-road, we want to hear about it. Review your organization so we can see how they measure up against others. It’s time to amplify your voice.</p>
                    <a class="rounded-md inline-flex mt-10 bg-light-green px-5 py-5 text-dark-grey font-bold text-lg">Share Your Story</a>
                </div>
            </div>
         </div>

         <div class="relative bg-white flex flex-col w-full h-screen bg-cover">
            <div class="w-screen-2xl mx-auto flex-row flex-wrap flex pt-4">
                <div class="w-full">
                    <h1 class="font-title text-6xl mb-20 text-black font-semibold leading-tight tracking-wide">How it Works</h1>
                </div>
                <div class="w-1/3">
                    <div class="w-32 h-32 bg-green"></div>
                    <h3 class="font-title font-bold mb-8 text-3xl">Read</h3>
                    <p class="text-black text-xl w-4/5">Take a look at other people's stories by browsing our Organisations page. You can upvote stories that you find</p>
                </div>
                 <div class="w-1/3">
                    <div class="w-32 h-32 bg-green"></div>
                    <h3 class="font-title font-bold mb-8 text-3xl">Write</h3>
                    <p class="text-black text-xl w-4/5">Review your employer by answering 6 multiple-choice questions. We'll provide space for you to tell us what's driving</p>
                </div>
                 <div class="w-1/3">
                    <div class="w-32 h-32 bg-green"></div>
                    <h3 class="font-title font-bold mb-8 text-3xl">Review</h3>
                    <p class="text-black text-xl w-4/5">Review your answers before hitting submit. Remember, submissions should be honest and must abide by our Story</p>
                </div>
            </div>
         </div>

         <div class="relative bg-green flex flex-col w-full h-screen bg-cover">
            <div class="w-screen-2xl mx-auto flex-row flex-wrap flex pt-4">
                <div class="w-1/2">
                    IMAGE
                </div>
                <div class="w-1/2">
                    <h1 class="font-title text-6xl mb-20 text-white font-semibold leading-tight tracking-wide">Share Your Story</h1>
                    <p class="text-white text-xl w-2/3">Whether your employer is good, bad or middle-of-the-road, we want to hear about it. Review your organization so we can see how they measure up against others. It’s time to amplify your voice.</p>
                    <a class="rounded-md inline-flex mt-10 bg-light-green px-5 py-5 text-dark-grey font-bold text-lg">Share Your Story</a>
                </div>
    
            </div>
         </div>

         <div class="relative bg-white flex flex-col w-full h-screen bg-cover">
            <div class="w-screen-2xl mx-auto flex-row flex-wrap flex pt-4">
                <div class="w-full">
                    <h4 class="font-title text-center text-3xl text-black">See how similar companies perform</h4>
                </div>
                <div class="-mx-4 w-full flex flex-row">
                    <div class="w-1/3 bg-ultra-light-grey shadow-md mx-4">
                        <div class="w-full flex flex-row flex-wrap ">
                            <div class="w-1/4">Logo</div>
                            <div class="w-3/4">Deloitte Consulting</div>
                            <div class="w-full">10,000+ Employees -></div>
                        </div>
                    </div>
                    <div class="w-1/3 bg-ultra-light-grey shadow-md mx-4">
                        <div class="w-full flex flex-row flex-wrap">
                            <div class="w-1/4">Logo</div>
                            <div class="w-3/4">Deloitte Consulting</div>
                            <div class="w-full">10,000+ Employees -></div>
                        </div>
                    </div>
                    <div class="w-1/3 bg-ultra-light-grey shadow-md mx-4">
                        <div class="w-full flex flex-row flex-wrap">
                            <div class="w-1/4">Logo</div>
                            <div class="w-3/4">Deloitte Consulting</div>
                            <div class="w-full">10,000+ Employees -></div>
                        </div>
                    </div>
                </div>
                <div class="w-full">
                    <div class="">SEARCH BAR</div>
                </div>

            </div>
         </div>

         <div class="bg-green relative flex flex-col w-full">
            <div class="w-screen-2xl mx-auto flex-row flex-wrap flex pt-4">
                <div class="w-1/2 h-full items-center pt-32">
                    <h1 class="font-title text-6xl mb-20 text-white font-semibold leading-tight tracking-wide">You want to end racial injustice.<br>Does your employer?</h4>
                    <h2 class="font-title text-6xl mb-20 text-white font-semibold leading-tight tracking-wide">Our Mission</h2>
                    <p>Historically, companies have managed to be commercially successful without truly committing to diversity. Racial justice was never a priority because it didn’t affect their bottom line.</p>
                    <p>At inside voices, our mission is to change the incentive structure, so that companies need to embrace EDI in order to be successful. Big companies hold the keys to power in our society, but big companies are made up of people.</p>
                    <p>It’s time for the people to be heard.</p>
                </div>
                <div class="w-1/2 relative">
                    <img class="w-full -mb-16 z-10 top-0" src="https://images.pexels.com/photos/3182829/pexels-photo-3182829.jpeg?cs=srgb&dl=pexels-fauxels-3182829.jpg&fm=jpg" />
                </div>
            </div>
        </div>


        <div class="bg-yellow relative flex flex-col w-full">
            <div class="w-screen-2xl mx-auto flex-row flex-wrap flex pt-4">
                <div class="w-full">
                    <div class="w/1/2">
                        Logo Together we can give a voice to the voiceless
                    </div>
                </div>
                <div class="w-full">
                    <div class="w-1/2 h-full items-center pt-32 bg-green">
                        <h2 class="font-title text-4xl mb-20 text-white font-semibold leading-tight tracking-wide">The Strategy</h4>
                        <p>Many of us want to work for employers that share our values. At inside voices, we want to hekp jobseekers make informed decisions about their future employers.</p>
                        <p>By sharing the truth about how organizations perform on diversity, equity and inclusion, we can compare them to see who's standing out and who's falling behind. Knowledge is power.</p>
                        <p>Together, we can celebrate the champions, and force organisations with toxic cultures to reform if they want to recruit the best talent.</p>
                    </div>
                    <div class="w-1/2 relative">
                        <img class="w-full -mb-16 z-10 top-0" src="https://images.pexels.com/photos/3182829/pexels-photo-3182829.jpeg?cs=srgb&dl=pexels-fauxels-3182829.jpg&fm=jpg" />
                    </div>
                </div>
            </div>
        </div>
         <div class="bg-yellow relative flex flex-col w-full">
            <div class="w-screen-2xl mx-auto flex-row flex-wrap flex pt-4">
                <div class="w-2/3">
                    Who we are
                </div>
                <div class="w-1/3">
                   Image
                </div>
            </div>
        </div>


        <footer class="bg-yellow relative flex flex-col w-full">
            <div class="w-screen-2xl mx-auto flex-row flex-wrap flex pt-4">
                <div class="w-2/3 h-full items-center pt-32">
                    <h1 class="font-title text-6xl mb-20 text-white font-semibold leading-tight tracking-wide">You want to end racial injustice.<br>Does your employer?</h4>
                    <p class="text-white text-xl w-2/3">We built Inside Voices to give you a safe space to share stories about the culture of your organization and learn about others.</p>
                    <div class="w-4/5 flex flex-row mt-8">
                        <div class="bg-white h-16 w-4/5"></div><button class="w-1/5 bg-light-green">Search</button>
                    </div>
                </div>
                <div class="w-1/3 relative">
                    <img class="w-full -mb-16 z-10 top-0" src="https://images.pexels.com/photos/3182829/pexels-photo-3182829.jpeg?cs=srgb&dl=pexels-fauxels-3182829.jpg&fm=jpg" />
                </div>
            </div>
        </footer>
        
    </body>
</html>
