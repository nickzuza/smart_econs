'use strict';
if(document.getElementById('services_st')){
    document.getElementsByClassName('template1-left__menu-title')[0].addEventListener('click',function (e) {
        $('.template1-left__menu').slideToggle('slow');

    })
}