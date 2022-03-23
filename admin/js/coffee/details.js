const API_URL = $('#api-url').val();
const ACCESS_TOKEN = $('#access-token').val();
const COFFEE_IMAGE_PATH = $('#coffee-image-path').val();
const COFFEE_ID = $('#coffee-details-id').val();

axios.get(API_URL + 'admin/coffees/' + COFFEE_ID, {
    headers: {
        'Authorization': 'Bearer ' + ACCESS_TOKEN
    }
}).then(function (response) {
    //handle success
    if (response.data.code == 200) {
        const data = response.data.data;
        $('#coffee-details-title').text('Coffee Id ' + data.id);
        $('#coffee-details-image').attr('src', COFFEE_IMAGE_PATH + data.image);
        $('#coffee-details-name').text(data.name);
        $('#coffee-details-status').text(data.status ? 'Activated' : 'Unactivated');
        $('#coffee-details-price').text(data.price + '$');
        $('#coffee-details-type').text(data.type);
        $('#coffee-details-brand').text(data.brand);
        $('#coffee-details-description').text(data.description);
        $('#coffee-details-created_at').text(data.created_at);
        $('#coffee-details-updated_at').text(data.updated_at);
        
    }
}).catch(function (error) {
    // handle error
    console.log(error);
});
