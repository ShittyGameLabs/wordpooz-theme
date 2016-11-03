$(function(){

function display() {
  var topOfOthDiv = $(".about").offset().top;

    if($(window).scrollTop() > topOfOthDiv) {
      $('nav').css('background', 'rgba(0,0,0,0.9)');
    }
    else{
      $('nav').css('background', 'transparent');
    }
  }
  $(window).scroll(function() {
    display();
  });

});
