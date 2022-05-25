<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>
                    <ul>
                        <li v-for="post in laravelData.data" :key="post.id">{{ post.post_title }}</li>
                    </ul>

                    <Pagination :data="laravelData" @pagination-change-page="getResults" />
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import LaravelVuePagination from 'shetabit-laravel-vue-pagination';
    export default {
        components: {
            'Pagination': LaravelVuePagination
        },
        data() {
            return {
                // Our data object that holds the Laravel paginator data
                laravelData: {},
            }
        },

        mounted() {
            // Fetch initial results
            this.getResults();
        },

        methods: {
            // Our method to GET results from a Laravel endpoint
            getResults(page = 1) {
                axios.get('api/users?page=' + page)
                    .then(response => {
                        this.laravelData = response.data;
                    });
            }
        }
    }
</script>
