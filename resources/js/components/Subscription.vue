
<template>



    <form method="POST" id="checkout" class="w-full max-w-xl mx-auto bg-white rounded shadow-xl relative py-4">
        <div class="text-gray-900 font-medium text-xs text-center flex flex-col items-center justify-center">
                <img class="h-20 w-20 rounded-full shadow-xl border-4 border-gray-400" src="https://images.unsplash.com/photo-1523199455310-87b16c0eed11?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" alt="logo">
            <p class="mx-2 my-3 text-lg">
                Customer information
            </p>
            <!--<div class="hidden lg:flex font-medium text-xs flex text-gray-500">
                <div class="mx-2"><a href="/plan" class="font-semibold text-1xl">Plan</a></div>
                <div class="mx-2">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                </div>
                <div class="mx-2">Subscription</div>
                
				
                <div class="mx-2 text-gray-800 font-bold">{{ this.$route.query.plan }}</div>
            </div>-->
        </div>
        <div class="py-2 px-4 md:px-8">

            <div class="bg-gray-200 rounded py-2">

                <div class="rounded-t-lg text-xs text-gray-800 w-full flex items-center justify-between border-b border-gray-300">
                    <span class="block ml-2 font-semibold text-1xl">Credit Card Details</span>
                    <div class="flex">
                        <img class="h-10 w-10 object-contain mr-2" src="https://upload.wikimedia.org/wikipedia/commons/1/16/Former_Visa_%28company%29_logo.svg" alt="Visa">
                        <img class="h-10 w-10 object-contain mr-2" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2a/Mastercard-logo.svg/1280px-Mastercard-logo.svg.png" alt="Master card">
                    </div>
                </div>

                <!-- <div class="mb-1 p-2">
                    <input id="name" name="name" type="text" placeholder="Card name" required class="w-full px-2 py-1 lg:px-4 lg:py-2 text-gray-700 bg-gray-100 text-xs lg:text-sm border border-gray-300 rounded-lg focus:outline-none focus:bg-white">
                </div> -->

                <div class="w-full">
                    <div class="flex my-1 p-2">
                        <input type="text" id="card" required class="w-5/6 border-t border-b border-l border-gray-300 flex-1 text-xs lg:text-sm py-1 lg:py-2 px-2 lg:px-4 bg-gray-100 text-gray-700 rounded-l-lg focus:bg-white focus:outline-none" placeholder="Card number" v-model="form.cardnum">
                        <input type="text" id="month" required maxlength="2" class="w-1/6 border-t border-b border-gray-300 inline-block text-xs lg:text-sm py-1 lg:py-2 px-2 lg:px-4 bg-gray-100 text-gray-700 focus:bg-white focus:outline-none" placeholder="MM" v-model="form.months">
                        <input type="text" id="year" required maxlength="2" class="w-1/6 border-t border-b border-gray-300 inline-block text-xs lg:text-sm py-1 lg:py-2 px-2 lg:px-4 bg-gray-100 text-gray-700 focus:bg-white focus:outline-none" placeholder="YY" v-model="form.years">
                        <input type="text" id="cvc" required maxlength="3" class="w-1/6 border-t border-b border-r border-gray-300 inline-block text-xs lg:text-sm py-1 lg:py-2 px-2 lg:px-4 bg-gray-100 text-gray-700 focus:bg-white rounded-r-lg focus:outline-none" placeholder="CVC" v-model="form.cvc">
                      <input type="hidden" id="plan" v-model="form.plan">
					</div>
                </div>

            </div>
            <div class="mt-4">
                <div class="w-full">
                    <button @click.prevent="pushsubscribe" class="h-auto lg:h-12 text-xs py-1 lg:py-2 px-2 lg-px-4 text-white font-light tracking-wider bg-gray-900 rounded-lg uppercase w-full focus:outline-none focus:shadow-outline" type="submit">Pay Subscription</button>
                </div>
            </div>
        </div>
    </form>


	
</template>
<script>
//import Loading from 'vue-loading-overlay';
//import 'vue-loading-overlay/dist/css/index.css';

export default {
	//props: ['username'],
    data() {
        return {
             form:{
                cardnum:'',
                months: '',
				years: '',
				cvc: '',
				plan: this.$route.query.plan
            }, 
			map: {},
			tokenism : null,
			subscriptiondata: null
			
		}
			
        },
        mounted(){
            this.loadsubscribe()
        },
		methods: {
				
            loadsubscribe(){
                axios.get('/api/loadsubscribe')
                .then(response => this.subscriptiondata = response.data)
                .catch(error => console.log(error))
            },
            pushsubscribe(){

				let loader = this.$loading.show();

				axios.post('/api/pushsubscribe', this.form).then((response) =>{
					
                    loader.hide();

                    if(response.data.success){
                        //this.$swal('Subscription','subscription successfully created','success');
                       
                        this.$swal({ title: "Subscription",
                    text: "subscription successfully created",
                    type: "success"}).then(okay => {
                    if (okay) {
                        this.$router.push({ path: 'dashboard'})
                       }
                    });
                         

                    }else{
                        this.$swal('Subscription','subscription failed','danger');
                    }
				}).catch((error) =>{
                    loader.hide();
                    this.errors = error.response.data.errors;
                    this.$swal('Subscription',this.errors,'danger');
				})
				//this.isLoading = false;
			}
            
		}	
    ,
   
}
</script>