
// import Vue from 'vue';

/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


Vue.component('flash', require('./components/Flash.vue'));

Vue.component('subscribe-button', require('./components/SubscribeButton.vue'));


Vue.component('merchant-subscribe-button', require('./components/MerchantSubscribeButton.vue'));

Vue.component('example', require('./components/Example.vue'));

Vue.component('favorite', require('./components/Favorite.vue'));

// Vue.component('notification', require('./components/Notification.vue'));

Vue.component(
    'passport-clients',
    require('./components/passport/Clients.vue')
);

Vue.component(
    'passport-authorized-clients',
    require('./components/passport/AuthorizedClients.vue')
);

Vue.component(
    'passport-personal-access-tokens',
    require('./components/passport/PersonalAccessTokens.vue')
);



Vue.component('user-notifications', require('./components/UserNotifications.vue'));

//Vue.component('user-notifications', require('./components/UserNotifications.vue'));

const app = new Vue({
    el: '#app4',

    created(){

        Echo.private('cards')
            .listen('CardCreated', (e) => {

                console.log(e);

            });

    }
});

