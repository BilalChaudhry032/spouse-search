<template>

    <div class="chat-messages tab-pane fade show active" id="chat-messages-div list-home" role="tabpanel" aria-labelledby="list-home-list">
        <ul class="list-unstyled">
            <chat-message v-for="message in messages" :message="message" :href="message.user_id"></chat-message>
        </ul>
        <div class="alert alert-danger" v-show="messages.length === 0"> You didn't have any messages yet! </div>
    </div>

</template>

<script>
    export default {
        name: "ChatLogComponent",
        props: ['messages']
    }
</script>

<style scoped>

</style>