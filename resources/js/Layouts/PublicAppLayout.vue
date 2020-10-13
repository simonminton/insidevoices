<template>
    <div class="min-h-screen bg-gray-100">

        <!-- Page Heading -->
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <div class="flex">
                    <div class="w-1/4">
                        Inside Voices
                    </div>
                    <div class="w-3/4 flex justify-end">
                        <inertia-link class="px-4" :href="route('companies.public')">
                            Companies
                        </inertia-link>
                        <inertia-link class="px-4" :href="route('experience.public')">
                            Your Experience
                        </inertia-link>
                    </div>
                </div>
            </div>
        </header>

        <!-- Page Content -->
        <main>
            <slot></slot>
        </main>

        <!-- Modal Portal -->
        <portal-target name="modal" multiple>
        </portal-target>
    </div>
</template>

<script>
   
    export default {
        components: {
        },

        data() {
            return {
                showingNavigationDropdown: false,
            }
        },

        methods: {
        },

        computed: {
            path() {
                return window.location.pathname
            }
        }
    }
</script>
