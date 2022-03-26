const ACCESS_TOKEN = $('#access-token').val();
const API_URL = $('#api-url').val();

const coffeeCreateForm = $('#coffee-create-form');

function addNewCoffee(e)
{
    e.preventDefault();

    $('#create-coffee-title-message').text('');

    const formData = new FormData(coffeeCreateForm[0]);

    axios({
        method: 'post',
        url: API_URL + 'admin/coffees/',
        headers: {
            'Authorization': 'Bearer ' + ACCESS_TOKEN
        }, 
        data: formData
    }).then(function (response) {
        //handle success
        if (response.status == 201) {
            coffeeCreateForm.find("input[type=text], input[type=file], textarea, select").val("");
            $('#create-coffee-title-message').text(response.data.message);
        }
    }).catch(function (error) {
        // handle error
        const code = error.response.status;

        if (code == 400) {
            coffeeCreateForm.find('.create-coffee-error').text('');
            const errors = error.response.data.data;
            for (const key in errors) {
                $('#create-coffee-' + key + '-error').text(errors[key][0]);
            }
        }  
    });
}

$('#coffee-create-form').on('submit', addNewCoffee);