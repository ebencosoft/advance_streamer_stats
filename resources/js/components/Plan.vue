<template>
    
	
    <!-- Pricing -->
    <div class="max-w-5xl mx-auto" >
               
        <!-- Pricing tabs -->
        <div class="grid grid-cols-12 gap-6">
            <!-- Tab 1 -->
            <div class="relative col-span-full md:col-span-4 bg-white shadow-md rounded-sm border border-gray-200">
                <div class="absolute top-0 left-0 right-0 h-0.5 bg-green-500" aria-hidden="true"></div>
                <div class="px-5 pt-5 pb-6 border-b border-gray-200">
                    <header class="flex items-center mb-2">
                        <div class="w-6 h-6 rounded-full flex-shrink-0 bg-gradient-to-tr from-green-500 to-green-300 mr-3">
                            <svg class="w-6 h-6 fill-current text-white" viewBox="0 0 24 24">
                                <path d="M12 17a.833.833 0 01-.833-.833 3.333 3.333 0 00-3.334-3.334.833.833 0 110-1.666 3.333 3.333 0 003.334-3.334.833.833 0 111.666 0 3.333 3.333 0 003.334 3.334.833.833 0 110 1.666 3.333 3.333 0 00-3.334 3.334c0 .46-.373.833-.833.833z" />
                            </svg>
                        </div>
                        <h3 class="text-lg text-gray-800 font-semibold">{{ plans[0].name }}</h3>
                    </header>
                    <div class="text-sm mb-2">Ideal for individuals that need a custom solution with custom tools.</div>
                    <!-- Price -->
                    <div class="text-gray-800 font-bold mb-4">
                        <span class="text-2xl">$</span><span class="text-3xl" x-text="annual ? '14' : '19'">{{ plans[0].cost }}</span><span class="text-gray-500 font-medium text-sm">/mo</span>
                    </div>
                    <!-- CTA -->
                    <button v-if="subscriptiondata.subscription_id !=='' && subscriptiondata.braintree_plan === plans[0].braintree_plan" @click.prevent="canplan" class="bg-red-500 font-medium text-sm inline-flex items-center justify-center px-3 py-2 border border-transparent rounded leading-5 shadow-sm transition duration-150 ease-in-out focus:outline-none focus-visible:ring-2 hover:bg-indigo-600 text-white w-full">Cancel</button>
                    <button v-else @click.prevent="pushPlan(0)" class="font-medium text-sm inline-flex items-center justify-center px-3 py-2 border border-transparent rounded leading-5 shadow-sm transition duration-150 ease-in-out bg-indigo-500 focus:outline-none focus-visible:ring-2 hover:bg-indigo-600 text-white w-full">Subscribe</button>
                </div>
                <div class="px-5 pt-4 pb-5">
                    <div class="text-xs text-gray-800 font-semibold uppercase mb-4">What's included</div>
                    <!-- List -->
                    <ul>
                        <li class="flex items-center py-1">
                            <svg class="w-3 h-3 flex-shrink-0 fill-current text-green-500 mr-2" viewBox="0 0 12 12">
                                <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z" />
                            </svg>
                            <div class="text-sm">Lorem ipsum dolor sit amet</div>
                        </li>
                        <li class="flex items-center py-1">
                            <svg class="w-3 h-3 flex-shrink-0 fill-current text-green-500 mr-2" viewBox="0 0 12 12">
                                <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z" />
                            </svg>
                            <div class="text-sm">Quis nostrud exercitation</div>
                        </li>
                        <li class="flex items-center py-1">
                            <svg class="w-3 h-3 flex-shrink-0 fill-current text-green-500 mr-2" viewBox="0 0 12 12">
                                <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z" />
                            </svg>
                            <div class="text-sm">Lorem ipsum dolor sit amet</div>
                        </li>
                        <li class="flex items-center py-1">
                            <svg class="w-3 h-3 flex-shrink-0 fill-current text-green-500 mr-2" viewBox="0 0 12 12">
                                <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z" />
                            </svg>
                            <div class="text-sm">Quis nostrud exercitation</div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Tab 2 -->
            <div class="relative col-span-full md:col-span-4 bg-white shadow-md rounded-sm border border-gray-200">
                <div class="absolute top-0 left-0 right-0 h-0.5 bg-blue-500" aria-hidden="true"></div>
                <div class="px-5 pt-5 pb-6 border-b border-gray-200">
                    <header class="flex items-center mb-2">
                        <div class="w-6 h-6 rounded-full flex-shrink-0 bg-gradient-to-tr from-blue-500 to-blue-300 mr-3">
                            <svg class="w-6 h-6 fill-current text-white" viewBox="0 0 24 24">
                                <path d="M12 17a.833.833 0 01-.833-.833 3.333 3.333 0 00-3.334-3.334.833.833 0 110-1.666 3.333 3.333 0 003.334-3.334.833.833 0 111.666 0 3.333 3.333 0 003.334 3.334.833.833 0 110 1.666 3.333 3.333 0 00-3.334 3.334c0 .46-.373.833-.833.833z" />
                            </svg>
                        </div>
                        <h3 class="text-lg text-gray-800 font-semibold">{{ plans[1].name }}</h3>
                    </header>
                    <div class="text-sm mb-2">Ideal for individuals that need a custom solution with custom tools.</div>
                    <!-- Price -->
                    <div class="text-gray-800 font-bold mb-4">
                        <span class="text-2xl">$</span><span class="text-3xl" x-text="annual ? '34' : '39'">{{ plans[1].cost }}</span><span class="text-gray-500 font-medium text-sm">/mo</span>
                    </div>
                    <!-- CTA -->
                    <button v-if="subscriptiondata.subscription_id !=='' && subscriptiondata.braintree_plan == plans[1].braintree_plan" @click.prevent="canplan" class=" bg-red-500 font-medium text-sm inline-flex items-center justify-center px-3 py-2 border border-transparent rounded leading-5 shadow-sm transition duration-150 ease-in-out focus:outline-none focus-visible:ring-2 hover:bg-indigo-600 text-white w-full">Cancel</button>
                    <button v-else @click.prevent="pushPlan(1)" class="font-medium text-sm inline-flex items-center justify-center px-3 py-2 border border-transparent rounded leading-5 shadow-sm transition duration-150 ease-in-out bg-indigo-500 focus:outline-none focus-visible:ring-2 hover:bg-indigo-600 text-white w-full">Subscribe</button>
                </div>
                <div class="px-5 pt-4 pb-5">
                    <div class="text-xs text-gray-800 font-semibold uppercase mb-4">What's included</div>
                    <!-- List -->
                    <ul>
                        <li class="flex items-center py-1">
                            <svg class="w-3 h-3 flex-shrink-0 fill-current text-green-500 mr-2" viewBox="0 0 12 12">
                                <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z" />
                            </svg>
                            <div class="text-sm">Lorem ipsum dolor sit amet</div>
                        </li>
                        <li class="flex items-center py-1">
                            <svg class="w-3 h-3 flex-shrink-0 fill-current text-green-500 mr-2" viewBox="0 0 12 12">
                                <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z" />
                            </svg>
                            <div class="text-sm">Quis nostrud exercitation</div>
                        </li>
                        <li class="flex items-center py-1">
                            <svg class="w-3 h-3 flex-shrink-0 fill-current text-green-500 mr-2" viewBox="0 0 12 12">
                                <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z" />
                            </svg>
                            <div class="text-sm">Lorem ipsum dolor sit amet</div>
                        </li>
                        <li class="flex items-center py-1">
                            <svg class="w-3 h-3 flex-shrink-0 fill-current text-green-500 mr-2" viewBox="0 0 12 12">
                                <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z" />
                            </svg>
                            <div class="text-sm">Quis nostrud exercitation</div>
                        </li>
                        <li class="flex items-center py-1">
                            <svg class="w-3 h-3 flex-shrink-0 fill-current text-green-500 mr-2" viewBox="0 0 12 12">
                                <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z" />
                            </svg>
                            <div class="text-sm">Lorem ipsum dolor sit amet</div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Tab 3 -->
            <div class="relative col-span-full md:col-span-4 bg-white shadow-md rounded-sm border border-gray-200">
                <div class="absolute top-0 left-0 right-0 h-0.5 bg-indigo-500" aria-hidden="true"></div>
                <div class="px-5 pt-5 pb-6 border-b border-gray-200">
                    <header class="flex items-center mb-2">
                        <div class="w-6 h-6 rounded-full flex-shrink-0 bg-gradient-to-tr from-indigo-500 to-indigo-300 mr-3">
                            <svg class="w-6 h-6 fill-current text-white" viewBox="0 0 24 24">
                                <path d="M12 17a.833.833 0 01-.833-.833 3.333 3.333 0 00-3.334-3.334.833.833 0 110-1.666 3.333 3.333 0 003.334-3.334.833.833 0 111.666 0 3.333 3.333 0 003.334 3.334.833.833 0 110 1.666 3.333 3.333 0 00-3.334 3.334c0 .46-.373.833-.833.833z" />
                            </svg>
                        </div>
                        <h3 class="text-lg text-gray-800 font-semibold">{{ plans[2].name }}</h3>
                    </header>
                    <div class="text-sm mb-2">Ideal for individuals that need a custom solution with custom tools.</div>
                    <!-- Price -->
                    <div class="text-gray-800 font-bold mb-4">
                        <span class="text-2xl">$</span><span class="text-3xl" x-text="annual ? '74' : '79'">{{ plans[2].cost }}</span><span class="text-gray-500 font-medium text-sm">/yr</span>
                    </div>
                    <!-- CTA -->
                    <button v-if="subscriptiondata.subscription_id !=='' && subscriptiondata.braintree_plan === plans[2].braintree_plan" @click.prevent="cancelsubscribe(subscriptiondata.subscription_id)" class="bg-red-500 font-medium text-sm inline-flex items-center justify-center px-3 py-2 border border-transparent rounded leading-5 shadow-sm transition duration-150 ease-in-out  focus:outline-none focus-visible:ring-2 text-white w-full">Cancel</button>
                    <button v-else @click.prevent="pushPlan(2)" class="font-medium text-sm inline-flex items-center justify-center px-3 py-2 border border-transparent rounded leading-5 shadow-sm transition duration-150 ease-in-out bg-indigo-500 focus:outline-none focus-visible:ring-2 hover:bg-indigo-600 text-white w-full">Subscribe</button>
                </div>
                <div class="px-5 pt-4 pb-5">
                    <div class="text-xs text-gray-800 font-semibold uppercase mb-4">What's included</div>
                    <!-- List -->
                    <ul>
                        <li class="flex items-center py-1">
                            <svg class="w-3 h-3 flex-shrink-0 fill-current text-green-500 mr-2" viewBox="0 0 12 12">
                                <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z" />
                            </svg>
                            <div class="text-sm">Lorem ipsum dolor sit amet</div>
                        </li>
                        <li class="flex items-center py-1">
                            <svg class="w-3 h-3 flex-shrink-0 fill-current text-green-500 mr-2" viewBox="0 0 12 12">
                                <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z" />
                            </svg>
                            <div class="text-sm">Quis nostrud exercitation</div>
                        </li>
                        <li class="flex items-center py-1">
                            <svg class="w-3 h-3 flex-shrink-0 fill-current text-green-500 mr-2" viewBox="0 0 12 12">
                                <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z" />
                            </svg>
                            <div class="text-sm">Lorem ipsum dolor sit amet</div>
                        </li>
                        <li class="flex items-center py-1">
                            <svg class="w-3 h-3 flex-shrink-0 fill-current text-green-500 mr-2" viewBox="0 0 12 12">
                                <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z" />
                            </svg>
                            <div class="text-sm">Quis nostrud exercitation</div>
                        </li>
                        <li class="flex items-center py-1">
                            <svg class="w-3 h-3 flex-shrink-0 fill-current text-green-500 mr-2" viewBox="0 0 12 12">
                                <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z" />
                            </svg>
                            <div class="text-sm">Lorem ipsum dolor sit amet</div>
                        </li>
                        <li class="flex items-center py-1">
                            <svg class="w-3 h-3 flex-shrink-0 fill-current text-green-500 mr-2" viewBox="0 0 12 12">
                                <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z" />
                            </svg>
                            <div class="text-sm">Quis nostrud exercitation</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


<!-- More components -->

</template>
<script>
export default {
data() {
    return {
        plans: [],
        subscriptiondata: {
            subscription_id: '',
            braintree_plan: ''
        }
    }
},
mounted() {
    this.fetchPosts()
    this.loadsubscribe()
},
methods: {
    fetchPosts() {
        axios.get('/api/loadplan')
        .then(response => this.plans = response.data)
        .catch(error => console.log(error))
    },
    loadsubscribe(){
                axios.get('/api/loadsubscribe')
                .then(response => this.subscriptiondata = response.data[0])
                .catch(error => console.log(error))
            },
    pushPlan(plancount){
        this.$router.push({ path: 'subscription', query: { plan: this.plans[plancount].braintree_plan } });
    },
    cancelsubscribe(subscriptionId){
                axios.post('/api/cancelsubscribe', { subscription_id: subscriptionId }).then((response) =>{
					//console.log('saved');
                    
                    if(response.data.success){
                        this.$swal('Subscription','subscription cancel created','success');
                    }else{
                        this.$swal('Subscription','subscription cancellation failed','danger');
                    }
				}).catch((error) =>{
					this.errors = error.response.data.errors;
				})
            }
}
}
</script>