<template>

  <button :class="classes" @click="subscribe" v-text="isSubscribed">Subscribe</button>


</template>




<script>

    export default {

        props: ['active'],

        computed: {
            classes() {

                return ['btn waves-effect waves-light', this.active ? 'btn-primary' : 'btn-default'];

            },

            isSubscribed() {
                return this.active ? 'Subscribed' : 'Subscribe'
            }
        },


        methods: {

            subscribe() {

                axios[
                    (this.active ? 'delete' : 'post')
                    ](location.pathname + '/subscriptions');

                this.active = ! this.active;

            }

        }

    }

</script>
