<template>


   
     <form @submit.prevent="LoginData" action="{{ route('login') }} method="POST">
     
        <label>Email</label>
        <input type="email" v-model="user.email"  placeholder="Email">

        <label>Password</label>
        <input type="password" v-model="user.password" placeholder="Password">

        <button type="submit">Login</button>
     </form>


</template>
   
<script>
       import Vue from 'vue';
       import axios from 'axios';
   
        Vue.use(axios)
        export default {
        name: 'Registation',
        data () {
            return {
            result: {},
                student:{
                        email: '',
                        password: ''
                }
            }
        },
        created() { 
        },
        mounted() {
                console.log("...........");
            },
        methods: {
                LoginData()
                {
                axios.post("http://127.0.0.1:8000/api/login", this.user)
                .then(
                    ({data})=>{
                    console.log(data);
                    try {
                    if (data.status === true) {
                            alert("Login Successfully"); 
                            this.$router.push({ name: 'Dashboard' })
                            } else {
                                alert("Login failed")
                            }

                            } catch (err) {
                            alert("Error");
                            }    
                    }
                )
                }
            }
        }
</script>
     