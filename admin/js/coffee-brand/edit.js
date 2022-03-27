const ACCESS_TOKEN = $('#access-token').val();
const API_URL = $('#api-url').val();
const COFFEE_BRAND_ID = $('#coffee-brand-edit-id').val();

const coffeeBrandEditForm = $('#coffee-brand-edit-form');

function editCoffeeBrand(e)
{
    e.preventDefault();

    $('#edit-coffee-brand-title-message').text('');

    const formData = new FormData(coffeeBrandEditForm[0]);
    const data = {
        name: formData.get('name')
    };

    axios({
        method: 'put',
        url: API_URL + 'admin/coffee-brands/' + COFFEE_BRAND_ID,
        headers: {
            'Authorization': 'Bearer ' + ACCESS_TOKEN
        }, 
        data: data
    }).then(function (response) {
        //handle success
        if (response.status == 200) {
            coffeeBrandEditForm.find('.edit-coffee-brand-error').text('');
            $('#edit-coffee-brand-title-message').text(response.data.message);
        }
    }).catch(function (error) {
        // handle error
        const code = error.response.status;
        if (code == 400) {
            coffeeBrandEditForm.find('.edit-coffee-brand-error').text('');
            const errors = error.response.data.data;
            for (const key in errors) {
                $('#edit-coffee-brand-' + key + '-error').text(errors[key][0]);
            }
        }
    });
}

coffeeBrandEditForm.on('submit', editCoffeeBrand);