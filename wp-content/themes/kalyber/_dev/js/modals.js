$(function(){

  $('.irc-main__modal-background').click(function() {
      $('.modal').fadeOut(500); $('.modal-background').fadeOut(1000);
      $('body').removeClass('modal-open'); // Unlocks background
  });
  $('.modal-close').click(function() {
      $('.modal').fadeOut(500); $('.modal-background').fadeOut(1000);
      $('body').removeClass('modal-open'); // Unlocks background
  });
  
});