$(function(){

  $('.accordion').click(function() {
    if ( !$(this).parent().children('.accordion-content').hasClass('accordion-is-down') ) {
      $(this).parent().children('.accordion-content').slideDown();
      $(this).parent().children('.accordion-content').addClass('accordion-is-down');
      $(this).children('.accordion-icon').removeClass('accordion-plus').addClass('accordion-minus');
    } else {
      $(this).parent().children('.accordion-content').slideUp();
      $(this).parent().children('.accordion-content').removeClass('accordion-is-down');
      $(this).children('.accordion-icon').removeClass('accordion-minus').addClass('accordion-plus');
    }
  });
  
});