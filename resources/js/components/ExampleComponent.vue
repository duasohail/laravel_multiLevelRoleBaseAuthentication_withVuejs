<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <form @submit.prevent="createItem()">
                        <input type="text" name="name" placeholder="Enter name" v-model="newItem.name"><br><br>
                        <input type="email" name="email" placeholder="Enter email" v-model="newItem.email"><br><br>
                        <input type="password" name="password" placeholder="Enter password" v-model="newItem.password"><br><br>
                        <button type="submit" >Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios'; 
    export default {

         data:()=>({
             newItem: {
            'name': '',
            'email': 'email',
            'password': 'password'
        }

         }),
    methods: {
        createItem() {
            var items = this.newItem;
            console.log(items);

            axios.post('/store', items).then(function(response) {

            })
        }

    },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
