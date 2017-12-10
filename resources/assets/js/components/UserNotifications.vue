<template>
    <li class="dropdown nav-item dropdown btn-group pull-right" v-show="notifications.length">

        <a href="#" class="nav-link" id="" data-toggle="dropdown">

            <i class="fa fa-bell fa-3" style="font-size: 26px;padding-right: 10px; padding-bottom: 10px;" aria-hidden="true"></i><span
                class="counter" style="margin-left: -20px;margin-top: -1px;padding: 1px 7px;font-size: 10px; border-radius: 100%;
}">{{notifications.length}}</span>

        </a>

        <ul class="dropdown-menu">
            <li v-for="notification in notifications">
                <a :href="notification.data.link"
                   v-text="notification.data.message"
                   @click="markAsRead(notification)"
                ></a>
            </li>
        </ul>

    </li>
</template>

<script>
    export default {
        data() {
            return {

                notifications: false

            }
        },
        created() {
          //  axios.get('/profile/' + window.App.user.name + '/notifications')
            axios.get('/profile/' + window.App.user.name  + '/notifications')
                .then(response => this.notifications = response.data);
        },
        methods: {
            markAsRead(notification) {
                axios.delete('/profile/' + window.App.user.name + '/notifications/' + notification.id)
            }
        },

        mounted() {
            console.log('Component mounted.');
            Echo.private('/profile/' + window.App.user.name  + '/notifications')
                .notification((notification) => {
                    console.log(notification);
                    let newUnreadNotifications = {data: {card: notification.card, user: notification.user}};
                   this.notifications.push(newUnreadNotifications);
                });

        }

    }
</script>
