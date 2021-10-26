'use strict'
$(() => {
  $('.c-menu-btn').click(() => {
    $('.c-menu-btn , .p-aside , .u-menu-filter, .c-menu-btn--close').addClass('is-active');
  });


  $('.c-menu-btn--close').click(() => {
    $('.c-menu-btn , .p-aside , .u-menu-filter, .c-menu-btn--close').removeClass('is-active');
  });
});

//画面幅が変わると自動でメニュー閉鎖不要かも？
$(window).resize(function(){
  $('.c-menu-btn , .p-aside, .u-menu-filter, c-menu-btn--close').removeClass('is-active');
});