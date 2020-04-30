
<template>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">

                <h1 class="my-4">
                    Nos offres
                </h1>

                <!-- Blog Offres -->
                <div class="row">
                    <div class="col-md-4 col-xs-6" v-for="career in careers" :key="career.id" v-if="career.publisher">
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
                careers: {}
            }
        },
        methods: {
            loadCareers() {
                axios.get("api/careers").then( data => (this.careers = data.data));
                //pick data from controller and push it into posts object
            }
        },

        created() {
            this.loadCareers();
        }
    }
</script>
