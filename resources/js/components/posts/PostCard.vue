<template>
    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">{{ post.title }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">Pubblicato il: {{ post.created_at }}</h6>
            <p class="card-text">{{ post.content }}</p>
            <a href="#" class="card-link">{{ post.image }}</a>
            <router-link :to="{ name: 'post-detail', params: { id: post.id }}" class="btn btn-primary btn-sm ml-3">Guarda post</router-link>
        </div>
    </div>

</template>

<script>
export default {
    name: 'PostCard',
    props: {
        post: Object,
    }
}
</script>

<style>

</style>