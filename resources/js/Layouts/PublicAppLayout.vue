<template>
    <div class="min-h-screen bg-white">

        

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
