<template>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <div class="form-group">
                    <label for="title">Card Title</label>
                    <input v-model="newCardTitle" id="title" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="description">Card Description</label>
                    <textarea v-model="newCardDesc" id="description" rows="8" class="form-control"></textarea>
                </div>
                <button @click="addCard(newCardTitle, newCardDesc)"
                        :class="{disabled: (!newCardTitle || !newCardDesc)}"
                        class="btn btn-block btn-primary">Submit</button>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                newCardTitle: "",
                newCardDesc: ""
            }
        },
        created() {
            this.listenForChanges();
        },
        methods: {
            addCard(cardName, cardDesc) {
                // check if entries are not empty
                if(!cardName || !cardDesc)
                    return;

                // make API to save post
                axios.post('/api/card', {
                    title: cardName, description: cardDesc
                }).then( response => {
                    if(response.data) {
                        this.newCardTitle = this.newCardDesc = "";
                    }
                })
            },
            listenForChanges() {
                Echo.channel('cards')
                    .listen('CardCreated', post => {
                        if (! ('Notification' in window)) {
                            alert('Web Notification is not supported');
                            return;
                        }

                        Notification.requestPermission( permission => {
                            let notification = new Notification('New card alert!', {
                                body: card.title, // content for the alert
                                icon: "https://pusher.com/static_logos/320x320.png" // optional image url
                            });

                            // link to page on clicking the notification
                            notification.onclick = () => {
                                window.open(window.location.href);
                            };
                        });
                    })
            }
        }
    }
</script>