
const APP_URL = $('#app-url').val();
const API_URL = $('#api-url').val();
const ACCESS_TOKEN = $('#access-token').val();
const COFFEE_IMAGE_PATH = $('#coffee-image-path').val();

function coffeeDelete(e, coffeeId)
{
    if(confirm('Do you want to delete this product?')) {
        axios({
            method: 'delete',
            url: API_URL + 'admin/coffees/' + coffeeId,
            headers: {
                'Authorization': 'Bearer ' + ACCESS_TOKEN
            }
        }).then(function (response) {
            //handle success
            if (response.status == 200) {
                alert(response.data.message);

                const deletedRow = $(e).parents('tr');
                $('#coffee-datatable').DataTable().row(deletedRow).remove().draw();
            }
        }).catch(function (error) {
            // handle error
            console.log(error);
        });
    }
}

function coffeeDataTable(data) {
    $('#coffee-datatable').DataTable({
        data: data,
        columns: [
            { title: "ID", data: 'id' },
            { title: "Name", data: 'name' },
            { 
                title: "Image", 
                data: 'image', 
                render: function(data) {
                    return '<img src="' + COFFEE_IMAGE_PATH + '/' + data + '" width="100" height="100" />';
                }
            },
            { title: "Type", data: 'coffee_type.name' },
            { title: "Brand", data: 'coffee_brand.name' },
            { title: "Price", data: 'price' },
            { 
                title: "Status", 
                data: 'status' , 
                render: function(data) {
                    return data == 1 ? 'Activated' : 'Unactivated';
                }
            },
            { title: "Created Date", data: 'created_at' },
            { title: "Updated Date", data: 'updated_at' },
            {
                title: "Actions", 
                render: function (data, type, row) {
                    return '<a href="' + APP_URL + 'admin/coffee.php?action=edit&id=' + row.id + '" class="btn btn-warning btn-mini">Edit</a>' +
                    '<a href="' + APP_URL + 'admin/coffee.php?action=details&id=' + row.id + '" class="btn btn-info btn-mini">Detail</a>' +
                    '<button onclick="coffeeDelete(this, ' + row.id + ')" class="btn btn-danger btn-mini">Delete</button>';
                }
            }
        ]
    });
}

function getCoffeeList () {
    axios.get(API_URL + 'admin/coffees/' , {
        headers: {
            'Authorization': 'Bearer ' + Cookies.get('admin_token'), 
            'Access-Control-Allow-Origin': '*'
        }
    }).then(function (response) {
        // handle success
        if (response.data.code == 200) {
            const data = response.data.data;
            coffeeDataTable(data);
        }
    }).catch(function (error) {
        // handle error
        coffeeDataTable(error.response.data.data);
    });
}

getCoffeeList();

