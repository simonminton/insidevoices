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
                    <p class="text-white text-lg md:text-xl">Have a question you don’t see below? Drop us an <a href="mailto:support@insidevoices.io">email</a>.<p></x-slot>
            </x-plain-header>
        </div>

            
            

        <div class="bg-light-grey  relative flex flex-col w-full pt-12">
            <div class="container mx-auto w-full flex flex-row flex-wrap relative">
                <div class="w-full lg:w-1/5 sticky top-0 px-8 lg:px-0 lg:pr-4 flex flex-col overflow-scroll ">
                    <a href="" class="bg-light-green  font-bold text-dark-grey inline-block lg:w-full text-lg lg:flex rounded-md mb-4 py-3 px-6">Writing a review</a>
                    <a href="" class="bg-white  text-dark-grey inline-block lg:w-full text-lg lg:flex rounded-md mb-4 py-3 px-6">How it works</a>
                    <a href="" class="bg-white  text-dark-grey inline-block lg:w-full text-lg lg:flex rounded-md mb-4 py-3 px-6">Who should write a review?</a>
                </div>
                <div class="w-full lg:w-4/5 px-8 lg:pl-8 lg:px-0 pb-12">
                    <x-qa-section>
                        <x-slot name="title">Writing a review</x-slot>
                        <x-slot name="body">
                            <x-qa>
                                <x-slot name="question">How do I write a good review?</x-slot>
                                <x-slot name="answer">
                                    <p>After each multiple-choice choice question (MCQ), we’ll ask you what’s driving your answers. This is your opportunity to share your stories and give people the information they need to understand the culture of your organization. In our experience, the best stories:</p>
<p>- <strong>Explain why you chose that specific answer to the MCQ, out of the 5 options.</strong> For example, if you chose ‘agree’, explain why you didn’t choose ‘disagree’ but also why you didn’t feel strongly enough to choose ‘strongly agree’.</p>
<p>- <strong>Explain what the answer to the MCQ means.</strong> For example, if your company is not racially diverse, what does that mean? Are there no people of color at all? Are there a few people of one race but no Black people? Paint the picture.</p>
<p>- <strong>Use examples to provide context.</strong> If certain experiences are playing heavily into the answer you gave, tell us about them. Remember not to use any names or identify anyone.</p>
                                </x-slot>
                            </x-qa>
                            <x-qa>
                                <x-slot name="question">Can I ask for my review to be taken down?</x-slot>
                                <x-slot name="answer">
                                    <p>If you included your email address with your review, <strong>you can request to have your review deleted</strong>. Just send an email from that email address to <a href="mailto:support@insidevoices.io">support@insidevoices.io</a> with the reviewed company’s name in the Subject line, and ask us to take it down.</p>
                                </x-slot>
                            </x-qa>
                        </x-slot>
                    </x-qa-section>
                    <x-qa-section>
                        <x-slot name="title">How it works</x-slot>
                        <x-slot name="body">
                            <x-qa>
                                <x-slot name="question">Is my review anonymous?</x-slot>
                                <x-slot name="answer">
                                    <p><strong>Yes,</strong> all reviews are anonymous.</p>
                                </x-slot>
                            </x-qa>
                            <x-qa>
                                <x-slot name="question">What if I don’t know the answer?</x-slot>
                                <x-slot name="answer">
                                    <p>If you don’t feel like you have the relevant experience to answer a question, <strong>press skip and move on to the next question.</strong></p>
                                </x-slot>
                            </x-qa>
                            <x-qa>
                                <x-slot name="question">Can I include people’s names in my review?</x-slot>
                                <x-slot name="answer">
                                    <p><strong>No</strong>, do not submit reviews which include names or identify individuals other than members of the Executive Committee (or equivalent body). For more information on what you can and can’t do, see our Terms of Use.</p>
                                </x-slot>
                            </x-qa>
                            <x-qa>
                                <x-slot name="question">How long do reviews stay up on the site?</x-slot>
                                <x-slot name="answer">
                                    <p>Reviews will sunset after <strong>2 years</strong>. We believe that companies should be judged on what they’re doing now, rather than what they were doing a while ago. We think 2 years is more than enough time for a company to get its act together.</p>
                                </x-slot>
                            </x-qa>
                            <x-qa>
                                <x-slot name="question">Do you edit reviews? </x-slot>
                                <x-slot name="answer">
                                    <p><strong>No</strong>, we never edit, alter or amend the text of reviews or comments.</p>
                                </x-slot>
                            </x-qa>
                        </x-slot>
                    </x-qa-section>
                    <x-qa-section>
                        <x-slot name="title">Who should write a review?</x-slot>
                        <x-slot name="body">
                            <x-qa>
                                <x-slot name="question">I’m not a person of color; should I write a review?</x-slot>
                                <x-slot name="answer">
                                    <p><strong>Yes</strong>, please. If you’ve been paying attention to the way your company performs on diversity, equity and inclusion, we want to hear from you. White people are often in a position to witness behavior that people of color are not, so we encourage you to share what you know, as an act of allyship.</p>
                                </x-slot>
                            </x-qa>
                            <x-qa>
                                <x-slot name="question">I don’t see my employer in the list of companies; should I write a review?</x-slot>
                                <x-slot name="answer">
                                    <p><strong>Yes</strong>, please. If your company isn’t in the list, then it doesn’t have any reviews yet. Writing a review for your company will add it to our list.</p>
                                </x-slot>
                            </x-qa>
                            <x-qa>
                                <x-slot name="question">My company already has reviews; should I write a review?</x-slot>
                                <x-slot name="answer">
                                    <p><strong>Yes</strong>, please. The more reviews the better. It can be difficult to tell whether a review is representative of the culture of a company or just one person’s experience. Multiple reviews help to paint a broader picture of the company’s culture and allow users to identify trends and common themes.</p>
                                </x-slot>
                            </x-qa>
                            <x-qa>
                                <x-slot name="question">There are few people of color at my company; should I write a review?</x-slot>
                                <x-slot name="answer">
                                    <p><strong>Yes</strong>, and highlight the lack of diversity in your review. It may be clear to you that your company has very few people of color, but that may not be obvious from the outside. Your review could shine a light on the lack of diversity. When writing your review, feel free to skip questions that you don’t think apply.</p>
                                </x-slot>
                            </x-qa>
                            <x-qa>
                                <x-slot name="question">I recently joined my company; should I write a review?</x-slot>
                                <x-slot name="answer">
                                    <p><strong>No</strong>, probably not. We think you should wait to write a review until you’ve been at a company for at least 6 months. However, feel free to write a review for your previous employer, if you worked there within the last 6 months.</p>
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
