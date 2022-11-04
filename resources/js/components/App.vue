<template>
    <div id="app">
        <navigation></navigation>
        <div class="py-8">
            <router-view></router-view>
        </div>
        
    </div>
</template>
<script>
    
    import navigation from './Navigation'
    
    export default {
        components: { navigation },
        
    }
</script>