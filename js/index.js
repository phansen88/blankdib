var app = new Vue({
    el: '#app',
    data: {
        load: false,
        logged_in: false,
        firstname: '',
        lastname: '',
        username: '',
        password: '',
        records: []
    },
    methods: {
        login: function() {
            console.log(app.username);
            axios.get('/api/auth/').then(function(response) {
                console.log(response.data);
            })
        }
    },
    mounted() {
        axios.get('/api/products/').then(function(response) {
            console.log(response.data);
            app.load = true;
            app.records = response.data;
        })
    }
  });