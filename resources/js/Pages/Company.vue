<template>
    <public-app-layout>
        <div class="bg-green">
            <div class="container mx-auto flex-row flex-wrap flex pt-4 px-8 md:px-0">
                <div class="w-full h-full flex flex-row flex-wrap items-center pt-4 md:pt-12 xl:pt-32 xl:pr-12 pb-4 md:pb-12 xl:pb-32">
                    <div v-if="!company.logo" class="flex w-32 h-32 justify-center items-center text-white bg-black"></div>
                    <div v-if="company.logo" class="flex w-32 h-32 justify-center items-center text-white"><img :src="'/storage/'+company.logo" class="w-full " /></div>
                    <div class="pl-8">
                        <h1 class="font-title text-6xl md:text-7xl mb-4 text-white font-semibold leading-tight tracking-wide">{{ company.name }}</h1>
                        <div class="leading-loose text-xl text-white">
                           {{ company.industry.name }}
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
                    <div class="w-4/5 pl-8 pb-12 flex flex-row flex-wrap">
                        <div class="bg-white px-8 py-6 w-full flex flex-row flex-wrap shadow-md rounded-md">
                            <h4 class="w-full text-black font-bold text-4xl font-title">Are people of color well represented in your organization's leadership?</h4>
                            <h5 class="w-full text-black font-semibold text-3xl font-title">Most common answer</h5>
                            <h5 class="w-full text-black font-semibold text-2xl font-title">No, I don't think so</h5>
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
