<template>
   

    
    <div class="max-w-screen-xl mx-20 bg-white shadow sm:rounded-lg flex justify-center flex-1">
      <div class="lg:w-1/2 xl:w-5/12 p-6 sm:p-12">
        
        <div class="mt-12 flex flex-col items-center">
          <h1 class="text-1xl xl:text-2xl font-extrabold">
            Stream-Lab Analytics
          </h1>
          <div class="w-full flex-1 mt-8">
            

            
            <div class="mx-auto max-w-xs">
              
              <div class="p-2 w-full">
                <label for="password">Email</label>
                <input class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2" placeholder="Email" type="email" v-model="form.email" >
            </div>
            <div class="p-2 w-full">
                <label for="password">Password</label>
                <input class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2" placeholder="Password" type="password" v-model="form.password" >
            </div>
              
              <button @click.prevent="loginUser" type="submit"  class="mt-5 tracking-wide font-semibold bg-indigo-500 text-gray-100 w-full py-4 rounded-lg hover:bg-indigo-700 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">
                <svg class="w-6 h-6 -ml-2" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M16 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"></path>
                  <circle cx="8.5" cy="7" r="4"></circle>
                  <path d="M20 8v6M23 11h-6"></path>
                </svg>
                <span class="ml-3">
                  Sign In
                </span>
              </button>
              
            </div>
          </div>
        </div>
      </div>
      <div class="flex-1 bg-indigo-100 text-center hidden lg:flex">
          <img src="../../../public/img/dashboard-check.svg" class="m-12 xl:m-16 bg-no-repeat" />
        
      </div>
    </div>
  

</template>
<script>

import { storeAuth }  from '../store';

export default {
    data() {
        return {
            form: {
                email: '',
                password: ''
            },
            errors: []
        }
    },
    methods: {
        loginUser() {
            
               let loader = this.$loading.show();

               axios.post('/api/login', this.form).then((response) => {
                
              
                storeAuth.authenticated = true; 
                localStorage.setItem('auth',true); 
                loader.hide();              
                //store.User.fullname = response.data.firstName +' '+ response.data.lastName;
                this.$router.push({ name: "Dashboard" });
              }).catch((error) => {
                //loader.hide(); 
                this.errors = error.response.data.errors;
            })

            
        }
    }
}
</script>