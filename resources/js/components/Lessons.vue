<template>
    
    <div class="container text-center">
        <h1 class="text-center">
            <button class="btn btn-primary" @click="createNewLesson()">
                Create new lesson
            </button>
        </h1>
        <ul class="list-group">
            <li class="list-group-item" v-for="lesson in formattedLessons" v-bind="lesson">
                {{lesson.title}}
            </li>
        </ul>
        <create-lesson></create-lesson>
    </div>
</template>

<script>
export default {
    props: ['default_lessons'],
    components: {
        "create-lesson": require('./children/CreateLesson.vue')
    },
    data(){
        return {
            lessons: this.default_lessons
        }
    },
    computed: {
        formattedLessons(){
            return JSON.parse(this.lessons)
        }
    },
    methods: {
        createNewLesson(){
            this.$emit('create_new_lesson')
        }
    }
}
</script>
