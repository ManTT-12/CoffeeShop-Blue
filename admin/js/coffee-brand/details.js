const API_URL = $('#api-url').val();
const ACCESS_TOKEN = $('#access-token').val();
const COFFEE_BRAND_ID = $('#coffee-brand-details-id').val();

axios.get(API_URL + 'admin/coffee-brands/' + COFFEE_BRAND_ID, {
    headers: {
        'Authorization': 'Bearer ' + ACCESS_TOKEN
    }
}).then(function (response) {
    //handle success
    if (response.data.code == 200) {
        const data = response.data.data;
        $('#coffee-brand-details-title').text('Coffee Brand Id ' + data.id);
        $('#coffee-brand-details-name').text(data.name);
        $('#coffee-brand-details-created_at').text(data.created_at);
        $('#coffee-brand-details-updated_at').text(data.updated_at);
        
    }
}).catch(function (error) {
    // handle error
    console.log(error);
});
