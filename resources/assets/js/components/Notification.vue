<template>
    <li class="dropdown" @click="markNotificationAsRead">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            <span class="glyphicon glyphicon-bell"></span> Notifications <span
                class="badge alert-danger">{{notifications.length}}</span>
        </a>

        <ul class="dropdown-menu" role="menu">
           <li>
                <notification-item v-for="unread in notifications" :unread="unread"></notification-item>
            </li>

        </ul>
    </li>
</template>

<script>
    import NotificationItem from './NotificationItem.vue';
    export default {
        props: ['unreads', 'userid'],
        components: {NotificationItem},
        data(){
            return {
                notifications: this.unreads
            }
        },
        methods: {
            markNotificationAsRead() {
                if (this.notifications.length) {
                    axios.get('/markAsRead');
                }
            }
        },
        mounted() {
            console.log('Component mounted.');
            Echo.private('App.User.' + this.userid)
                .notification((notification) => {
                    console.log(notification);
                    let newUnreadNotifications = {data: {card: notification.card, user: notification.user}};
                    this.notifications.push(newUnreadNotifications);
                });

        }
    }
</script>