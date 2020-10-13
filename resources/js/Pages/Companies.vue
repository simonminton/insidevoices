<template>
    <public-app-layout>
        
            
        

        <div class="py-12">
            <div class="container w-full  mx-auto sm:px-6 lg:px-8">
                <h2 class="font-semibold text-6xl text-gray-800 leading-tight">
                    Companies
                </h2>
                <div class="w-full flex mt-4 flex-row flex-wrap -m-2">
                    <div class="m-2 p-2 h-32 flex justify-center items-center w-full md:w-1/4 bg-white rounded-md shadow-xs" v-for="company in companies">
                        <inertia-link class="px-4 text-xl" :href="'/companies/'+company.id">{{ company.name }}</inertia-link>
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
            companies: Array,
        },
        data() {
            return {
                
            }
        },
    }
</script>
