$(function(){

  //  Drops down mobile nav
  $('#header__hamburger').click(function(){
    $(this).toggleClass('open');
    if ( $('.header__mobile-menu').hasClass('menu-is-down') ) {
      $('.header__mobile-menu').removeClass('menu-is-down');
      $('.header__mobile-menu').slideUp();
    } else {
      $('.header__mobile-menu').addClass('menu-is-down');
      $('.header__mobile-menu').slideDown();
    }
  });


  // Mobile nav secondary nav
  $(".header-mobile-menu__ul li > span").click(function () {
    if ( $('div', this).hasClass('header-mobile-menu__minus') ) {
      $('div', this).removeClass('header-mobile-menu__minus').addClass('header-mobile-menu__plus');
      $(this).parent().children('.header-mobile-menu__ul__sub').slideUp();
    } else {
      $('div', this).removeClass('header-mobile-menu__plus').addClass('header-mobile-menu__minus');
      $(this).parent().children('.header-mobile-menu__ul__sub').slideDown();
    }
  });

  // Locations - Mobile Regions Nav
  $("#locationmenu > li > a").click(function () {
    if ( $('div', this).hasClass('header-mobile-menu__minus') ) {
      $('div', this).removeClass('header-mobile-menu__minus').addClass('header-mobile-menu__plus');
      $(this).parent().children('.header-mobile-menu__ul__sub').slideUp();
    } else {
      $('div', this).removeClass('header-mobile-menu__plus').addClass('header-mobile-menu__minus');
      $(this).parent().children('.header-mobile-menu__ul__sub').slideDown();
    }
  });

  // Locations - Mobile Government Nav
  $("#locationsmilitary").click(function () {
    if ( $('div', this).hasClass('button-icon-mobile--gray-minus') ) {
      $('div', this).removeClass('button-icon-mobile--gray-minus').addClass('button-icon-mobile--gray-plus');
      $('.locations-military__listings').slideUp();
    } else {
      $('div', this).removeClass('button-icon-mobile--gray-plus').addClass('button-icon-mobile--gray-minus');
      $('.locations-military__listings').slideDown();
    }
  });

  // IRC main mobile nav
  $('.irc-main-mobile__nav > li').click(function(){
    var mobileSection = $(this).attr('rel');
    $('.irc-main-mobile__image').hide();
    $('.irc-main-mobile__section').removeClass('yesDisplay').addClass('noDisplay');
    $(mobileSection).removeClass('noDisplay').addClass('yesDisplay');
    $('.irc-main-mobile__nav').hide();
  });
  $('.irc-main-mobile__section__head').click(function(){
    $('.irc-main-mobile__image').show();
    $('.irc-main-mobile__section').removeClass('yesDisplay').addClass('noDisplay');
    $('.irc-main-mobile__nav').show();
  });
  $('.irc-main-mobile__section__item').click(function(){
    var mobileItem = $(this).attr('rel');
    if(mobileItem.indexOf('http') != -1){ // Link is not a pop up
      if (mobileItem.indexOf('flightsafety.com') != -1) { // Link is inside website
        window.location.href = mobileItem;
      } else { // Link is outside website
        window.open(
          mobileItem, '_blank' // Opens in a new window
        );
      }
    } else { // Link is pop up
      // Show pop up
      $('body').addClass('modal-open'); // Locks background
      $('.modal-background').attr('rel', mobileItem);
      $('.modal-background').fadeIn(500);
      $(mobileItem).fadeIn(1000);
    }
  });

  // IRC brochure mobile drop down
  $('#irc-brochure-drop-button').click(function(){
    $(this).toggleClass('open');
    if ( $('#dropNavIcon').hasClass('accordion-minus') ) {
      $('#dropNavIcon').removeClass('accordion-minus').addClass('accordion-plus');
      $('#dropDownContents').slideUp();
    } else {
      $('#dropNavIcon').removeClass('accordion-plus').addClass('accordion-minus');
      $('#dropDownContents').slideDown();
    }
  });

});