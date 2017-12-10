<template>
    <div class="wrap">


<!--
        <a :href="threadUrl">
            {{ unread.data.user.name }} commented on {{ unread.data.card.card_product_name }}
        </a>
-->

  <a :href="notification.data.link"
           v-text="notification.data.message"
           @click="markAsRead(notification)"
        ></a>

    </div>
</template>
<!--

<script>
    export default {
        props:['unread'],
        data(){
            return {
                threadUrl:""
            }
        },
        mounted(){
            this.threadUrl="card/"+ this.unread.data.card.id
        }
    }
-->
</script>