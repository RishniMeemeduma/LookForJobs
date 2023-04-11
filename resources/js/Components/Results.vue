<template>
    <div>
        <div class="card">
            <div class="card-header">
                Opportunities :
            </div>
            <div class="card-body">
                {{ question }}
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        props:{
            question:{
                type:String
            }
        },
        data() {
            return {
                url:'/api/v1/question',
                results:{}
            }
        },

        methods:{
            getResults() {
                this.$axios.post(this.url, {'question':this.question})
                .then(data=>{
                    console.log(data);
                })
            }
        }
    }
</script>