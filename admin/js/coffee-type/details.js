const APP_URL = $('#app-url').val();
const API_URL = $('#api-url').val();
const ACCESS_TOKEN = $('#access-token').val();
const COFFEE_TYPE_ID = $('#coffee-type-details-id').val();

axios.get(API_URL + 'admin/coffee-types/' + COFFEE_TYPE_ID, {
    headers: {
        'Authorization': 'Bearer ' + ACCESS_TOKEN
    }
}).then(function (response) {
    //handle success
    if (response.data.code == 200) {
        const data = response.data.data;
        $('#coffee-type-details-title').text('Coffee Brand Id ' + data.id);
        $('#coffee-type-details-name').text(data.name);
        $('#coffee-type-details-created_at').text(data.created_at);
        $('#coffee-type-details-updated_at').text(data.updated_at);
        
    }
}).catch(function (error) {
    // handle error
    console.log(error);
});
