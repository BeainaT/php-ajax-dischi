// MILESTONE 2
const app = new Vue ({
    el: '#app',
    data: {
        albums: [] //init empty array
    },
    created() {
        //call axios on created and pass api endpoint
        axios.get('http://localhost/php-ajax-dischi/server/api.php')
        .then((response) => {
            //set albums as api's endpoint response.data
            this.albums = response.data;
        })
        .catch((error) => {
            console.log(error)
        })
    }
});