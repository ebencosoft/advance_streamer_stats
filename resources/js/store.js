import Vue from "vue";

export const  storeAuth = Vue.observable({
    authenticated: localStorage.getItem('auth') ?? false
});
export const mutations = {
    setAuthenticated(authenticated) {
        storeAuth.authenticated = authenticated;
    }
  };


