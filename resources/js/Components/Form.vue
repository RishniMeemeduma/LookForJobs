<template>
    <div>
        <div class="card">
            <div class="card-header">
                Type your expertise :
            </div>
            <div class="card-body">
                <form  @submit.prevent="questionAnswer">
                     <input ref="input" class="form-control" autofocus v-model="question"/> 
               </form>
            </div>
        </div>
        <results :question="question" ref="results"></results>
    </div>
</template>
<script>
    import Results from '../Components/Results.vue';

export default {
    components:{
        Results
    },
    data() {
        return {
            question: ''
        }
    },
    methods:{ 
        questionAnswer(){
            this.$refs['results'].getResults();
        }
    }
}
</script>