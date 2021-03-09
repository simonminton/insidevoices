<template>
    <public-app-layout>
        <div class="bg-green">
            <div class="container mx-auto flex-row flex-wrap flex pt-4 px-8 md:px-0">
                <div class="w-full h-full items-center pt-4 md:pt-12 xl:pt-32 xl:pr-12 pb-4 md:pb-12 xl:pb-32">
                    <h1 class="font-title text-6xl md:text-7xl mb-4 text-white font-semibold leading-tight tracking-wide">Workplace culture matters</h1>
                    <div class="leading-loose">
                        <div class="w-full xl:w-1/2 flex flex-row">
                        <input placeholder="Search for a company" class="bg-white px-3 md:px-4 rounded-l-md h-12 md:h-16 text-base md:text-lg w-3/4 md:w-4/5">
                        <button class="w-1/4 md:w-1/5 rounded-r-md  text-dark-grey font-bold text-base md:text-lg bg-light-green">Search</button>
                    </div>
                    </div>
                </div>
            </div>
            <div class="bg-light-grey  relative flex flex-col w-full pt-12 min-h-screen">
                <div class="container mx-auto w-full flex flex-row relative">
                    <div class="w-1/5 sticky top-0 pr-4">
                        <div v-for="industry in industries">
                            <a @click="doFilterIndustry(industry.id)" class="bg-white text-dark-grey w-full text-lg flex rounded-md mb-4 py-3 px-6 cursor-pointer" v-bind:class="[{'bg-light-green font-bold': filterIndustry == industry.id }]">{{ industry.name }}</a>
                        </div>
                        
                    </div>
                    <div class="w-4/5 pl-8 pb-12 flex flex-row flex-wrap">
                        <div v-for="company in companies" class="w-full lg:w-1/2 xl:w-1/3 px-2 mb-4 flex" v-bind:class="[{ 'hidden' : filterIndustry != null && filterIndustry != company.industry.id }]">
                                <inertia-link class="bg-white p-6 w-full flex flex-row flex-wrap shadow-md rounded-md" :href="'/companies/'+company.id">
                                    <div class="w-1/3 pb-16">
                                        <div v-if="!company.logo" class="flex w-20 h-20 justify-center items-center text-white bg-black"></div>
                                        <div v-if="company.logo" class="flex w-20 h-20 justify-center items-center text-white"><img :src="'/storage/'+company.logo" class="w-full " /></div>
                                    </div>
                                    <div class="w-2/3">
                                        <h4 class="text-3xl pl-4 font-bold font-title">{{ company.name }}</h4>
                                    </div>
                                    <div class="flex-1 text-lg" v-html="company.description">
                                    </div>
                                    <div class="text-light-green text-3xl leading-none">
                                        &rarr;
                                    </div>
                                </inertia-link>
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
            industries: Array,
            companies: Array,
        },
        data() {
            return {
                filterIndustry: null
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
