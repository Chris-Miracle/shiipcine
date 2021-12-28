require('./bootstrap');

import $ from 'jquery';
window.$ = window.jQuery = $;

function readURLOne(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        
        reader.onload = function (e) {
            $('#image_1').attr('src', e.target.result);
        }
        
        reader.readAsDataURL(input.files[0]);
    }
}

$("#imgInp1").change(function(){
    readURLOne(this);
});