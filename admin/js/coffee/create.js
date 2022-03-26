const ACCESS_TOKEN = $('#access-token').val();
const API_URL = $('#api-url').val();
const url1 = API_URL + 'admin/coffees/';
axios({
        headers: {
            'Authorization': 'Bearer ' + ACCESS_TOKEN,
            'Content-Type': 'multipart/form-data',
        },
        method: 'post',
        url: url1,
        data: {
            coffeename: 'coffee',
        }
    })
    .then(function(response) {
        //handle success
        console.log(response);
        alert("Thêm Thành công");
    }).catch(function(error) {
        // handle error
        console.log(error);
    });
// const axios = require('axios');
// const url = "http://127.0.0.1:8000/api/v1/admin/coffees";
// const data = document.querySelector('form');
// let formData = new FormData(data);

// function handFormSubmit() {
//     axios.post(url, formData, {
//             headers: {
//                 'Content-Type': 'multipart/form-data'
//             }
//         })
//         .then(function(response) {
//             //handle success
//             console.log(response);
//             alert('Đã thêm thành công')
//         })
//         .catch(function(response) {
//             //handle error
//             console.log(response);
//         });
// }
// // function handFormSubmit() {
// //     axios.post(url, formData, {
// //             headers: {
// //                 'Content-Type': 'multipart/form-data'
// //             }
// //         })
// //         .then(function(response) {
// //             //handle success
// //             console.log(response);
// //             alert('Đã thêm thành công')
// //         })
// //         .catch(function(response) {
// //             //handle error
// //             console.log(response);
// //         });
// // }
// // const data = document.getElementById('add_form');
// // const formData = new FormData(data);

// // formData.append('coffeename', 'coffee');
// // import axios from "axios";
// // const API_URL = "http://127.0.0.1:8000/api/v1/admin/coffees";
// // const COFFEE = document.querySelector('add_form');
// // const formData = new FormData(COFFEE);
// // formData.append('name', $('name'));

// // COFFEE.onsubmit = () => axios.post(API_URL, formData, {
// //         headers: {
// //             'Content-Type': 'multipart/form-data'
// //         }
// //     }).then(function(response) {
// //         //handle success
// //         console.log(response);
// //         alert('Đã thêm thành công');

// //     })
// //     .catch(function(error) {
// //         // handle error
// //         console.log(error);
// //     })
// //     // axios.post(API_URL, formData, {
// //     //         // headers: {
// //     //         //     'Content-Type': 'multipart/form-data'
// //     //         // }
// //     //     }).then(function(response) {
// //     //         //handle success
// //     //         console.log(response);
// //     //         alert('Đã thêm thành công');

// // //     })
// // //     .catch(function(error) {
// // //         // handle error
// // //         console.log(error);
// // //     });