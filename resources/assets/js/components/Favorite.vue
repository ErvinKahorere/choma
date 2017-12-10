<template>
    <span>
        <a href="#" v-if="isFavorited" @click.prevent="unFavorite(card)">
        <!--    <i  class="fa fa-heart fa-3"></i>-->
                  <i class="fa fa-heart mr-1" style="color:#ffffff;" ></i>
        </a>
        <a href="#" v-else @click.prevent="favorite(card)">
<!--            <i  class="fa fa-heart-o fa-3"></i>-->

                  <i class="fa fa-heart-o mr-1" style="color:#ffffff;" ></i>
        </a>
    </span>
</template>

<script>
    export default {
        props: ['card', 'favorited'],

        data: function() {
            return {
                isFavorited: '',
            }
        },

        mounted() {
            this.isFavorited = this.isFavorite ? true : false;
        },

        computed: {
            isFavorite() {
                return this.favorited;
            },
        },

        methods: {
            favorite(card) {
                axios.post('/favorite/'+card)
                    .then(response => this.isFavorited = true)
                    .catch(response => console.log(response.data));
            },

            unFavorite(card) {
                axios.post('/unfavorite/'+card)
                    .then(response => this.isFavorited = false)
                    .catch(response => console.log(response.data));
            }
        }
    }
</script>