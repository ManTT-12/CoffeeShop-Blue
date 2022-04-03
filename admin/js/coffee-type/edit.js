const ACCESS_TOKEN = $('#access-token').val();
const API_URL = $('#api-url').val();
const COFFEE_TYPE_ID = $('#coffee-type-edit-id').val();

const coffeeTypeEditForm = $('#coffee-type-edit-form');

function editCoffeeType(e)
{
    e.preventDefault();

    $('#edit-coffee-type-title-message').text('');

    const formData = new FormData(coffeeTypeEditForm[0]);
    const data = {
        name: formData.get('name')
    };

    axios({
        method: 'put',
        url: API_URL + 'admin/coffee-types/' + COFFEE_TYPE_ID,
        headers: {
            'Authorization': 'Bearer ' + Cookies.get('admin_token'), 
            'Access-Control-Allow-Origin': '*'
        }, 
        data: data
    }).then(function (response) {
        //handle success
        if (response.status == 200) {
            coffeeTypeEditForm.find('.edit-coffee-type-error').text('');
            $('#edit-coffee-type-title-message').text(response.data.message);
        }
    }).catch(function (error) {
        // handle error
        const code = error.response.status;
        if (code == 400) {
            coffeeTypeEditForm.find('.edit-coffee-type-error').text('');
            const errors = error.response.data.data;
            for (const key in errors) {
                $('#edit-coffee-type-' + key + '-error').text(errors[key][0]);
            }
        }
    });
}

coffeeTypeEditForm.on('submit', editCoffeeType);