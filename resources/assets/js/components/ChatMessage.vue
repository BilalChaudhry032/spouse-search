<template>
    <li class="replies">
        <img src="uploads/avatar/1.jpg" class="img-fluid" alt="">
        <p class="mb-0"> {{ message.message }}</p>
    </li>
</template>

<script>
    export default {
        name: "ChatMessage",
        props: ['message'],
        data: function () {
            return {
                imgPreUrl: "uploads/avatar/"
            }
        }
    }
</script>

<style scoped>

</style>