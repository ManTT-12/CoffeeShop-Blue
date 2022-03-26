const ACCESS_TOKEN = $('#access-token').val();
const API_URL = $('#api-url').val();

const coffeeCreateTypeForm = $('#coffee-type-create-form');

function addNewCoffeeType(e)
{
    e.preventDefault();

    $('#create-coffee-type-title-message').text('');

    const formData = new FormData(coffeeCreateTypeForm[0]);

    axios({
        method: 'post',
        url: API_URL + 'admin/coffee-types/',
        headers: {
            'Authorization': 'Bearer ' + ACCESS_TOKEN
        }, 
        data: formData
    }).then(function (response) {
        //handle success
        if (response.status == 201) {
            coffeeCreateTypeForm.find('.create-coffee-type-error').text('');
            coffeeCreateTypeForm.find("input[type=text], input[type=file], textarea, select").val("");
            $('#create-coffee-type-title-message').text(response.data.message);
        }
    }).catch(function (error) {
        // handle error
        const code = error.response.status;

        if (code == 400) {
            coffeeCreateTypeForm.find('.create-coffee-type-error').text('');
            const errors = error.response.data.data;
            for (const key in errors) {
                $('#create-coffee-type-' + key + '-error').text(errors[key][0]);
            }
        }  
    });
}

coffeeCreateTypeForm.on('submit', addNewCoffeeType);