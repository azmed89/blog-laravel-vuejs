<template>
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">Accueil</div>

                    <div class="card-body">
                        Le Lorem Ipsum est simplement du faux texte employé dans la composition
                        et la mise en page avant impression. Le Lorem Ipsum est le faux texte
                        standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme
                        assembla ensemble des morceaux de texte pour réaliser un livre spécimen de
                        polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi
                        adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été
                        popularisé dans les années 1960 grâce à la vente de feuilles Letraset
                        contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion
                        dans des applications de mise en page de texte, comme Aldus PageMaker.
                    </div>
                </div>
            </div>

            <div class="col-md-12">

                <h2 class="my-4">
                    Dernières posts
                </h2>

                <!-- Blog Post -->
                <div class="row">
                    <div class="col-md-4 col-xs-6" v-for="post in latestPosts" :key="latestPosts.id">
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

            <div class="col-md-12">

                <h1 class="my-4">
                    Dernières offres
                </h1>

                <!-- Blog Offres -->
                <div class="row">
                    <div class="col-md-4 col-xs-6" v-for="career in latestOffers" :key="career.id" v-if="career.publisher">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h2 class="card-title">{{ career.title }}</h2>
                                <p class="card-text">
                                    {{ career.text }}
                                </p>
                                <a href="#" class="btn btn-primary">Lire plus &rarr;</a>
                            </div>
                            <div class="card-footer text-muted">
                                Publié le {{ career.created_at | formatDate}} par
                                <a href="#">{{ career.publisher.name }}</a>
                                <p v-if="career.sector" style="margin-bottom: 0;">
                                    <strong>Secteur: </strong>{{ career.sector.title }}
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
                latestPosts: {},
                latestOffers: {}
            }
        },
        methods: {
            loadLatestPosts() {
                axios.get("api/last_posts").then( data => (this.latestPosts = data.data))
                //pick data from controller and push it into posts object
            },
            loadLatestOffers() {
                axios.get("api/last_offers").then( data => (this.latestOffers = data.data));
            }
        },

        created() {
            this.loadLatestPosts();
            this.loadLatestOffers();
        }
    }
</script>
