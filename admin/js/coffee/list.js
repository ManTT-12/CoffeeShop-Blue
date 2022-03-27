
const API_URL = $('#api-url').val();
const ACCESS_TOKEN = $('#access-token').val();
const COFFEE_IMAGE_PATH = $('#coffee-image-path').val();
const COFFEE_ID = $('#coffee-details-id').val();
const table = $('#data-table tbody')
$(document).ready(function(){
    axios.get(API_URL + 'admin/coffees/' , {
        headers: {
            'Authorization': 'Bearer ' + ACCESS_TOKEN
        }
    }).then(function (response) {
        //handle success
        if (response.data.code == 200) {
            const data = response.data.data;

            $('#data-table').DataTable({
                data: data,
                columns: [
                    { data: 'name' },
                    { data: 'image',
                        render:function(image){
                            return `<img src="${COFFEE_IMAGE_PATH} + ${image} " width="100" height="100" />`
                        }
                    },
                    { data: 'type' },
                    { data: 'price' },
                    { data: 'status' },
                    { data: 'created_at' },
                    { data: 'updated_at' },
                    {
                        className: 'd-flex justify-content-around',
                        render: function () {
                            return `<a href="#" class="btn btn-warning btn-mini">Edit</a>` +
                            `<a href="#" class="btn btn-danger btn-mini">Delete</a>` +
                            `<a href="#" class="btn btn-info btn-mini">Detail</a>`;
                        }
                    }
                ]

            });
        }
    }).catch(function (error) {
        // handle error
        console.log(error);
    });
});