// Location Control Function Starts Here
var profile = new Vue({
    el : '#profile-info',
    data : {
        locationEditMode : false,
        aboutEditMode : false,
        profilePicEditMode : false,
        photoEditMode : false,
        educationEditMode : false,
        contactEditMode : false,
        searchEditMode: false,
    }
});


var search = new Vue({
    el : '#search-form-d',
    data : {
        searchEditMode: false
    }
});


var p = new Vue({
    el : '#top-form',
    data : {
        profilePicEditMode : false,
        nameEditMode : false
    }
});



