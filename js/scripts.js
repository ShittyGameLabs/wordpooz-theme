"use strict";
//global object for app functions
var myApp = {};

//reveal nav fnction
myApp.revealNav = function() {
    var windowPosition = $(window).scrollTop();
    var homeNavChange = $("#nav___anchor").offset().top;
    if(windowPosition > homeNavChange) {
      $('nav').css('background', 'rgba(0,0,0,0.9)');
    }
    else{
      $('nav').css('background', 'transparent');
    }
  }
//init function
myApp.init = function() {
  $(window).scroll(function() {
    myApp.revealNav();
  });
  $('#bg').mouseParallax({ moveFactor: 1 });
}
//hambuger menu function
$("#hamburger").on('click',function(){
  console.log(this);
  $("#hamburger").fadeOut();
  $('#menu-top-nav').slideDown();
  $('#close').fadeIn();
});
$("#close").on('click',function(){
  $("#hamburger").fadeIn();
  $('#menu-top-nav').slideUp();
  $('#close').fadeOut();
});
//doc ready
$(function(){
  myApp.init();
});//doc ready end
