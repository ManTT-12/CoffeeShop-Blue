const ACCESS_TOKEN = $('#access-token').val();
const API_URL = $('#api-url').val();

const coffeeCreateBrandForm = $('#coffee-brand-create-form');

function addNewCoffeeBrand(e)
{
    e.preventDefault();

    $('#create-coffee-brand-title-message').text('');

    const formData = new FormData(coffeeCreateBrandForm[0]);

    axios({
        method: 'post',
        url: API_URL + 'admin/coffee-brands/',
        headers: {
            'Authorization': 'Bearer ' + ACCESS_TOKEN
        }, 
        data: formData
    }).then(function (response) {
        //handle success
        if (response.status == 201) {
            coffeeCreateBrandForm.find('.create-coffee-brand-error').text('');
            coffeeCreateBrandForm.find("input[type=text], input[type=file], textarea, select").val("");
            $('#create-coffee-brand-title-message').text(response.data.message);
        }
    }).catch(function (error) {
        // handle error
        const code = error.response.status;

        if (code == 400) {
            coffeeCreateBrandForm.find('.create-coffee-brand-error').text('');
            const errors = error.response.data.data;
            for (const key in errors) {
                $('#create-coffee-brand-' + key + '-error').text(errors[key][0]);
            }
        }  
    });
}

coffeeCreateBrandForm.on('submit', addNewCoffeeBrand);