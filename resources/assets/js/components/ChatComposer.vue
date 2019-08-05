<template>
    <div class="message-input">
        <div class="wrap">
            <input type="hidden" value="message.user_id" name="reciever_id">
            <input type="text" placeholder="Write your message..." autofocus v-model="messageText" v-on:keyup.enter="sendMessage">
            <button @click="sendMessage"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
        </div>
    </div>
</template>

<script>
    export default {
        name: "ChatComposer",
        data () {
            return  {
                messageText: ''
            }
        },
        methods: {
            sendMessage() {
                this.$emit('messsagesent', {
                    message: this.messageText,
                    isSender: false,

                });
                //console.log(this.messageText);
                this.messageText = ''
            }
        }
    }
</script>

<style scoped>

</style>