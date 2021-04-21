<template>


            <!-- start list -->
<div class=" scrollbar-spring-warmth">
    <ul v-for="question in questions" :key="question.id" class=" list-group display-4">
        <!-- <router-link to="/reponse"> -->
            <li class="list-group-item list-group-item-light">{{ question.question }}</li>
             <button type="button" class="btn btn-secondary" @click="show = !show">afficher reponse</button>
             <li v-if="show" class="list-group-item list-group-item-info">{{ question.reponse }}</li>
            
        <!-- </router-link> -->
    
    <!-- <li class="list-group-item list-group-item-dark">A simple dark list group item</li> -->
    </ul>
</div>
            <!-- end list -->
            
</template>

<script>
    export default {
                data() {
            return {
                questions: [],
                show : false
            }
        },
        created() {
            this.axios
                .get('http://127.0.0.1:8000/api/question')
                .then(response => {
                    this.questions = response.data;
                });
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
<style >
            .appclasse {
                background-color: powderblue;
                background-attachment: inherit;
                padding: 0px;
                margin: 0px;
               width: 440px;
               height: 712px;
               }
</style>