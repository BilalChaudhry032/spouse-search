var register = new Vue({
    el: '#regForm',
    data: {
        errors: [],
        // Input Fields Variables
        email:null,
        name:'',
        password:'',
        confirmPassword:null,
        formOneDisplay: true,
        formTwoDisplay: false,
        formThreeDisplay: false,
        formFourDisplay: false,
        emailErrors: []
    },
    methods:{
        checkForm:function(e) {
            if(this.email && this.name) return true;
            this.errors = [];
            if(!this.password.length || this.password.length < 10)
                this.errors.push("Password Length is short");
            if(this.password != this.confirmPassword)
                this.errors.push("Password Does not match");
            if(!this.email) {
                this.errors.push("Email required.");
            }
            if(!this.name) {
                this.errors.push("Name require");
            } else if(!this.validEmail(this.email)) {
                this.errors.push("Valid email required.");
            }
            if(!this.age) this.errors.push("Age required.");
            e.preventDefault();
        },
        validEmail:function(email) {
            var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(email);
        }
    },
    computed: {
        passwordLength() {
            return this.password.length
        },
        formOneValid(){
            if (this.errors)
                return 'Form is not valid'
            else
                return 'Form is valid'
        }
    }
});