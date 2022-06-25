// MILESTONE 2
const app = new Vue ({
    el: '#app',
    data: {
        albums: [], //init empty array
        select: "",
        genres: new Set(), // init object as Set constructor to collect one value/type of iterable obj passed
    },
    created() {
        //call axios on created and pass api endpoint
        axios.get('http://localhost/php-ajax-dischi/server/api.php')
        .then((response) => {
            //set albums as api's endpoint response.data
            this.albums = response.data;
            this.albums.forEach(elm => {
                //genres'll contain every "genre/type in album" repeated value only once
                this.genres.add(elm.genre);
            });
        })
        .catch((error) => {
            console.log(error)
        });
    },
    methods: {
        //2nd call to axios passing select parameter (filter setted in php file)
        filterGenre() {
            axios.get('http://localhost/php-ajax-dischi/server/api.php', {
                params: {
                    genre: this.select
                }
            })
            .then((response) => {
                this.albums = response.data
            })
            .catch((error) => {
                console.log(error)
            });
        },
    }
});