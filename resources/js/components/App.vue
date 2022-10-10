<template>
    <div>
        <AppHeader></AppHeader>
        <div class="container">
            <router-view></router-view>
        </div>
    </div>
</template>

<script>

import AppHeader from './AppHeader.vue';

export default {
    name: 'App',
    components: {
        AppHeader,
    
    }
};
</script>