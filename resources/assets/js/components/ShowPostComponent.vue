<template>
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">{{ post.title }}</div>

                    <div class="card-body">
                        <div class="col-md-12 col-xs-12">
                            <div class="mb-4">
                                <img class="card-img-top" :src="'/imgs/' + post.image" alt="Card image cap" style="width: 300px;margin-right: 15px;display: inline-block;float: left;">

                                <p class="card-text">
                                    {{ post.text }}
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer text-muted">
                        Publié le {{ post.created_at | formatDate}} par
                        <a href="#">{{ post.publisher.name }}</a>
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
                post: {}
            }
        },
        watch: {
            '$route': 'fetchData'
        },
        methods: {
            loadPost() {
                axios.get("api/posts/" + this.$route.params.id).then( data => (this.post = data.data))
                //pick data from controller and push it into posts object
            }
        },

        created() {
            this.loadPost();
        }
    }
</script>
