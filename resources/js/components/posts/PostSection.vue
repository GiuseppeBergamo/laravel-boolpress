<template>
    <section id="post-section">
        <h2>Posts</h2>
        <div v-if="posts.length">
            <PostCard v-for="post in posts" :key="post.id" :post="post"></PostCard>
        </div>
        <h3 v-else>Nessun Post</h3>
    </section>
</template>

<script>
import PostCard from './PostCard.vue';
import Axios from 'axios';

export default {
    name: 'PostSection',
    components: {
        PostCard
    },
    data() {
       return {
        posts: []
       };
    },
    methods: {
        fetchPosts(){
            axios.get('http://localhost:8000/api/posts')
            .then((res) => {
                this.posts = res.data;
            })
            .catch((err) => {
                console.error(err);
            })
            .then(() => {
                console.info('Chiamata terminata');
            });
        }
    },
    mounted(){
        this.fetchPosts();
    },
}
</script>