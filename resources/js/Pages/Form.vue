<template>
    <public-app-layout>
    <div class="py-12">
            <div class="container w-full  mx-auto sm:px-6 lg:px-8">
                <h2 class="font-semibold text-6xl text-gray-800 leading-tight">
                    Tell us about your experience
                </h2>
                <p class="text-2xl mt-4 w-2/3">We have designed InsideVoices to be a safe, anonymous space to be honest about your experience of working with your company. We don't collect identifying information, and every question is optional. If you aren't comfortable answering, just click skip.</p>
            </div>
            <form @submit.prevent="submit"  enctype="multipart/form-data">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-4 ">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
                        <h3 class="text-2xl font-semibold mb-2">The basics.</h3>
                        <label class=" text-gray-700 rounded-md py-2 text-lg mr-4" for="company_name_select">Your Company</label>
                        <select class="bg-blue-100 text-gray-700  rounded-md px-3 py-2 text-lg" name="company_name_select" v-model="form['company_name']">
                            <option value="0" selected>Pick a company</option>
                            <option value="not-on-list" >Not on list</option>
                            <option v-for="company in companies" :value="company.id">{{company.name}}</option>
                        </select>
                        <input v-if="form['company_name'] == 'not-on-list'" class="ml-3 bg-blue-100 text-gray-700 rounded-md px-3 py-2 text-lg" type="text" name="company_name" placeholder="Enter company name" v-model="form['company_new_name']" >
                    </div>
                </div>
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-4 ">
                    <div v-for="question in questions[0].questions">
                        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4 flex flex-row flex-wrap" v-if="question.parent_id == null">

                            <label class="w-full font-semibold text-gray-700 rounded-md py-2 text-lg mr-4" :for="question.id">
                                {{ question.question_text }}
                            </label>

                            <input v-if="question.question_type.name == 'text'" class="w-full md:w-1/2 bg-blue-100 text-gray-700 rounded-md px-3 py-2 text-lg" type="text" :name="question.id" v-model="form[ question.id ]">

                            <textarea v-if="question.question_type.name == 'textarea'" class="w-full md:w-1/2 bg-blue-100 text-gray-700 rounded-md px-3 py-2 text-lg" type="text" :name="question.id" v-model="form[ question.id ]"></textarea>

                            <select v-if="question.question_type.name == 'select'" class="ml-3 bg-blue-100 text-gray-700 rounded-md px-3 py-2 text-lg" type="text" :name="question.id" v-model="form[ question.id ]">
                                <option v-for="value in question.options" :value="value">{{ value }}</option>
                            </select>
                            
                            <fieldset v-if="question.question_type.name == 'checkboxes'">
                                <label v-for="value in question.options">
                                    <input type="checkbox" :name="question.id+'[]'" :value="value" v-model="form[ question.id ]"/>
                                        {{ value }}
                                </label>
                            </fieldset>

                            <fieldset v-if="question.question_type.name == 'radio'">
                                <label v-for="value in question.options">
                                    <input type="radio" :name="question.id" :value="value"  v-model="form[ question.id ]"/>
                                    {{ value }}
                                </label>
                            </fieldset>

                            <div class="mt-6 w-full" v-if="question.children.length>0">
                                <div class="flex flex-row flex-wrap" v-for="question in question.children">
                                    <label class="w-full text-gray-700 rounded-md py-2 text-lg mr-4" :for="question.id">
                                        {{ question.question_text }}
                                    </label>
                                    <input v-if="question.question_type.name == 'text'" class="w-full md:w-1/2 bg-blue-100 text-gray-700 rounded-md px-3 py-2 text-lg" type="text" :name="question.id" v-model="form[ question.id ]">

                                    <textarea v-if="question.question_type.name == 'textarea'" class="w-full md:w-1/2 bg-blue-100 text-gray-700 rounded-md px-3 py-2 text-lg" type="text" :name="question.id" v-model="form[ question.id ]"></textarea>

                                    <select v-if="question.question_type.name == 'select'" class=" bg-blue-100 text-gray-700 rounded-md px-3 py-2 text-lg" type="text" :name="question.id" v-model="form[ question.id ]">
                                        <option v-for="value in question.options" :value="value">{{ value }}</option>
                                    </select>
                                    
                                    <fieldset v-if="question.question_type.name == 'checkboxes'">
                                        <label v-for="value in question.options">
                                            <input type="checkbox" :name="question.id+'[]'" :value="value"  v-model="form[ question.id ]"/>
                                                {{ value }}
                                        </label>
                                    </fieldset>

                                    <fieldset v-if="question.question_type.name == 'radio'">
                                        <label v-for="value in question.options">
                                            <input type="radio" :name="question.id" :value="value"  v-model="form[ question.id ]"/>
                                            {{ value }}
                                        </label>
                                    </fieldset>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container w-full mx-auto sm:px-6 lg:px-8 flex mt-4 justify-end">
                    <button class="bg-teal-500 rounded-md text-white px-3 py-2" type="submit">Submit</button>
                </div>
            </form>
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
            questions: Array
        },
          remember: 'form',
        data() {
            return {
                company_name: "0",
                form: [],
                submission: {
                    data: []
                } 
            }
        },
        watch: {
            form: function (newForm, oldForm) {
                
                this.submission.data = this.form;
            },
        },
        methods: {
            submit() {
                this.$forceUpdate()
                 this.$inertia.post('/your-experience', this.submission, {
                     onStart: () => this.sending = true,
                     onFinish: () => this.sending = false,
                 })
            },
        }
    }
</script>
