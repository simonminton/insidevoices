<template>
    <public-app-layout>
        <div>
            <div v-if="step < 17" class="py-12 bg-top bg-cover min-h-screen"  style="background-image: url('/images/ivbga.jpg')">
                <div class="container w-full mx-auto flex flex-row flex-wrap">
                    <div class="w-full lg:w-3/5 sm:px-6 lg:px-8" >
                        <form @submit.prevent="submit"  enctype="multipart/form-data">
                            <div class="lg:pr-12">
                                <div style="min-height: 24rem">
                                <h3 class="pinkUnderline text-white text-xl inline-block mb-8 ">
                                <span v-if="step == 3 || step == 4">Representation</span>
                                    <span v-if="step == 5 || step == 6">Diversity</span>
                                    <span v-if="step == 7 || step == 8">Inclusion</span>
                                    <span v-if="step == 9 || step == 10">Fairness</span>
                                    <span v-if="step == 11 || step == 12">Advocacy</span>
                                    <span v-if="step == 13 || step == 14">Treatment</span>
                                </h3>
                                <h4 class="text-white text-lg" v-if="step > 2 && step < 14 && step%2 != 0">
                                How do you feel about this statement?
                                </h4>
                                

                                <h2 class="text-5xl font-bold font-title leading-none text-white mb-10">
                                    <span v-if="step == 1">Well done for taking <span class="pinkUnderline">action!</span></span>
                                    <span v-if="step == 2">Tell us a little bit about your company.</span>
                                    <span v-if="step == 3">{{response.question1 }}</span>
                                    <span v-if="step == 5">{{response.question2 }}</span>
                                    <span v-if="step == 7">{{response.question3 }}</span>
                                    <span v-if="step == 9">{{response.question4 }}</span>
                                    <span v-if="step == 11">{{response.question5 }}</span>
                                    <span v-if="step == 13">{{response.question6 }}</span>
                                    <span v-if="step >= 4 && step%2 != 1 && step <= 14">What makes you say that?</span>
                                    <span v-if="step == 15">Finally, tell us a little bit about yourself.</span>
                                    <span v-if="step == 16">Anything else you want to share?</span>
                                </h2>
                                <h4 class="text-white text-xl mt-8" v-if="step == 1">
                                Thanks for deciding to write an anonymous review. By telling us what you’ve witnessed and experienced, you can help other people figure out if your employer is right for them.
                                </h4>
                                <div v-if="step == 2" class="">
                                    <label class="w-full text-white text-xl mb-4 block" for="companyName">What is the name of your current or most recent employer?</label>
                                    <input class="w-full text-2xl px-4 py-4 rounded-lg mb-4 block" type="text" v-model="response.company"></input>
                                    <label class="w-full text-white text-xl mb-4 block" for="companyName">What is your primary work location?</label>
                                    <input class="w-full text-2xl px-4 py-4 rounded-lg mb-4 block" type="text" v-model="response.location"></input>
                                </div>
                                <div v-if="step == 15" class="">
                                    <label class="w-full text-white text-xl mb-4 block" for="role">What is your role/job title?</label>
                                    <input class="w-full text-2xl px-4 py-4 rounded-lg mb-4 block" type="text" v-model="response.role"></input>
                                    <label class="w-full text-white text-xl mb-4 block" for="role">How long have you worked at your company?</label>
                                    <select v-model="response.timeAtCompany" class="text-2xl rounded-lg w-full flex px-4 py-4">
                                        <option value="0">Select your Answer</option>
                                        <option value="1">0 to 6 months</option>
                                        <option value="2">7 to 11 months</option>
                                        <option value="3">1 to 2 years</option>
                                        <option value="4">3 to 5 years</option>
                                        <option value="5">6 to 10 years</option>
                                        <option value="6">10 years or more</option>
                                    </select>
                                    <label class="w-full text-white text-xl mb-4 block" for="">Gender</label>
                                    <input class="w-full text-2xl px-4 py-4 rounded-lg mb-4 block" type="text" v-model="response.gender"></input>
                                    <label class="w-full text-white text-xl mb-4 block" for="">Race</label>
                                    <input class="w-full text-2xl px-4 py-4 rounded-lg mb-4 block" type="text" v-model="response.race"></input>
                                    <label class="w-full text-white text-xl mb-4 block" for="">Age</label>
                                    <input class="w-full text-2xl px-4 py-4 rounded-lg mb-4 block" type="text" v-model="response.age"></input>
                                    <label class="w-full text-white text-xl mb-4 block" for="">Religion</label>
                                    <input class="w-full text-2xl px-4 py-4 rounded-lg mb-4 block" type="text" v-model="response.religion"></input>
                                    <label class="w-full text-white text-xl mb-4 block" for="">Disability</label>
                                    <input class="w-full text-2xl px-4 py-4 rounded-lg mb-4 block" type="text" v-model="response.disability"></input>
                                </div>
                                
                                <select v-if="step == 3" v-model="response.response1" class="text-2xl rounded-lg w-full flex px-4 py-4">
                                    <option value="0">Select your Answer</option>
                                    <option value="1">Strongly disagree</option>
                                    <option value="2">Disagree</option>
                                    <option value="3">Neither agree nor disagree</option>
                                    <option value="4">Agree</option>
                                    <option value="5">Strongly agree</option>
                                </select>

                                <select v-if="step == 5" v-model="response.response2" class="text-2xl rounded-lg w-full flex px-4 py-4">
                                    <option value="0">Select your Answer</option>
                                    <option value="1">Strongly disagree</option>
                                    <option value="2">Disagree</option>
                                    <option value="3">Neither agree nor disagree</option>
                                    <option value="4">Agree</option>
                                    <option value="5">Strongly agree</option>
                                </select>

                                <select v-if="step == 7" v-model="response.response3" class="text-2xl rounded-lg w-full flex px-4 py-4">
                                    <option value="0">Select your Answer</option>
                                    <option value="1">Strongly disagree</option>
                                    <option value="2">Disagree</option>
                                    <option value="3">Neither agree nor disagree</option>
                                    <option value="4">Agree</option>
                                    <option value="5">Strongly agree</option>
                                </select>

                                <select v-if="step == 9" v-model="response.response4" class="text-2xl rounded-lg w-full flex px-4 py-4">
                                    <option value="0">Select your Answer</option>
                                    <option value="1">Strongly disagree</option>
                                    <option value="2">Disagree</option>
                                    <option value="3">Neither agree nor disagree</option>
                                    <option value="4">Agree</option>
                                    <option value="5">Strongly agree</option>
                                </select>

                                <select v-if="step == 11" v-model="response.response5" class="text-2xl rounded-lg w-full flex px-4 py-4">
                                    <option value="0">Select your Answer</option>
                                    <option value="1">Strongly disagree</option>
                                    <option value="2">Disagree</option>
                                    <option value="3">Neither agree nor disagree</option>
                                    <option value="4">Agree</option>
                                    <option value="5">Strongly agree</option>
                                </select>

                                <select v-if="step == 13" v-model="response.response6" class="text-2xl rounded-lg w-full flex px-4 py-4">
                                    <option value="0">Select your Answer</option>
                                    <option value="1">Strongly disagree</option>
                                    <option value="2">Disagree</option>
                                    <option value="3">Neither agree nor disagree</option>
                                    <option value="4">Agree</option>
                                    <option value="5">Strongly agree</option>
                                </select>

                                <textarea v-if="step == 4" v-model="response.story1" class="w-full flex rounded-md p-4" rows="8" placeholder="Try to tell us why you chose that answer."></textarea>
                                <textarea v-if="step == 6" v-model="response.story2" class="w-full flex rounded-md p-4" rows="8" placeholder="Try to tell us why you chose that answer."></textarea>
                                <textarea v-if="step == 8" v-model="response.story3" class="w-full flex rounded-md p-4" rows="8" placeholder="Try to tell us why you chose that answer."></textarea>
                                <textarea v-if="step == 10" v-model="response.story4" class="w-full flex rounded-md p-4" rows="8" placeholder="Try to tell us why you chose that answer."></textarea>
                                <textarea v-if="step == 12" v-model="response.story5" class="w-full flex rounded-md p-4" rows="8" placeholder="Try to tell us why you chose that answer."></textarea>
                                <textarea v-if="step == 14" v-model="response.story6" class="w-full flex rounded-md p-4" rows="8" placeholder="Try to tell us why you chose that answer."></textarea>
                                
                                <textarea v-if="step == 16" v-model="response.extra" class="w-full flex rounded-md p-4" rows="4" placeholder=""></textarea>
                                <label v-if="step == 16" class="w-full text-white text-xl my-4 block" for="">Before you go, do you have any feedback? We're constantly improving and would love to hear your thoughts.</label>
                                <textarea v-if="step == 16" v-model="response.feedback" class="w-full flex rounded-md p-4" rows="4" placeholder=""></textarea>
                                
                                </div>
                                <div class="w-full flex flex-row flex-wrap mt-10">
                                    <div class="w-1/2">
                                        <div class="w-1/2" v-if="step <= 15">
                                            <span class="text-white">{{ Math.ceil(step/steps*100) }}%</span>
                                            <div class="bg-white h-2 rounded-full mt-2">
                                                <span class="rounded-full h-2 bg-light-green block" :style="'width: '+Math.ceil(step/steps*100)+'%'"></span>
                                            </div>
                                            <div class="w-full flex flex-row pt-4">
                                                <div class="w-1/2 text-white">
                                                    <span v-if="step > 1" class="cursor-pointer" @click="step = step-1">&larr; Back</span>
                                                </div>
                                                <div class="w-1/2 text-light-green text-right">
                                                    <span v-if="step == 3 || step == 5 || step == 7 || step == 9 || step == 11 || step == 13" class="cursor-pointer" @click="skipQuestion()">Skip</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-1/2 flex flex-row justify-end">
                                        <div class="flex flex-col justify-end select-none ">
                                            <div @click="step = step+1" v-if="step <= 16" class="cursor-pointer flex px-6 py-2 font-bold text-xl text-black bg-light-green rounded-md">Continue</div>    
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="hidden lg:flex w-2/5 pt-8">
                        <div><img src="/images/sittingtwo.png" /></div>
                    </div>
                </div>
            </div>
            <div v-if="step==17">
                <div class="bg-green">
                    <div class="container mx-auto flex-row flex-wrap flex pt-4 px-8 md:px-0">
                        <div class="w-full h-full items-center pt-4 md:pt-12 xl:pt-32 xl:pr-12 pb-4 md:pb-12 xl:pb-32">
                            <h1 class="font-title text-6xl md:text-7xl mb-4 text-white font-semibold leading-tight tracking-wide">Please review your responses. Once you’re happy, press Finish.</h1>
                            <div class="text-white text-xl leading-loose">You can change your answers and edit your stories by clicking Edit below.</div>
                        </div>
                    </div>
                </div>
                <div class="bg-white">
                    <div class="container mx-auto flex-row flex-wrap flex pt-4 px-8 md:px-0">
                        <div class="w-full">
                            <div class="w-full"><h3 class="mt-6 pinkUnderline text-black text-xl inline-block">Representation</h3></div>
                        <h4 class="mt-8 mb-8 font-title text-3xl w-full font-bold text-black">{{ response.question1 }}</h4>
                        <h5 class="w-full text-2xl font-title mb-4 font-bold">You Answered:</h5>
                        <div class="w-full text-xl mb-6">
                            <span v-if="response.response1 == 0">Skipped</span>
                            <span v-if="response.response1 == 1">Strongly disagree</span>
                            <span v-if="response.response1 == 2">Disagree</span>
                            <span v-if="response.response1 == 3">Neither agree nor disagree</span>
                            <span v-if="response.response1 == 4">Agree</span>
                            <span v-if="response.response1 == 5">Strongly agree</span>
                            - <span @click="step = 3" class="underline">Edit</span>
                        </div>
                        <div class="w-full text-xl">{{ response.story1 }}</div>
                        <hr class="opacity-50">
                        
                        </div>
                        <div class="w-full">
                            <div class="w-full"><h3 class="mt-6 pinkUnderline text-black text-xl inline-block">Diversity</h3></div>
                        <h4 class="mt-8 mb-8 font-title text-3xl w-full font-bold text-black">{{ response.question2 }}</h4>
                        <h5 class="w-full text-2xl font-title mb-4 font-bold">You Answered:</h5>
                        <div class="w-full text-xl mb-6">
                            <span v-if="response.response2 == 0">Skipped</span>
                            <span v-if="response.response2 == 1">Strongly disagree</span>
                            <span v-if="response.response2 == 2">Disagree</span>
                            <span v-if="response.response2 == 3">Neither agree nor disagree</span>
                            <span v-if="response.response2 == 4">Agree</span>
                            <span v-if="response.response2 == 5">Strongly agree</span>
                            - <span @click="step = 5" class="underline">Edit</span>
                        </div>
                        <div class="w-full text-xl">{{ response.story2 }}</div>
                        <hr class="opacity-50">
                        
                        </div>
                        <div class="w-full">
                            <div class="w-full"><h3 class="mt-6 pinkUnderline text-black text-xl inline-block">Inclusion</h3></div>
                        <h4 class="mt-8 mb-8 font-title text-3xl w-full font-bold text-black">{{ response.question3 }}</h4>
                        <h5 class="w-full text-2xl font-title mb-4 font-bold">You Answered:</h5>
                        <div class="w-full text-xl mb-6">
                            <span v-if="response.response3 == 0">Skipped</span>
                            <span v-if="response.response3 == 1">Strongly disagree</span>
                            <span v-if="response.response3 == 2">Disagree</span>
                            <span v-if="response.response3 == 3">Neither agree nor disagree</span>
                            <span v-if="response.response3 == 4">Agree</span>
                            <span v-if="response.response3 == 5">Strongly agree</span>
                            - <span @click="step = 7" class="underline">Edit</span>
                        </div>
                        <div class="w-full text-xl">{{ response.story3 }}</div>
                        <hr class="opacity-50">
                        
                        </div>
                        <div class="w-full">
                            <div class="w-full"><h3 class="mt-6 pinkUnderline text-black text-xl inline-block">Fairness</h3></div>
                        <h4 class="mt-8 mb-8 font-title text-3xl w-full font-bold text-black">{{ response.question4 }}</h4>
                        <h5 class="w-full text-2xl font-title mb-4 font-bold">You Answered:</h5>
                        <div class="w-full text-xl mb-6">
                            <span v-if="response.response4 == 0">Skipped</span>
                            <span v-if="response.response4 == 1">Strongly disagree</span>
                            <span v-if="response.response4 == 2">Disagree</span>
                            <span v-if="response.response4 == 3">Neither agree nor disagree</span>
                            <span v-if="response.response4 == 4">Agree</span>
                            <span v-if="response.response4 == 5">Strongly agree</span>
                            - <span @click="step = 9" class="underline">Edit</span>
                        </div>
                        <div class="w-full text-xl">{{ response.story4 }}</div>
                        <hr class="opacity-50">
                        
                        </div>
                        <div class="w-full">
                            <div class="w-full"><h3 class="mt-6 pinkUnderline text-black text-xl inline-block">Advocacy</h3></div>
                        <h4 class="mt-8 mb-8 font-title text-3xl w-full font-bold text-black">{{ response.question5 }}</h4>
                        <h5 class="w-full text-2xl font-title mb-4 font-bold">You Answered:</h5>
                        <div class="w-full text-xl mb-6">
                            <span v-if="response.response5 == 0">Skipped</span>
                            <span v-if="response.response5 == 1">Strongly disagree</span>
                            <span v-if="response.response5 == 2">Disagree</span>
                            <span v-if="response.response5 == 3">Neither agree nor disagree</span>
                            <span v-if="response.response5 == 4">Agree</span>
                            <span v-if="response.response5 == 5">Strongly agree</span>
                            - <span @click="step = 11" class="underline">Edit</span>
                        </div>
                        <div class="w-full text-xl">{{ response.story5 }}</div>
                        <hr class="opacity-50">
                        
                        </div>
                        <div class="w-full">
                            <div class="w-full"><h3 class="mt-6 pinkUnderline text-black text-xl inline-block">Treatment</h3></div>
                        <h4 class="mt-8 mb-8 font-title text-3xl w-full font-bold text-black">{{ response.question6 }}</h4>
                        <h5 class="w-full text-2xl font-title mb-4 font-bold">You Answered:</h5>
                        <div class="w-full text-xl mb-6">
                            <span v-if="response.response6 == 0">Skipped</span>
                            <span v-if="response.response6 == 1">Strongly disagree</span>
                            <span v-if="response.response6 == 2">Disagree</span>
                            <span v-if="response.response6 == 3">Neither agree nor disagree</span>
                            <span v-if="response.response6 == 4">Agree</span>
                            <span v-if="response.response6 == 5">Strongly agree</span>
                            - <span @click="step = 2" class="underline">Edit</span>
                        </div>
                        <div class="w-full text-xl">{{ response.story6 }}</div>
                        <hr class="opacity-50">
                        </div>
                        <div class="w-full flex flex-row">
                            <div class="flex w-full justify-end select-none mt-8 mb-10">
                                <div @click="submit" class="cursor-pointer px-6 py-2 font-bold text-xl text-black bg-light-green rounded-md">Finish &rarr;</div>    
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div v-if="step == 18">
                <div class="relative bg-black flex flex-col w-full h-96 bg-cover bg-right" style="background-image: url('/images/how-it-works-bg.jpg')">
                    <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-t from-black"></div>
                    <x-navigation></x-navigation>
                    <div class="container px-8 lg:px-0 relative mx-auto flex-row flex-wrap flex pt-4 h-full items-center ">
                        <div class="w-full lg:w-1/2">
                            <h1 class="font-title text-5xl md:text-6xl mb-12 text-white font-semibold leading-tight tracking-wide">Thank you for sharing</h1>
                            <p class="text-white text-xl w-full md:w-2/3 mb-12">Your review will be posted soon. Check back to see if people find your review helpful.</p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </public-app-layout>
</template>

<script>
import Button from '../Jetstream/Button.vue'
    import PublicAppLayout from './../Layouts/PublicAppLayout'

    export default {
        components: {
            PublicAppLayout,
        },
        props: {
            companies: Array,
        },
          remember: 'form',
        data() {
            return {
                company_name: "0",
                current_question: "company",
                steps: 15,
                step: 1,
                skippable: 0,
                response: {
                    company: "",
                    location: "",
                    question1: "People of color are well-represented in my company’s leadership.",
                    response1: 0,
                    story1: "",
                    question2: "My company is racially diverse.",
                    response2: 0,
                    story2: "",
                    question3: "In my opinion, people of color can be themselves at my company.",
                    response3: 0,
                    story3: "",
                    question4: "Race has an impact on performance reviews or compensation at my company.",
                    response4: 0,
                    story4: "",
                    question5: "My company’s leadership cares about issues that specifically affect people of color.",
                    response5: 0,
                    story5: "",
                    question6: "People of color receive equal treatment at my company.",
                    response6: 0,
                    story6: "",
                    role: "",
                    timeAtCompany: 0,
                    email: "",
                    gender: "",
                    race: "",
                    age: "",
                    religion: "",
                    disability: ""
                }
                
               
            }
        },
        watch: {
            step: function () {
                document.body.scrollTop = 0; // For Safari
                document.documentElement.scrollTop = 0;
            }
        },
        computed: {
            // parentQuestions: function() {
            //   return _.pickBy(this.questions[0].questions, function(q) {
            //     return !q.parent_id;
            //   });
            // },
           
          },
        
        methods: {
            submit() {
                this.$forceUpdate()
                 axios.post('/your-story', this.response)
                .then(response => {
                    console.log(response.data);
                    this.step = 18;
                }).catch(error => { console.log(error.response) });
                 
            },
            skipQuestion() {
                if(step == 2) {

                }
            }
        }
    }
</script>
