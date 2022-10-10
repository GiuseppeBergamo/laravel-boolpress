<template>
    <div id="home-page">
        <PostSection></PostSection>
    </div>
</template>

<script>
import PostSection from '../posts/PostSection.vue';
export default {
    name: 'HomePage',
    components: {
        PostSection
    }
}
</script>