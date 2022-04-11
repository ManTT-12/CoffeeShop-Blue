const APP_URL = $('#app-url').val();
const API_URL = $('#api-url').val();

$('#login-signup-form').on('submit', function(e) {
    e.preventDefault();
    $('#login-title-message').text('');

    const formData = $(this).serialize();
    axios({
        method: 'post',
        url: API_URL + 'login',
        headers: {
            'Access-Control-Allow-Origin': '*'
        },
        data: formData
    }).then(function(response) {
        //handle success
        if (response.status == 200) {
            Cookies.set('token', response.data.data.access_token);
            $.ajax({
                url: APP_URL + 'login.php',
                method: "post",
                data: formData
            }).done(function() {
                location.reload();
            });
        }
    }).catch(function(error) {
        // handle error
        $('.login-error').text('');

        const status = error.response.status;
        if (status == 400) {
            const data = error.response.data.data;
            const message = error.response.data.message;

            if (data.length > 0) {
                for (const key in data) {
                    $('#login-' + key + '-error').text(data[key]);
                }
            } else {
                $('#login-title-message').text(message);
            }
        }
    });
})

$('#user-logout').on('click', function() {
    $.ajax({
        url: APP_URL + 'login.php?action=logout',
        method: "post",
    }).done(function() {
        Cookies.remove('token');
        location.reload();
    });
})

$('#search-toggle').on('click', function(e) {
    const normalSearch = "Normal Search";
    const advancedSearch = "Advanced Search";
    e.preventDefault();
    $("#advanced-search-filter").toggle();
    if ($(this).text() == advancedSearch) {
        $("#advanced-search-filter input, #advanced-search-filter select").prop('disabled', false);
        $('#search-action').val("advanced-search");
        $(this).text(normalSearch);
    } else {
        $("#advanced-search-filter input, #advanced-search-filter select").prop('disabled', true);
        $('#search-action').val("search");
        $(this).text(advancedSearch);
    }
});

$('.add-to-cart-form').on('submit', function(e) {
    e.preventDefault();
    const formData = new FormData($(this)[0]);
    const coffeeId = formData.get('coffee-id');
    const qty = formData.get('qty');
    const data = {
        action: "add-to-cart",
        data: {
            id: coffeeId,
            qty: qty
        }
    }
    $('#manager').load('cart.php', data);
})

$('#search-from-price').on('keypress', function (e) {
    if (!/[0-9.]/.test(e.key)) {
        return false;
    }
});

$('#search-to-price').on('keypress', function (e) {
    if (!/[0-9.]/.test(e.key)) {
        return false;
    }
});

function validateSearchPrice(minPrice, maxPrice) {
    console.log('hello')
    if (isNaN(minPrice) || isNaN(maxPrice)) {
        $("#search-price-error").text("Please enter valid price");
        return false;
    }

    if (parseFloat(minPrice) > parseFloat(maxPrice)) {
        $("#search-price-error").text("From price must not be greater than to price");
        return false;
    }

    return true;
}

function validateSearchDate(minDate, maxDate) {
    if (new Date(minDate) > new Date(maxDate)) {
        $("#search-date-error").text("From date must not be greater than to date");
        return false;
    }

    return true;
}

$('#coffee-search-form').on('submit', function () {
    const minPrice = $('#search-from-price').val();
    const maxPrice = $('#search-to-price').val();
    const price = $('#search-coffee-price');

    const minDate = $('#search-from-date').val();
    const maxDate = $('#search-to-date').val();
    const date = $('#search-coffee-date');

    let valid = true;
    $('.search-error').text('');

    if (minPrice != '' && maxPrice != '') {
        if(!validateSearchPrice(minPrice, maxPrice)) {
            valid = false;
        } else {
            price.val(minPrice + ',' + maxPrice);
        }
    }

    if (minDate != '' && maxDate != '') {
        if(!validateSearchDate(minDate, maxDate)) {
            valid = false;
        } else {
            date.val(minDate + ',' + maxDate);
        }
    }

    return valid;
})