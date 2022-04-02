const navMenuIcon = document.getElementById("nav-menu-icon");
const navShortMenu = document.getElementById("nav-short-menu");

const APP_URL = $('#app-url').val();
const API_URL = $('#api-url').val();

navMenuIcon.addEventListener('click', function() {
    if (navShortMenu.style.opacity == "1") {
        navShortMenu.style.opacity = '0';
        navShortMenu.style.pointerEvents = 'none';
    } else {
        navShortMenu.style.opacity = '1';
        navShortMenu.pointerEvents = 'auto';
    }
})



$('#login-signup-form').on('submit', function (e) {
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
    }).then(function (response) {
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
    }).catch(function (error) {
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

$('#user-logout').on('click', function () {
    $.ajax({
        url: APP_URL + 'login.php?action=logout',
        method: "post",
    }).done(function() {
        Cookies.remove('token');
        location.reload();
    });
})

$('#search-toggle').on('click', function (e) {
    e.preventDefault();
    $("#advanced-search-filter").toggle();
    if ($(this).text() == "Advanced Search") {
        $(this).text("Normal Search");
    } else {
        $(this).text("Advanced Search");
    }
});