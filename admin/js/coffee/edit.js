const ACCESS_TOKEN = $('#access-token').val();
const API_URL = $('#api-url').val();
const COFFEE_ID = $('#coffee-edit-id').val();

const coffeeEditForm = $('#coffee-edit-form');

function addNewCoffee(e)
{
    e.preventDefault();

    $('#edit-coffee-title-message').text('');

    const formData = new FormData(coffeeEditForm[0]);

    axios({
        method: 'post',
        url: API_URL + 'admin/coffees/' + COFFEE_ID,
        headers: {
            'Authorization': 'Bearer ' + ACCESS_TOKEN
        }, 
        data: formData
    }).then(function (response) {
        //handle success
        if (response.status == 200) {
            coffeeEditForm.find('.edit-coffee-error').text('');
            $('#edit-coffee-title-message').text(response.data.message);
        }
    }).catch(function (error) {
        // handle error
        const code = error.response.status;

        if (code == 400) {
            coffeeEditForm.find('.edit-coffee-error').text('');
            const errors = error.response.data.data;
            for (const key in errors) {
                $('#edit-coffee-' + key + '-error').text(errors[key][0]);
            }
        } else if (code == 404) {
            $('#edit-coffee-title-message').text(response.data.message);
        }
    });
}

coffeeEditForm.on('submit', addNewCoffee);

$('#edit-coffee-image').on('change', function (e) {
    $('#edit-coffee-image-display').attr('src', URL.createObjectURL(e.target.files[0]))
})