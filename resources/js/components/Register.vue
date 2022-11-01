<template>
     <!--  <div class="flex flex-wrap w-full justify-center items-center pt-56">
        <div class="flex flex-wrap max-w-xl">
            <div class="p-2 text-2xl text-gray-800 font-semibold"><h1>Register an account</h1></div>
            <div class="p-2 w-full">
                <label class="w-full" for="name">Name</label>
                <span class="w-full text-red-500" v-if="errors.name">{{errors.name[0]}}</span>
                <input class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2" placeholder="Name" type="text" v-model="form.name" >
            </div>
            <div class="p-2 w-full">
                <label for="email">Your e-mail</label>
                <input class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2" placeholder="Email" type="email" v-model="form.email">
            </div>
            <div class="p-2 w-full">
                <label for="password">Password</label>
                <input class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2" placeholder="Password" type="password" v-model="form.password" name="password">
            </div>
            <div class="p-2 w-full">
                <label for="confirm_password">Confirm Password</label>
                <input class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2" placeholder="Confirm Password" type="password" v-model="form.password_confirmation" name="password_confirmation">
            </div>
            <div class="p-2 w-full mt-4">
                <button @click.prevent="saveForm" type="submit" class="flex text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Register</button>
            </div>
        </div> 
    </div> -->

    <div class="max-w-screen-xl mx-20 bg-white shadow sm:rounded-lg flex justify-center flex-1">
        <div class="flex-1 bg-indigo-100 text-center hidden lg:flex">
          <img src="../../../public/img/dashboard-meet.svg" class="m-12 xl:m-16 bg-no-repeat" />
        
      </div>
        <div class="lg:w-1/2 xl:w-5/12 p-6 sm:p-12">
        
        <div class=" flex flex-col items-center">
            <div class="p-2 text-2xl text-gray-800 font-semibold"><h1>Register an account</h1></div>
          <div class="w-full flex-1">
            

            
            <div class="mx-auto max-w-xs">
                
            <div class="p-1 w-full">
                <label class="w-full" for="name">Name</label>
                <span class="w-full text-red-500" v-if="errors.name">{{errors.name[0]}}</span>
                <input class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2" placeholder="Name" type="text" v-model="form.name" >
            </div>
            <div class="p-1 w-full">
                <label for="email">Your e-mail</label>
                <input class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2" placeholder="Email" type="email" v-model="form.email">
            </div>
            <div class="p-1 w-full">
                <label for="password">Password</label>
                <input class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2" placeholder="Password" type="password" v-model="form.password" name="password">
            </div>
            <div class="p-1 w-full">
                <label for="confirm_password">Confirm Password</label>
                <input class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2" placeholder="Confirm Password" type="password" v-model="form.password_confirmation" name="password_confirmation">
            </div>
              <button @click.prevent="saveForm" type="submit"  class="mt-5 tracking-wide font-semibold bg-indigo-500 text-gray-100 w-full py-4 rounded-lg hover:bg-indigo-700 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">
                <svg class="w-6 h-6 -ml-2" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M16 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"></path>
                  <circle cx="8.5" cy="7" r="4"></circle>
                  <path d="M20 8v6M23 11h-6"></path>
                </svg>
                <span class="ml-3">
                  Sign Up
                </span>
              </button>
              
            </div>
          </div>
        </div>
      </div>
      
    </div>
</template>
<script>
export default {
    data(){
        return{
            form:{
                name: '',
                email: '',
                password:'',
                password_confirmation:''
            },
            errors:[]
        }
    },
    methods:{
        saveForm(){
            axios.post('/api/register', this.form).then(() =>{
                //console.log('saved');
                //this.$swal('Stream Stat Account', 'Account created successful', 'OK').then(this.$router.push({ path: 'login'}));
                this.$swal({ title: "Stream Stat Account",
                    text: "Account created successful",
                    type: "success"}).then(okay => {
                    if (okay) {
                        this.$router.push({ path: 'login'})
                    }
                    });
            
            
            }).catch((error) =>{
                this.errors = error.response.data.errors;
            })
        }
    }
}
</script>