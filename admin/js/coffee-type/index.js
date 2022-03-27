
const APP_URL = $('#app-url').val();
const API_URL = $('#api-url').val();
const ACCESS_TOKEN = $('#access-token').val();

function coffeeTypeDelete(e, coffeeTypeId)
{
    if(confirm('Do you want to delete this product?')) {
        axios({
            method: 'delete',
            url: API_URL + 'admin/coffee-types/' + coffeeTypeId,
            headers: {
                'Authorization': 'Bearer ' + ACCESS_TOKEN
            }
        }).then(function (response) {
            //handle success
            if (response.status == 200) {
                alert(response.data.message);

                const deletedRow = $(e).parents('tr');
                $('#coffee-type-datatable').DataTable().row(deletedRow).remove().draw();
            }
        }).catch(function (error) {
            // handle error
            console.log(error);
        });
    }
}

function coffeeTypeDataTable(data) {
    $('#coffee-type-datatable').DataTable({
        data: data,
        columns: [
            { title: "ID", data: 'id' },
            { title: "Name", data: 'name' },
            { title: "Created Date", data: 'created_at' },
            { title: "Updated Date", data: 'updated_at' },
            {
                title: "Actions", 
                render: function (data, type, row) {
                    return '<a href="' + APP_URL + 'admin/coffee-type.php?action=edit&id=' + row.id + '" class="btn btn-warning btn-mini">Edit</a>' +
                    '<a href="' + APP_URL + 'admin/coffee-type.php?action=details&id=' + row.id + '" class="btn btn-info btn-mini">Detail</a>' +
                    '<button onclick="coffeeTypeDelete(this, ' + row.id + ')" class="btn btn-danger btn-mini">Delete</button>';
                }
            }
        ]
    });
}

function getCoffeeTypeList () {
    axios.get(API_URL + 'admin/coffee-types/' , {
        headers: {
            'Authorization': 'Bearer ' + ACCESS_TOKEN
        }
    }).then(function (response) {
        // handle success
        if (response.data.code == 200) {
            const data = response.data.data;
            coffeeTypeDataTable(data);
        }
    }).catch(function (error) {
        // handle error
        coffeeTypeDataTable(error.response.data.data);
    });
}

getCoffeeTypeList();
