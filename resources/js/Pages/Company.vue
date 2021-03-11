<template>
    <public-app-layout>
        <div class="bg-green">
            <div class="container mx-auto flex-row flex-wrap flex pt-4 px-8 md:px-0">
                <div class="w-full h-full flex flex-row flex-wrap items-center pt-4 md:pt-12 xl:pt-16 xl:pr-12 pb-4 ">
                    <div v-if="!company.logo" class="flex w-32 h-32 justify-center items-center text-white bg-black"></div>
                    <div v-if="company.logo" class="flex w-32 h-32 justify-center items-center text-white"><img :src="'/storage/'+company.logo" class="w-full " /></div>
                    <div class="pl-8 flex flex-row flex-wrap">
                        <h1 class="font-title w-full text-6xl md:text-7xl mb-4 text-white font-semibold leading-tight tracking-wide">{{ company.name }} </h1>
                        <div class="w-full flex flex-row flex-wrap">
                            <div class="w-1/3 leading-loose text-xl text-white">
                                {{ company.industry.name }}
                                
                            </div>
                            <div class="w-1/3 leading-loose text-xl text-white">
                            <span v-html="company.description"></span>
                            </div>
                            <div class="w-1/3 leading-loose text-xl text-white">
                            ({{ company.responses.length }}) reviews
                            </div>
                               
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-light-grey  relative flex flex-col w-full pt-12 min-h-screen">
                <div class="container mx-auto w-full flex flex-row relative">
                    <div class="w-1/5 sticky top-0 pr-4">
                        <a  class="bg-white text-dark-grey w-full text-lg flex rounded-md mb-4 py-3 px-6 cursor-pointer">Representation</a>
                        <a  class="bg-white text-dark-grey w-full text-lg flex rounded-md mb-4 py-3 px-6 cursor-pointer">Diversity</a>
                        <a  class="bg-white text-dark-grey w-full text-lg flex rounded-md mb-4 py-3 px-6 cursor-pointer">Inclusion</a>
                        <a  class="bg-white text-dark-grey w-full text-lg flex rounded-md mb-4 py-3 px-6 cursor-pointer">Fairness</a>
                        <a  class="bg-white text-dark-grey w-full text-lg flex rounded-md mb-4 py-3 px-6 cursor-pointer">Advocacy</a>
                        <a  class="bg-white text-dark-grey w-full text-lg flex rounded-md mb-4 py-3 px-6 cursor-pointer">Treatment</a>
                    </div>
                    <div v-if="company.responses.length == 0">
                        <div class="w-4/5 pl-8 pb-12 flex flex-row flex-wrap">
                            <div class="bg-white px-8 py-6 w-full flex flex-row flex-wrap shadow-md rounded-md mb-4">
                                <h4 class="w-full text-black font-bold text-4xl font-title">We've not received any responses for this company yet.</h4>
                            </div>
                        </div>
                    </div>
                    <div v-if="company.responses.length != 0">
                        
                        <div class="w-4/5 pl-8 pb-12 flex flex-row flex-wrap">
                            <div class="bg-white px-8 py-6 w-full flex flex-row flex-wrap shadow-md rounded-md mb-4">
                                <h4 class="w-full text-black font-bold text-4xl font-title">People of color are well-represented in my company’s leadership.</h4>
                                <h4 class="w-full font-bold text-4xl font-title text-green">{{ company.common_response.q1 }}</h4>
                            </div>
                            <div class="bg-white px-8 py-6 w-full flex flex-row flex-wrap shadow-md rounded-md text-lg" v-for="(response, index) in company.responses" v-bind:key="response.id">
                            {{ response.story1 }}
                            </div>
                        </div>
                        
                        <div class="w-4/5 pl-8 pb-12 flex flex-row flex-wrap ">
                            <div class="bg-white px-8 py-6 w-full flex flex-row flex-wrap shadow-md rounded-md  mb-4">
                                <h4 class="w-full text-black font-bold text-4xl font-title">My company is racially diverse.</h4>
                                <h4 class="w-full font-bold text-4xl font-title text-green">{{ company.common_response.q2 }}</h4>
                            </div>
                            <div v-for="(response, index) in company.responses" v-bind:key="response.id" class="bg-white px-8 py-6 w-full flex flex-row flex-wrap shadow-md rounded-md text-lg">
                                {{ response.story2 }}
                            </div>
                        </div>
                        
                        <div class="w-4/5 pl-8 pb-12 flex flex-row flex-wrap">
                            <div class="bg-white px-8 py-6 w-full flex flex-row flex-wrap shadow-md rounded-md mb-4">
                                <h4 class="w-full text-black font-bold text-4xl font-title">In my opinion, people of color can be themselves at my company.</h4>
                                <h4 class="w-full font-bold text-4xl font-title text-green">{{ company.common_response.q3 }}</h4>
                            </div>
                            <div v-for="(response, index) in company.responses" v-bind:key="response.id" class="bg-white px-8 py-6 w-full flex flex-row flex-wrap shadow-md rounded-md text-lg">
                                {{ response.story3 }}
                            </div>
                        </div>
                        <div class="w-4/5 pl-8 pb-12 flex flex-row flex-wrap">
                            <div class="bg-white px-8 py-6 w-full flex flex-row flex-wrap shadow-md rounded-md mb-4">
                                <h4 class="w-full text-black font-bold text-4xl font-title">Race has an impact on performance reviews or compensation at my company.</h4>
                                <h4 class="w-full font-bold text-4xl font-title text-green">{{ company.common_response.q4 }}</h4>
                            </div>
                            <div v-for="(response, index) in company.responses" v-bind:key="response.id" class="bg-white px-8 py-6 w-full flex flex-row flex-wrap shadow-md rounded-md text-lg">
                                {{ response.story4 }}
                            </div>
                        </div>
                        <div class="w-4/5 pl-8 pb-12 flex flex-row flex-wrap">
                            <div class="bg-white px-8 py-6 w-full flex flex-row flex-wrap shadow-md rounded-md mb-4">
                                <h4 class="w-full text-black font-bold text-4xl font-title">My company’s leadership cares about issues that specifically affect people of color.</h4>
                                <h4 class="w-full font-bold text-4xl font-title text-green">{{ company.common_response.q5 }}</h4>
                            </div>
                            <div v-for="(response, index) in company.responses" v-bind:key="response.id" class="bg-white px-8 py-6 w-full flex flex-row flex-wrap shadow-md rounded-md text-lg">
                                {{ response.story5 }}
                            </div>
                        </div>
                        <div class="w-4/5 pl-8 pb-12 flex flex-row flex-wrap">
                            <div class="bg-white px-8 py-6 w-full flex flex-row flex-wrap shadow-md rounded-md mb-4">
                                <h4 class="w-full text-black font-bold text-4xl font-title">People of color receive equal treatment at my company.</h4>
                                <h4 class="w-full font-bold text-4xl font-title text-green">{{ company.common_response.q6 }}</h4>
                            </div>
                            <div v-for="(response, index) in company.responses" v-bind:key="response.id" class="bg-white px-8 py-6 w-full flex flex-row flex-wrap shadow-md rounded-md text-lg">
                                {{ response.story6 }}
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

        
    </public-app-layout>
</template>

<script>
    import PublicAppLayout from './../Layouts/PublicAppLayout'

    export default {
        components: {
            PublicAppLayout,
        },
        props: {
            
            company: Object,
            responses: Array
        },
        data() {
            return {
             
            }
        },
        methods: {
            doFilterIndustry(id) {
                if(this.filterIndustry == id) {
                    this.filterIndustry = null;
                }
                else {
                    this.filterIndustry = id;
                    return;
                }
            }
        }
    }
</script>
