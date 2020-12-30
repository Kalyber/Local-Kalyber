$(function(){

  $('input[type=radio][name=department]').change(function() {
      if (this.value == 'General & Media') {
        // Hide and reset any drop downs showing. Show drop down holder if necessary
        if ($('#select-holder').hasClass('yesDisplay')) {
          $('#select-holder > div').removeClass('yesDisplay').addClass('noDisplay');
          $('select').val('Choose One').change();
          $('select').niceSelect('update');
          $('#select-holder').removeClass('yesDisplay').addClass('noDisplay');
        }
        // Hide any showing results
        $('.results-holder > .yesDisplay').removeClass('yesDisplay').addClass('noDisplay');
        // Show this results
        $('#general-media').removeClass('noDisplay').addClass('yesDisplay');
        // Grab email info from hidden field in div
        var whatemail = $('#general-media-email').val();
        // Assign email info to form hidden field
        $('#toemail').val(whatemail);
        if ($('#contact-form').hasClass('noDisplay')) {
          $('#contact-form').removeClass('noDisplay').addClass('yesDisplay');
        }
      }

      else if (this.value == 'Pilot Training') {
        // Hide any reset and drop downs showing. Show drop down holder if necessary
        $('#select-holder > div').removeClass('yesDisplay').addClass('noDisplay');
        $('select').val('Choose One').change();
        $('select').niceSelect('update');
        // Hide any showing results
        $('.results-holder > .yesDisplay').removeClass('yesDisplay').addClass('noDisplay');
        // Hide contact form
        $('#contact-form').removeClass('yesDisplay').addClass('noDisplay');
        // Show drop down holder if hidden
        if ($('#select-holder').hasClass('noDisplay')) {
          $('#select-holder').removeClass('noDisplay').addClass('yesDisplay');
        }
        // Show pilot type drop down
        $('#pilot-div').removeClass('noDisplay').addClass('yesDisplay');
      }

      else if (this.value == 'Maintenance Training') {
        // Hide any reset and drop downs showing. Show drop down holder if necessary
        $('#select-holder > div').removeClass('yesDisplay').addClass('noDisplay');
        $('select').val('Choose One').change();
        $('select').niceSelect('update');
        // Hide any showing results
        $('.results-holder > .yesDisplay').removeClass('yesDisplay').addClass('noDisplay');
        // Hide contact form
        $('#contact-form').removeClass('yesDisplay').addClass('noDisplay');
        // Show drop down holder if hidden
        if ($('#select-holder').hasClass('noDisplay')) {
          $('#select-holder').removeClass('noDisplay').addClass('yesDisplay');
        }
        // Show country type drop down
        $('#country-div').removeClass('noDisplay').addClass('yesDisplay');
      }

      else if (this.value == 'Specialty & Online') {
        // Hide and reset any drop downs showing. Show drop down holder if necessary
        if ($('#select-holder').hasClass('yesDisplay')) {
          $('#select-holder > div').removeClass('yesDisplay').addClass('noDisplay');
          $('select').val('Choose One').change();
          $('select').niceSelect('update');
          $('#select-holder').removeClass('yesDisplay').addClass('noDisplay');
        }
        // Hide any showing results
        $('.results-holder > .yesDisplay').removeClass('yesDisplay').addClass('noDisplay');
        // Show this results
        $('#specialty-online').removeClass('noDisplay').addClass('yesDisplay');
        // Grab email info from hidden field in div
        var whatemail = $('#specialty-online-email').val();
        // Assign email info to form hidden field
        $('#toemail').val(whatemail);
        if ($('#contact-form').hasClass('noDisplay')) {
          $('#contact-form').removeClass('noDisplay').addClass('yesDisplay');
        }
      }

      else if (this.value == 'Simulation') {
        // Hide and reset any drop downs showing. Show drop down holder if necessary
        if ($('#select-holder').hasClass('yesDisplay')) {
          $('#select-holder > div').removeClass('yesDisplay').addClass('noDisplay');
          $('select').val('Choose One').change();
          $('select').niceSelect('update');
          $('#select-holder').removeClass('yesDisplay').addClass('noDisplay');
        }
        // Hide any showing results
        $('.results-holder > .yesDisplay').removeClass('yesDisplay').addClass('noDisplay');
        // Show this results
        $('#simulation').removeClass('noDisplay').addClass('yesDisplay');
        // Grab email info from hidden field in div
        var whatemail = $('#simulation-email').val();
        // Assign email info to form hidden field
        $('#toemail').val(whatemail);
        if ($('#contact-form').hasClass('noDisplay')) {
          $('#contact-form').removeClass('noDisplay').addClass('yesDisplay');
        }
      }

      else if (this.value == 'Visual Systems') {
        // Hide and reset any drop downs showing. Show drop down holder if necessary
        if ($('#select-holder').hasClass('yesDisplay')) {
          $('#select-holder > div').removeClass('yesDisplay').addClass('noDisplay');
          $('select').val('Choose One').change();
          $('select').niceSelect('update');
          $('#select-holder').removeClass('yesDisplay').addClass('noDisplay');
        }
        // Hide any showing results
        $('.results-holder > .yesDisplay').removeClass('yesDisplay').addClass('noDisplay');
        // Show this results
        $('#visual-systems').removeClass('noDisplay').addClass('yesDisplay');
        // Grab email info from hidden field in div
        var whatemail = $('#visual-systems-email').val();
        // Assign email info to form hidden field
        $('#toemail').val(whatemail);
        if ($('#contact-form').hasClass('noDisplay')) {
          $('#contact-form').removeClass('noDisplay').addClass('yesDisplay');
        }
      }

      else if (this.value == 'Government & Military') {
        // Hide and reset any drop downs showing. Hide drop down holder if necessary
        if ($('#select-holder').hasClass('yesDisplay')) {
          $('#select-holder > div').removeClass('yesDisplay').addClass('noDisplay');
          $('select').val('Choose One').change();
          $('select').niceSelect('update');
          $('#select-holder').removeClass('yesDisplay').addClass('noDisplay');
        }
        // Hide any showing results
        $('.results-holder > .yesDisplay').removeClass('yesDisplay').addClass('noDisplay');
        // Show this results
        $('#government-military').removeClass('noDisplay').addClass('yesDisplay');
        // Grab email info from hidden field in div
        var whatemail = $('#government-military-email').val();
        // Assign email info to form hidden field
        $('#toemail').val(whatemail);
        if ($('#contact-form').hasClass('noDisplay')) {
          $('#contact-form').removeClass('noDisplay').addClass('yesDisplay');
        }
      }
  });





  // Drop Downs
  // Pilot Training - Contact Type
  var pilottype = "Choose One"; // Outside init so results can be used anywhere
  $('#pilot').change(function() {
    pilottype = $('#pilot').val();
    // Reset everything
    $('#training').html('');
    $('#country').val('Choose One').change();
    $('#state').val('Choose One').change();
    $('#province').val('Choose One').change();
    $('select').niceSelect('update');
    if ( $('#country-div').hasClass('yesDisplay') ) {
      $('#country-div').removeClass('yesDisplay').addClass('noDisplay');
    }
    if ( $('#state-div').hasClass('yesDisplay') ) {
      $('#state-div').removeClass('yesDisplay').addClass('noDisplay');
    }
    if ( $('#province-div').hasClass('yesDisplay') ) {
      $('#province-div').removeClass('yesDisplay').addClass('noDisplay');
    }
    $('#contact-form').removeClass('yesDisplay').addClass('noDisplay');
    // End reset
    if (pilottype != "Choose One") {
      if (pilottype == "FlightSafety Academy") {
        // Create URL variable string
        var discLink = 'pt='+pilottype;
        // Ajax load results. Callback sets emails to hidden field
        $('#training').load('/wp-content/themes/Sky/inc/pages/contact-pilot-maint.php', discLink, function() {
          $('#contact-form').removeClass('noDisplay').addClass('yesDisplay');
          // Grab email info from hidden field in div
          var whatemail = $('#training-email').val();
          // Assign email info to form hidden field
          $('#toemail').val(whatemail);
        });
      } else if (pilottype == "Learning Center") {
        $('#learning-div').removeClass('noDisplay').addClass('yesDisplay');
      } else {
        $('#country-div').removeClass('noDisplay').addClass('yesDisplay');
      }
    }
  });

  // Pilot Training & Maintenance - Country
  var whatcountry = "Choose One"; // Outside init so results can be used anywhere
  $('#country').change(function() {
    whatcountry = $('#country').val();
    // Reset everything
    $('#training').html('');
    $('#state').val('Choose One').change();
    $('#province').val('Choose One').change();
    $('select').niceSelect('update');
    if ( $('#state-div').hasClass('yesDisplay') ) {
      $('#state-div').removeClass('yesDisplay').addClass('noDisplay');
    }
    if ( $('#province-div').hasClass('yesDisplay') ) {
      $('#province-div').removeClass('yesDisplay').addClass('noDisplay');
    }
    $('#contact-form').removeClass('yesDisplay').addClass('noDisplay');
    // End reset
    if (whatcountry != "Choose One") {
      if (whatcountry == 'United States') {
        $('#state-div').removeClass('noDisplay').addClass('yesDisplay');
        if ( $('#province-div').hasClass('yesDisplay') ) {
          whatprovince = "Choose One";
          $('#province-div').removeClass('yesDisplay').addClass('noDisplay');
        }
      }
      else if (this.value == 'Canada') {
        $('#province-div').removeClass('noDisplay').addClass('yesDisplay');
        if ($('#state-div').hasClass('yesDisplay')) {
          whatstate = "Choose One";
          $('#state-div').removeClass('yesDisplay').addClass('noDisplay');
        }
      }
      else { // Any other country
        if ( $('#province-div').hasClass('yesDisplay') ) {
          whatprovince = "Choose One";
          $('#province-div').removeClass('yesDisplay').addClass('noDisplay');
        }
        if ($('#state-div').hasClass('yesDisplay')) {
          whatstate = "Choose One";
          $('#state-div').removeClass('yesDisplay').addClass('noDisplay');
        }
        // Create URL variable string
        var discLink = 'pt='+pilottype+"&co="+whatcountry;
        // Ajax load results. Callback sets emails to hidden field
        $('#training').load('/wp-content/themes/Sky/inc/pages/contact-pilot-maint.php', discLink, function() {
          $('#contact-form').removeClass('noDisplay').addClass('yesDisplay');
          // Grab email info from hidden field in div
          var whatemail = $('#training-email').val();
          // Assign email info to form hidden field
          $('#toemail').val(whatemail);
        });
      }
    }
  });

  // Pilot Training & Maintenance - State
  var whatstate = "Choose One"; // Outside init so results can be used anywhere
  $('#state').change(function() {
    whatstate = $('#state').val();
    if (whatstate != "Choose One") {
      // Create URL variable string
      var discLink = 'pt='+pilottype+"&co="+whatcountry+"&st="+whatstate;
      // Ajax load results. Callback sets emails to hidden field
      $('#training').load('/wp-content/themes/Sky/inc/pages/contact-pilot-maint.php', discLink, function() {
        $('#contact-form').removeClass('noDisplay').addClass('yesDisplay');
        // Grab email info from hidden field in div
        var whatemail = $('#training-email').val();
        // Assign email info to form hidden field
        $('#toemail').val(whatemail);
      });
    }
  });

  // Pilot Training & Maintenance - Province
  var whatprovince = "Choose One"; // Outside init so results can be used anywhere
  $('#province').change(function() {
    whatprovince = $('#province').val();
    if (whatprovince != "Choose One") {
      var discLink = 'pt='+pilottype+"&co="+whatcountry+"&pr="+whatprovince;
      // Ajax load results. Callback sets emails to hidden field
      $('#training').load('/wp-content/themes/Sky/inc/pages/contact-pilot-maint.php', discLink, function() {
        $('#contact-form').removeClass('noDisplay').addClass('yesDisplay');
        // Grab email info from hidden field in div
        var whatemail = $('#training-email').val();
        // Assign email info to form hidden field
        $('#toemail').val(whatemail);
      });
    }
  });

  // Learning Center
  var whatlearning = "Choose One"; // Outside init so results can be used anywhere
  $('#learning').change(function() {
    whatlearning = $('#learning').val();
    if (whatlearning != "Choose One") {
      var discLink = 'lc='+whatlearning;
      // Ajax load results. Callback sets emails to hidden field
      $('#training').load('/wp-content/themes/Sky/inc/pages/contact-learning.php', discLink, function() {
        $('#contact-form').removeClass('noDisplay').addClass('yesDisplay');
        // Grab email info from hidden field in div
        var whatemail = $('#learning-email').val();
        // Assign email info to form hidden field
        $('#toemail').val(whatemail);
      });
    }
  });

});