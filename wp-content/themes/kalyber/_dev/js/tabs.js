$(function(){ 

  // Hash check - see if URL points to specific section
  if(window.location.hash) {
    var whtHash = window.location.hash.substr(1);
  } else { // Default
    var whtHash = $("#tab-list").attr("rel");
  }
  // Create ID to initially show
  var whtSec = '#' + whtHash;
  // Show initial content
  $(whtSec).removeClass('noDisplay').addClass('yesDisplay');

  // Replace content
  $('.tab-link').click(function() {
    // Hide modal if applicable
    $('.modal').fadeOut(500); $('.modal-background').fadeOut(1000);

    // Create new content ID
    newSec = '#' + $(this).attr('rel');

    // Highlight correct nav item
    $('.tab-link__on').removeClass('tab-link__on').addClass('tab-link__off');
    $(this).removeClass('tab-link__off').addClass('tab-link__on');

    // Hide current content. Show new content
    $('.yesDisplay').removeClass('yesDisplay').addClass('noDisplay');
    $(newSec).removeClass('noDisplay').addClass('yesDisplay');

    // Update hash in address bar without the page jumping
    if(history.pushState) {
        history.pushState(null, null, newSec);
    }
    else {
      location.hash = newSec;
    }
  });


  // Drop downs
  //$('.dropNav > span').click(function() {
    //if ( $(this).parent().children('.subNav').hasClass('subOff') ) {
      //$(this).parent().children('.subNav').removeClass('subOff').addClass('subOn');
      //$('i', this).removeClass('fa-chevron-right').addClass('fa-chevron-down');
    //} else {
      //$(this).parent().children('.subNav').removeClass('subOn').addClass('subOff');
      //$('i', this).removeClass('fa-chevron-down').addClass('fa-chevron-right');
    //}
  //});
  
});