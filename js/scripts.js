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
}
//doc ready
$(function(){
  myApp.init();
});//doc ready end
