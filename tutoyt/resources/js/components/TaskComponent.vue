<template>
    <div class="container">
        <ul class="list-group">
            <li class="list-group item" v-for="task in tasks" :key="task.id">
                <a href="#"> {{ task.name }} </a> 
            </li>
        </ul>
    </div>
</template>

<script>
    export default {

        data(){
            return{
                tasks:{}
            }
        },

        created(){
            axios.get('http://127.0.0.1:8000/tasksList')
            .then(response => this.tasks = response.data)
            .catch(error => console.log(error));
        },

        mounted() {
            console.log('Component mounted.')
        }
    }
</script>