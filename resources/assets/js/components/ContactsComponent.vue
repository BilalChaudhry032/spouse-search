<template>
    <div class="col-sm-3 col-3 chat-contacts px-0 list-group" role="tablist">


        <a class="list-group-item list-group-item-action contact-card active" data-toggle="list" href="#one" role="tab">
            <div class="contact-card-img">
                <img src="uploads/avatar/1.jpg" class="img-fluid" alt="">
            </div>

            <div class="contact-card-text">
                <h6>Usman Khalid</h6>
                <p> Hello! </p>
            </div>
            <div class="clearfix"></div>
        </a>


        <a class="list-group-item list-group-item-action contact-card" data-toggle="list" href="#two" role="tab">
            <div class="contact-card-img">
                <img src="uploads/avatar/1.jpg" class="img-fluid" alt="">
            </div>

            <div class="contact-card-text">
                <h6>Usman Khalid</h6>
                <p> Hello! </p>
            </div>
            <div class="clearfix"></div>
        </a>


    </div>
</template>

<script>
    export default {
        name: "ContactsComponent"
    }
</script>

<style scoped>

</style>