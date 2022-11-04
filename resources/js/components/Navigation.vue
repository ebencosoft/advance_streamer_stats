<template>
    <nav  class="bg-gray-700">
     <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
          <div class="flex-shrink-0">
            <img class="w-12" src="../../../public/img/streamerlogo.png" alt="Your Company">
          </div>
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4"> 
                <router-link to="/dashboard" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium" v-if="authenticated">Dashboard</router-link>
                <router-link to="/plan" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium" v-if="authenticated">Manage Subscription</router-link>

            </div>
          </div>
        </div>
        <div class="hidden md:block">
          <div class="ml-4 flex items-center md:ml-6">
        <!--   <a href="/login" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium mx-5">Login</a>
          <a href="/register" class="bg-blue-500 text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Register</a> -->
          <router-link class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium mx-5" to="/login" v-if="!authenticated">Login</router-link>
          <router-link class="bg-blue-500 text-white px-3 py-2 rounded-md text-sm font-medium" to="/register" v-if="!authenticated">Register</router-link>  
          <router-link to="/logout" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium" v-if="authenticated">Sign-Out</router-link> 
        </div>
        </div>       
      </div>
    </div> 
      
  </nav>
  
</template>
<script>

import { storeAuth, mutations  } from "../store";
export default {
 
  computed: {
    authenticated() {
      return storeAuth.authenticated;
    },
   
  },
  methods: {
    setAuthenticated: mutations.setAuthenticated
    }
  
};


</script>