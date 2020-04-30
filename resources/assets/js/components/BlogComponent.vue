
<template>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">

                <h1 class="my-4">
                    Nos posts
                </h1>

                <!-- Blog Post -->
                <div class="row">
                    <div class="col-md-4 col-xs-6" v-for="post in posts" :key="post.id">
                        <div class="card mb-4">
                            <img class="card-img-top" :src="'/imgs/' + post.image" alt="Card image cap">
                            <div class="card-body">
                                <h2 class="card-title">{{ post.title }}</h2>
                                <p class="card-text">
                                    {{ post.text.substring(0, 150) }}...
                                </p>
                                <a href="#" class="btn btn-primary">Lire plus &rarr;</a>
                            </div>
                            <div class="card-footer text-muted">
                                Publié le {{ post.created_at | formatDate}} par
                                <a href="#">{{ post.publisher.name }}</a>
                                <p v-if="post.categories" style="margin-bottom: 0;">
                                    <strong>Catégories: </strong><span v-for="(cat, key, index) in post.categories"><separator v-if="key !== 0"> | </separator>{{ cat.title }}</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
    export default {
        data() {
            return {
                posts: {}
            }
        },
        methods: {
            loadPosts() {
                axios.get("api/posts").then( data => (this.posts = data.data));
                //pick data from controller and push it into posts object
            }
        },

        created() {
            this.loadPosts();
        }
    }
</script>
