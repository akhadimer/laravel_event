<template>
    <div class="container">
        <p id="success"></p>
       <a href="http://"><i @click.prevent="participation" class="fa fa-thumbs-up" aria-hidden="true"></i>({{ totalparticipation }})</a>
    </div>
</template>

<script>
    export default {
        props:['evenement'],
        data(){
            return {
                totalparticipation:'',
            }
        },
        methods:{
            participation(){
                axios.post('/participation/'+this.evenement,{evenement:this.evenement})
                .then(response =>{
                    this.getParticipation()
                    $('#success').html(response.data.message)
                })
                .catch()
            },
            getParticipation(){
                axios.post('/participation',{evenement:this.evenement})
                .then(response =>{
                    console.log(response.data.evenement.participation)
                    this.totalparticipation = response.data.evenement.participation
                })
            }
        },
        mounted() {
            this.getParticipation()
        }
    }
</script> 