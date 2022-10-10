<template>
    <div id="post-detail" class="d-flex align-items-center justify-content-center">
        <div class="card mb-4" style="width: 48rem;">
            <img v-if="post.image" :src="post.image" class="card-img-top img-fluid" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ post.title }}</h5>
                <p class="card-text">{{ post.content }}</p>
                <router-link :to="{ name: 'home'}" class="btn btn-secondary">Torna indietro</router-link>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'PostDetailPage',
    data() {
        return {
            post: null,
        };
    },
    methods: {
        fetchPost(){
            axios.get('http://localhost:8000/api/posts/' + this.$route.params.id)
            .then(res => {
                this.post = res.data;
            }).catch(err => {
                console.error(err);
            }).then(() => {

                console.log('chiamata terminata');
            })
        }
    }, 
    mounted() {
        this.fetchPost();
    }
}
</script>