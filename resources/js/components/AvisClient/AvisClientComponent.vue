<template>


            <!-- start list -->
<div class="">
            <!-- end list -->
<div v-for="avisclient in avisclients" :key="avisclient.id" class="list-group">
    
    <a href="#" class="list-group-item list-group-item-action display-3" aria-current="true">
        <div class="d-flex w-100 justify-content-between">
        <h5 class="mb-1">{{ avisclient.nomClient }}</h5>
        <small>ville de client</small>
        </div>
        <!-- <p class="mb-1">{{ avisclient.imageProduit }}</p> -->
        <small>{{ avisclient.commentaire }}.</small>
    </a>

</div>
 </div>           
</template>

<script>
    export default {
                data() {
            return {
                avisclients: []
                // image: ''               
            }
        },
        created() {
            this.axios
                .get('http://127.0.0.1:8000/api/avisClient')
                .then(response => {
                    this.avisclients = response.data;
                });
        },
       /* methods:{
            getImage(){
                return "" + this.image;
            }
        },*/
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
