$(document).ready(function(){
    $('.carousel').carousel({
      indicators:true
    });
    setInterval(function () {
      $('.carousel').carousel('next')
    },2000);
  });