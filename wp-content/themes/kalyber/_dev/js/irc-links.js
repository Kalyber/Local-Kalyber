$(function(){

  // Handles multiple types of modal links
  $('.modal-link').click(function() { // Class not in CSS. Just for JS
    var addressValue = $(this).attr('rel');
    if(addressValue.indexOf('http') != -1){ // Link is not a pop up
      if (addressValue.indexOf('flightsafety.com') != -1) { // Link is inside website
        window.location.href = addressValue;
      } else { // Link is outside website
        window.open(
          addressValue, '_blank' // Opens in a new window
        );
      }
    } else { // Link is pop up
      // Show pop up
      $('body').addClass('modal-open'); // Locks background
      $('.modal-background').attr('rel', addressValue);
      $('.modal-background').fadeIn(500);
      $(addressValue).fadeIn(1000);
    }
  });

  // Modal Background
  $('.modal-background').click(function() {
    var popupID = $(this).attr('rel');
    $(popupID).fadeOut(1000);
    $('body').removeClass('modal-open'); // Unlocks background
    $('.modal-background').fadeOut(500);
  });

});