<template>
    <public-app-layout>
        <div class="py-24 bg-top bg-cover h-screen"  style="background-image: url('/images/ivbga.jpg')">
            <div class="container w-full mx-auto flex flex-row flex-wrap">
                <div class="w-full lg:w-3/5 sm:px-6 lg:px-8" >
                    <form @submit.prevent="submit"  enctype="multipart/form-data">
                        <div class="lg:pr-12">
                            
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
                            

                            <h2 class="text-5xl font-bold font-title leading-none text-white">
                                <span v-if="step == 1">Well done for taking <span class="pinkUnderline">action!</span></span>
                                <span v-if="step == 3">People of color are well-represented in my company’s leadership.</span>
                                <span v-if="step == 5">My company is racially diverse.</span>
                                <span v-if="step == 7">In my opinion, people of color can be themselves at my company.</span>
                                <span v-if="step == 9">Race has an impact on performance reviews or compensation at my company.</span>
                                <span v-if="step == 11">My company’s leadership cares about issues that specifically affect people of color.</span>
                                <span v-if="step == 13">People of color receive equal treatment at my company.</span>
                                <span v-if="step >= 4 && step%2 != 1 && step <= 14">What makes you say that?</span>

                            </h2>
                            <h4 class="text-white text-xl mt-8" v-if="step == 1">
                            Thanks for deciding to write an anonymous review. By telling us what you’ve witnessed and experienced, you can help other people figure out if your employer is right for them.
                            </h4>
                            <select v-if="step >= 3 && step%2 == 1 && step <= 14" class="text-2xl rounded-lg w-full flex px-4 py-6 mt-10">
                                <option value="0">Select your Answer</option>
                                <option value="0">Strongly disagree</option>
                                <option value="0">Disagree</option>
                                <option value="0">Neither agree nor disagree</option>
                                <option value="0">Agree</option>
                                <option value="0">Strongly agree</option>
                            </select>

                            <textarea v-if="step >= 4 && step%2 != 1  && step <= 14" class="w-full flex rounded-md p-4 mt-10" rows="8" placeholder="Try to tell us why you chose that answer."></textarea>
                            <div class="w-full flex flex-row flex-wrap mt-10">
                                <div class="w-1/2">
                                </div>
                                <div class="w-1/2 flex flex-row justify-end">
                                    <span @click="step = step+1" class="cursor-pointer px-6 py-2 font-bold text-xl text-black bg-light-green rounded-md">Continue</span>
                                </div>


                            </div>
                        </div>
                    </form>
                </div>
                <div class="hidden lg:flex w-2/5 pt-8">
                <img src="/images/sittingtwo.png" />
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
                steps: 0,
                step: 1
                
               
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
                 this.$inertia.post('/your-experience', this.form, {
                     onStart: () => this.sending = true,
                     onFinish: () => this.sending = false,
                 })
            },
            setCurrentQuestion(q) {
                this.current_question = q;
            }
        }
    }
</script>
