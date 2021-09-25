/**
* Template Name: OnePage - v2.2.2
* Template URL: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/
!(function ($) {
  "use strict";

  // Preloader
  $(window).on('load', function () {
    if ($('#preloader').length) {
      $('#preloader').delay(100).fadeOut('slow', function () {
        $(this).remove();
      });
    }
  });

  // Smooth scroll for the navigation menu and links with .scrollto classes
  var scrolltoOffset = $('#header').outerHeight() - 2;
  $(document).on('click', '.nav-menu a, .mobile-nav a, .scrollto', function (e) {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      if (target.length) {
        e.preventDefault();

        var scrollto = target.offset().top - scrolltoOffset;

        if ($(this).attr("href") == '#header') {
          scrollto = 0;
        }

        $('html, body').animate({
          scrollTop: scrollto
        }, 1500, 'easeInOutExpo');

        if ($(this).parents('.nav-menu, .mobile-nav').length) {
          $('.nav-menu .active, .mobile-nav .active').removeClass('active');
          $(this).closest('li').addClass('active');
        }

        if ($('body').hasClass('mobile-nav-active')) {
          $('body').removeClass('mobile-nav-active');
          $('.mobile-nav-toggle i').toggleClass('icofont-navigation-menu icofont-close');
          $('.mobile-nav-overly').fadeOut();
        }
        return false;
      }
    }
  });

  // Activate smooth scroll on page load with hash links in the url
  $(document).ready(function () {
    if (window.location.hash) {
      var initial_nav = window.location.hash;
      if ($(initial_nav).length) {
        var scrollto = $(initial_nav).offset().top - scrolltoOffset;
        $('html, body').animate({
          scrollTop: scrollto
        }, 1500, 'easeInOutExpo');
      }
    }
  });

  // Mobile Navigation
  if ($('.nav-menu').length) {
    var $mobile_nav = $('.nav-menu').clone().prop({
      class: 'mobile-nav d-lg-none'
    });
    $('body').append($mobile_nav);
    $('body').prepend('<button type="button" class="mobile-nav-toggle d-lg-none"><i class="icofont-navigation-menu"></i></button>');
    $('body').append('<div class="mobile-nav-overly"></div>');

    $(document).on('click', '.mobile-nav-toggle', function (e) {
      $('body').toggleClass('mobile-nav-active');
      $('.mobile-nav-toggle i').toggleClass('icofont-navigation-menu icofont-close');
      $('.mobile-nav-overly').toggle();
    });

    $(document).on('click', '.mobile-nav .drop-down > a', function (e) {
      e.preventDefault();
      $(this).next().slideToggle(300);
      $(this).parent().toggleClass('active');
    });

    $(document).click(function (e) {
      var container = $(".mobile-nav, .mobile-nav-toggle");
      if (!container.is(e.target) && container.has(e.target).length === 0) {
        if ($('body').hasClass('mobile-nav-active')) {
          $('body').removeClass('mobile-nav-active');
          $('.mobile-nav-toggle i').toggleClass('icofont-navigation-menu icofont-close');
          $('.mobile-nav-overly').fadeOut();
        }
      }
    });
  } else if ($(".mobile-nav, .mobile-nav-toggle").length) {
    $(".mobile-nav, .mobile-nav-toggle").hide();
  }

  // Navigation active state on scroll
  var nav_sections = $('section');
  var main_nav = $('.nav-menu, #mobile-nav');

  $(window).on('scroll', function () {
    var cur_pos = $(this).scrollTop() + 200;

    nav_sections.each(function () {
      var top = $(this).offset().top,
        bottom = top + $(this).outerHeight();

      if (cur_pos >= top && cur_pos <= bottom) {
        if (cur_pos <= bottom) {
          main_nav.find('li').removeClass('active');
        }
        main_nav.find('a[href="#' + $(this).attr('id') + '"]').parent('li').addClass('active');
      }
      if (cur_pos < 300) {
        $(".nav-menu ul:first li:first").addClass('active');
      }
    });
  });

  // Toggle .header-scrolled class to #header when page is scrolled
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $('#header').addClass('header-scrolled');
    } else {
      $('#header').removeClass('header-scrolled');
    }
  });

  if ($(window).scrollTop() > 100) {
    $('#header').addClass('header-scrolled');
  }

  // Back to top button
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $('.back-to-top').fadeIn('slow');
    } else {
      $('.back-to-top').fadeOut('slow');
    }
  });

  $('.back-to-top').click(function () {
    $('html, body').animate({
      scrollTop: 0
    }, 1500, 'easeInOutExpo');
    return false;
  });

  // jQuery counterUp
  $('[data-toggle="counter-up"]').counterUp({
    delay: 10,
    time: 1000
  });

  // Testimonials carousel (uses the Owl Carousel library)
  $(".testimonials-carousel").owlCarousel({
    autoplay: true,
    dots: true,
    loop: true,
    responsive: {
      0: {
        items: 1
      },
      768: {
        items: 2
      },
      900: {
        items: 3
      }
    }
  });

  // Porfolio isotope and filter
  $(window).on('load', function () {
    var portfolioIsotope = $('.portfolio-container').isotope({
      itemSelector: '.portfolio-item'
    });

    $('#portfolio-flters li').on('click', function () {
      $("#portfolio-flters li").removeClass('filter-active');
      $(this).addClass('filter-active');

      portfolioIsotope.isotope({
        filter: $(this).data('filter')
      });
      aos_init();
    });

    // Initiate venobox (lightbox feature used in portofilo)
    $(document).ready(function () {
      $('.venobox').venobox({
        'share': false
      });
    });
  });

  // Portfolio details carousel
  $(".portfolio-details-carousel").owlCarousel({
    autoplay: true,
    dots: true,
    loop: true,
    items: 1
  });

  // Init AOS
  function aos_init() {
    AOS.init({
      duration: 1000,
      once: true
    });
  }
  $(window).on('load', function () {
    aos_init();
  });

})(jQuery);

$("#addContact").click(function (e) {
  e.preventDefault();
  var name = $("#name").val();
  var email = $("#email").val();
  var subject = $("#subject").val();
  var message = $("#message").val();

  $.ajax({
    url: 'Home/contact',
    data: ({ title: title }),
    type: 'post',
    success: function (data) {
      console.log(response);
    }
  });

})


$(".basic_details").click(function (e) {
  var table_name = $(this).attr("data-table-name");
  window.location.href = "/Home/basic_details?page_name=" + table_name;
})



$("#send_basic_details").click(function (e) {

  e.preventDefault();

  var firstname = $("#firstname").val();
  var dob = $("#dob").val();
  var lastname = $("#lastname").val();
  var phone = $("#phone").val();
  var email = $("#email").val();
  var consumer_phone = $("#consumer-phone").val();
  var pincode = $("#pincode").val();
  var state = $("#state").val();
  var address = $("#address").val();

  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  var intRegex = /[0-9 -()+]+$/;
  var letters = /^[A-Za-z]+$/;

  var base_url = window.location.origin;

  /*

  if( firstname == ''){
    $("html, body").animate({ scrollTop: 0 }, "slow");
    $(".err_firstname").show();
    $(".err_firstname").html("<span>Valid Name Required</span>");
    return;
  }else{$(".err_firstname").hide();}

  if( dob == ''){
    $("html, body").animate({ scrollTop: 0 }, "slow");
    $(".err_dob").show();
    $(".err_dob").html("<span>Valid Date Required</span>");
    return;
  }else{$(".err_dob").hide();}


  if( lastname == ''){
    $("html, body").animate({ scrollTop: 0 }, "slow");
    $(".err_lastname").show();
    $(".err_lastname").html("<span>Valid Last Name Required</span>");
    return;
  }else{$(".err_lastname").hide();}


  if( email == ''){
    $("html, body").animate({ scrollTop: 0 }, "slow");
    $(".err_email").show();
    $(".err_email").html("<span>Valid Email Required</span>");
    return;
  }else{$(".err_email").hide();}


  if( !(regex.test(email)) ){
    $("html, body").animate({ scrollTop: 0 }, "slow");
    $(".err_email").show();
    $(".err_email").html("<span>Valid Email Required</span>");
    return;
    }else{$(".err_email").hide();}


  if( phone == ''){
    $("html, body").animate({ scrollTop: 0 }, "slow");
    $("#phone").focus();
    $(".err_phone").show();
    $(".err_phone").html("<span>Valid Phone Required</span>");
    return;
  }else{$(".err_phone").hide();}


  if( pincode == '' ){
    $("html, body").animate({ scrollTop: 0 }, "slow");
    $("#pincode").focus();
    $(".err_pincode").show();
    $(".err_pincode").html("<span>Valid Pincode Required</span>");
    return;
  }else{$(".err_pincode").hide();}


  if( state == ''){
    $("html, body").animate({ scrollTop: 0 }, "slow");
    $("#state").focus();
    $(".err_state").show();
    $(".err_state").html("<span>Valid State Required</span>");
    return;
  }else{ $(".err_state").hide();}


  if( address == ''){
    $("html, body").animate({ scrollTop: 0 }, "slow");
    $("#address").focus();
    $("err_address").show();
    return;
  }else{$("#err-consumer-address").hide();}

  var adharFront = $("#adharFront").val();
  var adhar_back = $("#adhar_back").val();

  if( adharFront == ''){
    alert("Please Upload Adhar Front Side");
    return;
  }
  if( adhar_back == ''){
    alert("Please Upload Adhar Back Side");
    return;
  }
*/

  var page_name = $("#page_name").val();
  var base_url = window.location.origin;

  $.blockUI({
    css: { fontFamily: 'Roboto', backgroundColor: '#fffff', color: '#74c2e1', border: 'none', width: '20%', backgroundColor: 'none' },
    baseZ: 2000
  });


  $.ajax({
    url: base_url + "/BasicDetails/saveBasicDetails",
    type: "POST",
    data: new FormData(document.getElementById("notice-data")),
    contentType: false,
    processData: false,

    success: function (response) {
      if (response == "3") {
        $.unblockUI();
        $.confirm({
          title: 'Already Registered Member',
          content: 'Kindly Log in to continue',
          type: 'red',
          typeAnimated: true,
          buttons: {
            tryAgain: {
              text: 'Login',
              btnClass: 'btn-red',
              action: function () {
              }
            },
            close: function () {
            }
          }
        });
        $.unblockUI();

        $("#logiModal").modal('show');
        return;
      } else {
        $.unblockUI();
        window.location.href = base_url + "/Notice/defendantView";
      }
    }
  });

})






$("#save_pf_claim").click(function (e) {
  e.preventDefault();
  var base_url = window.location.origin;
  $.ajax({
    url: base_url + "/Notice/save_pf_claim",
    type: "POST",
    data: new FormData(document.getElementById("notice-data")),
    contentType: false,
    processData: false,
    success: function (response) {
      if (response == "1") {
        window.location.href = base_url + "/Checkout";
        return;
      }
      if (response == '2') {
        alert("Something Wents Wrong Please Try After Some Time");
      }

    }
  });


})




$("#esiClaimFinalSubmit").click(function (e) {
  e.preventDefault();
  var base_url = window.location.origin;

  if ($('#preloader').length) {
    $('#preloader').delay(100).fadeOut('slow', function () {
      $(this).remove();
    });
  }

  $.ajax({
    url: base_url + "/Employee/esiClaimFinalSubmit",
    type: "POST",
    data: new FormData(document.getElementById("notice-data")),
    contentType: false,
    processData: false,

    success: function (response) {

      if (response == "1") {
        window.location.href = base_url + "/congoPage";
        return;
      }
      if (response == '2') {
        alert("Something Wents Wrong Please Try After Some Time");
      }

    }
  });


})

$("#takeToMyNotice").click(function () {
  var base_url = window.location.origin;
  window.location.href = base_url + "/";
});


$("#salaryFinalSubmit").click(function (e) {

  e.preventDefault();
  var base_url = window.location.origin;

  $.ajax({
    url: base_url + "/Employee/salaryFinalSubmit",
    type: "POST",
    data: new FormData(document.getElementById("notice-data")),
    contentType: false,
    processData: false,

    success: function (response) {

      if (response == "1") {
        window.location.href = base_url + "/congoPage";
        return;
      }
      if (response == '2') {
        alert("Something Wents Wrong Please Try After Some Time");
      }

    }
  });


})



$("#harrasmentFinalSubmit").click(function (e) {

  e.preventDefault();
  var base_url = window.location.origin;

  $.ajax({
    url: base_url + "/Employee/harrasmentFinalSubmit",
    type: "POST",
    data: new FormData(document.getElementById("notice-data")),
    contentType: false,
    processData: false,

    success: function (response) {

      if (response == "1") {
        window.location.href = base_url + "/congoPage";
        return;
      }
      if (response == '2') {
        alert("Something Wents Wrong Please Try After Some Time");
      }

    }
  });

})


$("#userSignUp").click(function () {


  var first_name = $("#first_name").val();
  var last_name = $("#last_name").val();
  var email = $("#email_id").val();
  var phone = $("#phone_num").val();
  var password = $("#password").val();
  var dob = $("#dob").val();
  var gender = $('input[name=gender]:checked').val();
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  var intRegex = /[0-9 -()+]+$/;
  var letters = /^[A-Za-z]+$/;



  // var today = new Date();
  //   var birthDate = new Date(dob);
  //   var age = today.getFullYear() - birthDate.getFullYear();
  //   var m = today.getMonth() - birthDate.getMonth();
  //   if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
  //       age = age - 1;
  //   }

  if (first_name == '') {
    $(".error-msg").show();
    $(".error-msg").html("Please Provide Valid Name");
    $("#first_name").focus();
    $('.error-msg').delay(3000).fadeOut('slow');
    return;

  }

  if (!(first_name.match(letters))) {
    $(".error-msg").show();
    $(".error-msg").html("Please Provide Valid Name");
    $("#first_name").focus();
    $('.error-msg').delay(3000).fadeOut('slow');
    return;
  }

  if (last_name == '') {
    $(".error-msg").show();
    $(".error-msg").html("Please Provide Valid Name");
    $("#last_name").focus();
    $('.error-msg').delay(3000).fadeOut('slow');
    return;
  }

  if (!(last_name.match(letters))) {

    $(".error-msg").show();
    $(".error-msg").html("Please Provide Valid Name");
    $("#last_name").focus();
    $('#registerModal').scrollTop(0);
    $('.error-msg').delay(3000).fadeOut('slow');
    return;
  }

  if (email == '') {

    $(".error-msg").show();
    $(".error-msg").html("Please Provide Valid Email");
    $("#email_id").focus();
    $('#registerModal').scrollTop(0);
    $('.error-msg').delay(3000).fadeOut('slow');
    return;
  }

  if (!(regex.test(email))) {

    $(".error-msg").show();
    $(".error-msg").html("Please Provide Valid Email");
    $("#email_id").focus();
    $('#registerModal').scrollTop(0);
    $('.error-msg').delay(3000).fadeOut('slow');
    return;

  }

  if ((phone.length < 10) || (!intRegex.test(phone))) {
    $(".error-msg").show();
    $(".error-msg").html("Please Provide Valid Number");
    $("#phone_num").focus();
    $('#registerModal').scrollTop(0);
    $('.error-msg').delay(3000).fadeOut('slow');
    return;
  }
  if ((phone.length != 10)) {
    $(".error-msg").show();
    $(".error-msg").html("Please Provide Valid Number");
    $("#phone_num").focus();
    $('#registerModal').scrollTop(0);
    $('.error-msg').delay(3000).fadeOut('slow');
    return;
  }

  if (password == '') {

    $(".error-msg").show();
    $(".error-msg").html("Please Provide Valid Password");
    $("#password").focus();
    $('#registerModal').scrollTop(0);
    $('.error-msg').delay(3000).fadeOut('slow');
    return;
  }

  // if(dob == ''){

  //   $(".error-msg1").show();
  //   $(".error-msg1").html("Please Provide Valid Email");
  //   $("#dob").focus();
  //   $('#getStarted').scrollTop(0);
  //   $('.error-msg1').delay(3000).fadeOut('slow');
  //   return;
  // }

  // if(age < 18){
  //   alert("Age Should be greater than 18 years");
  //   return;
  // }

  var age = 12;


  var base_url = window.location.origin;

  $.ajax({
    url: base_url + "/User/",
    type: "post",
    data: {
      'first_name': first_name, 'last_name': last_name, 'email': email,
      'password': password, 'dob': dob, 'age': age, 'phone': phone, 'gender': gender
    },
    dataType: 'json',
    cache: false,

    success: function (response) {

      if (response.status == '404') {

        $(".error-msg").show();
        $(".error-msg").html(response.msg);
        $('#registerModal').animate({
          scrollTop: $(".error-msg").offset().top
        }, 800);

        $("#" + response.focus).focus();
        return;

      }

      $(".error-msg").hide();
      $(".success-msg").show();
      $(".success-msg").html(response.msg);

      $('#registerModal').animate({
        scrollTop: $(".success-msg").offset().top
      }, 800);

      $(".success-msg").focus();
      window.location.href = base_url + "/Home";

    },
    error: function (jqXHR, textStatus, errorThrown) {
      console.log(textStatus, errorThrown);
    }
  });


})


$("#loginUser").click(function () {

  var loginEmail = $("#loginEmail").val();
  var loginPass = $("#loginPassText").val();
  var redirectNoticeName = $("#noticeName").val();
  var base_url = window.location.origin;

  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;


  if (loginEmail == '') {
    alert("Email is not valid");
    $("#loginEmail").focus();
    return;
  }

  if (loginPass == '') {
    alert("Password can not be blanked");
    $("#loginPassText").focus();
    return;
  }

  $.blockUI({
    css: { fontFamily: 'Roboto', backgroundColor: '#fffff', color: '#74c2e1', border: 'none', width: '20%', backgroundColor: 'none' },
    baseZ: 2000
  });


  $.ajax({
    url: base_url + "/User/login",
    type: "post",
    data: { 'email': loginEmail, 'password': loginPass },
    success: function (response) {
      if (response == 1 || response == '1') {
        $.unblockUI();
        window.location.href = base_url + "/Home";
      } else {

        $.unblockUI();

        $("#loginEmail").val('');
        $("#loginPassText").val('');

        $.confirm({
          title: 'Invalid Credentials',
          content: 'Kindly Check the credentials',
          type: 'red',
          typeAnimated: true,
          buttons: {
            tryAgain: {
              text: 'Try again',
              btnClass: 'btn-red',
              action: function () {
              }
            },
            close: function () {
            }
          }
        });


        return;
      }
    },
    error: function (jqXHR, textStatus, errorThrown) {
      console.log(textStatus, errorThrown);
    }
  });

})



$("#logOut").click(function () {

  var action = 'logout';
  var base_url = window.location.origin;

  $.ajax({
    url: base_url + "/User/userLogOut",
    type: "post",
    data: { 'action': action },
    success: function (response) {
      window.location.href = base_url + "/Home"
    },
    error: function (jqXHR, textStatus, errorThrown) {
      console.log(textStatus, errorThrown);
    }
  });


})

$("#Mynotices").click(function () {

  var base_url = window.location.origin;
  window.location.href = base_url + "/User/userHome";
})



$("#voilationFinalSubmit").click(function (e) {

  e.preventDefault();
  var base_url = window.location.origin;

  $.ajax({
    url: base_url + "/Employee/voilationFinalSubmit",
    type: "POST",
    data: new FormData(document.getElementById("notice-data")),
    contentType: false,
    processData: false,

    success: function (response) {

      if (response == "1") {

        window.location.href = base_url + "/congoPage";
        return;
      }
      if (response == '2') {
        $.unblockUI();
        alert("Something Wents Wrong Please Try After Some Time");
      }

    }
  });

})


$("#grauityFinalSubmit").click(function (e) {

  e.preventDefault();

  var base_url = window.location.origin;

  $.ajax({
    url: base_url + "/Employee/grauityFinalSubmit",
    type: "POST",
    data: new FormData(document.getElementById("notice-data")),
    contentType: false,
    processData: false,

    success: function (response) {

      if (response == "1") {
        window.location.href = base_url + "/congoPage";
        return;
      }
      if (response == '2') {
        $.unblockUI();
        alert("Something Wents Wrong Please Try After Some Time");
      }

    }
  });

})


$("#wrongfulTerminationFinalSubmit").click(function (e) {

  e.preventDefault();

  var base_url = window.location.origin;

  $.blockUI({
    css: { fontFamily: 'Roboto', backgroundColor: '#fffff', color: '#74c2e1', border: 'none', width: '20%', backgroundColor: 'none' },
    baseZ: 2000
  });


  $.ajax({
    url: base_url + "/Employee/wrongfulTerminationFinalSubmit",
    type: "POST",
    data: new FormData(document.getElementById("notice-data")),
    contentType: false,
    processData: false,

    success: function (response) {
      if (response == "3") {
        $.unblockUI();
        $("#logiModal").modal('show');
        return;
      } else {

        $.unblockUI();
        window.location.href = base_url + "/congoPage";
      }

    }
  });
})


$("#abusePowerFinalSubmit").click(function (e) {

  e.preventDefault();

  var base_url = window.location.origin;

  $.blockUI({
    css: { backgroundColor: '#fffff', color: '#74c2e1', border: 'none', width: '30%', backgroundColor: 'none' },
    baseZ: 2000
  });

  $.ajax({
    url: base_url + "/Employee/abusePowerFinalSubmit",
    type: "POST",
    data: new FormData(document.getElementById("notice-data")),
    contentType: false,
    processData: false,


    success: function (response) {
      if (response == "3") {
        $.unblockUI();
        $("#logiModal").modal('show');
        return;
      } else {

        $.unblockUI();
        window.location.href = base_url + "/congoPage";
      }

    }
  });
})



$("#nonPaymentFinalSubmit").click(function (e) {

  e.preventDefault();
  var base_url = window.location.origin;

  $.blockUI({
    css: { backgroundColor: '#fffff', color: '#74c2e1', border: 'none', width: '20%', backgroundColor: 'none' },
    baseZ: 2000
  });

  $.ajax({
    url: base_url + "/Employee/nonPaymentFinalSubmit",
    type: "POST",
    data: new FormData(document.getElementById("notice-data")),
    contentType: false,
    processData: false,

    success: function (response) {
      if (response == "3") {
        $.unblockUI();
        $("#logiModal").modal('show');
        return;
      } else {

        $.unblockUI();
        window.location.href = base_url + "/congoPage";
      }

    }
  });

})



$("#MisconductFinalSubmit").click(function (e) {

  e.preventDefault();

  var base_url = window.location.origin;

  $.blockUI({
    css: { backgroundColor: '#fffff', color: '#74c2e1', border: 'none', width: '20%', backgroundColor: 'none' },
    baseZ: 2000
  });

  $.ajax({
    url: base_url + "/Employer/MisconductFinalSubmit",
    type: "POST",
    data: new FormData(document.getElementById("notice-data")),
    contentType: false,
    processData: false,

    success: function (response) {

      if (response == "1") {
        $.unblockUI();
        window.location.href = base_url + "/congoPage";
        return;
      }
      if (response == '2') {
        $.unblockUI();
        alert("Something Wents Wrong Please Try After Some Time");
      }

    }
  });

})


$("#suspensionFinalSubmit").click(function (e) {
  var base_url = window.location.origin;
  $.blockUI({
    css: { backgroundColor: '#fffff', color: '#74c2e1', border: 'none', width: '20%', backgroundColor: 'none' },
    baseZ: 2000
  });

  $.ajax({
    url: base_url + "/Employer/suspensionFinalSubmit",
    type: "POST",
    data: new FormData(document.getElementById("notice-data")),
    contentType: false,
    processData: false,

    success: function (response) {

      if (response == "1") {
        $.unblockUI();
        window.location.href = base_url + "/congoPage";
        return;
      }
      if (response == '2') {
        $.unblockUI();
        alert("Something Wents Wrong Please Try After Some Time");
      }

    }
  });

})


$("#saveDefendantData").click(function (e) {
  var base_url = window.location.origin;

  var model = $("#model").val();
  var function_name = $("#function").val();

  $.blockUI({
    css: { backgroundColor: '#fffff', color: '#74c2e1', border: 'none', width: '20%', backgroundColor: 'none' },
    baseZ: 2000
  });

  $.ajax({
    url: base_url + "/" + model + "/" + function_name,
    type: "POST",
    data: new FormData(document.getElementById("notice-data")),
    contentType: false,
    processData: false,

    success: function (response) {

      if (response == "1") {
        $.unblockUI();
        window.location.href = base_url + "/congoPage";
        return;
      }
      if (response == '2') {
        $.unblockUI();
        alert("Something Wents Wrong Please Try After Some Time");
      }

    }
  });

})




$("#fileNewNotice").click(function (e) {
  var base_url = window.location.origin;
  window.location.href = base_url + "/Home/fileNewNotice";
})

function sendMsg(number, otp) {

  var base_url = window.location.origin;

  $.ajax({
    url: base_url + "/sendSms.php",
    type: "post",
    data: { 'phone': number, 'otp': otp },
    success: function (response) {
    },
    error: function (jqXHR, textStatus, errorThrown) {
      console.log(textStatus, errorThrown);
    }
  });

}



$("#loginWithOtpBtn").click(function () {


  var number = $("#loginEmail").val();
  var base_url = window.location.origin;
  var phoneno = /^\d{10}$/;

  if (!(number.match(phoneno))) {
    $.confirm({
      title: 'Invalid Number',
      content: 'Only 10 Digit Number Is Allowed For OTP',
      type: 'red',
      typeAnimated: true,
      buttons: {
        tryAgain: {
          text: 'Try again',
          btnClass: 'btn-red',
          action: function () {
          }
        },
        close: function () {
        }
      }
    });
    return;
  }

  var otp = Math.floor(100000 + Math.random() * 900000);


  $.blockUI({
    css: { fontFamily: 'Roboto', backgroundColor: '#fffff', color: '#74c2e1', border: 'none', width: '20%', backgroundColor: 'none' },
    baseZ: 2000
  });

  $.ajax({
    url: base_url + "/User/checkPhone",
    type: "post",
    data: { 'phone': number, 'otp': otp },
    success: function (response) {
      if (response == '1' || response === 1) {
        $.unblockUI();
        var sendSmsResult = sendMsg(number, otp);
        alert("OTP Sent Successfully");
        $("#loginEmail").hide();
        $("#otpTextBox").show();
        $(".emailLabel").html("");
        $(".emailLabel").html("Enter OTP");
        $("#loginWithOtpBtn").hide();
        $("#verifyOtpBtn").addClass("displayBlock");
        $("#verifyOtpBtn").removeClass("displayNone");
        $(".backImage").addClass("displayBlock");
        $(".backImage").removeClass("displayNone");
        $("#loginWithPassBtn").hide();

      } else {
        $.unblockUI();
        $.confirm({
          title: 'Invalid Number',
          content: 'Phone Number Is Not Registered',
          type: 'red',
          typeAnimated: true,
          buttons: {
            tryAgain: {
              text: 'Try again',
              btnClass: 'btn-red',
              action: function () {
              }
            },
            close: function () {
            }
          }
        });
      }
    },
    error: function (jqXHR, textStatus, errorThrown) {
      console.log(textStatus, errorThrown);
    }
  });


})

$(".backImage").click(function () {
  $("#loginEmail").show();
  $("#otpTextBox").hide();
  $(".emailLabel").html("");
  $(".emailLabel").html("Email / Phone");
  $("#loginWithOtpBtn").show();
  $("#verifyOtpBtn").addClass("displayNone");
  $("#verifyOtpBtn").removeClass("displayBlock");
  $(".backImage").addClass("displayNone");
  $(".backImage").removeClass("displayBlock");
  $("#loginWithPassBtn").show();

  $("#loginUser").hide();
  $("#loginPassText").addClass("displayNone");
  $("#loginPassText").removeClass("displayBlock");

  $("#loginUser").addClass("displayNone");
  $("#loginUser").removeClass("displayBlock");


})

$("#loginWithPassBtn").click(function () {
  $("#loginPassText").removeClass("displa");
  $("#loginWithOtpBtn").hide();
  $("#loginWithPassBtn").hide();
  $("#loginUser").addClass("displayBlock");
  $("#loginUser").removeClass("displayNone");
  $("#loginPassText").addClass("displayBlock");
  $("#loginPassText").removeClass("displayNone");
  $(".backImage").addClass("displayBlock");
  $(".backImage").removeClass("displayNone");
})


$("#profile").click(function () {
  var base_url = window.location.origin;
  window.location.href = base_url + "/User/profile";
})

$(".largeImage").click(function () {

  var imageSrcUrl = $(this).attr("src");
  var modal = document.getElementById("myModal");

  var img = document.getElementById("myImg");
  var modalImg = document.getElementById("img01");

  modal.style.display = "block";
  modalImg.src = imageSrcUrl;

})

$("#closeModal").click(function (e) {
  var modal = document.getElementById("myModal");
  modal.style.display = "none";
})


$("#revenue_disputes").click(function () {
  window.location.href = "Home/revenue_disputes";
})

$("#employee_home").click(function () {
  window.location.href = "Home/employee_home";
})

$("#family_disputes").click(function () {

  window.location.href = "Home/family_disputes";
})

$("#rental_property").click(function () {

  window.location.href = "Home/rental_property";

});


$("#bank_conflicts").click(function () {

  window.location.href = "Home/bank_conflicts";

});

$("#agreement").click(function () {

  window.location.href = "Home/agreement";

});

$("#consumer_case").click(function () {

  window.location.href = "Home/consumer_case";

});

$("#insurance_disputes").click(function () {

  window.location.href = "Home/insurance_disputes";

});

$("#consumer_disputes").click(function () {

  window.location.href = "Home/consumer_disputes";

})




$("#verifyOtpBtn").click(function (e) {

  e.preventDefault();
  var otp = $("#otpTextBox").val();
  var base_url = window.location.origin;

  if (otp == '') {
    $.confirm({
      title: 'Invalid OTP',
      content: 'Kindly Check OTP',
      type: 'red',
      typeAnimated: true,
      buttons: {
        tryAgain: {
          text: 'Try again',
          btnClass: 'btn-red',
          action: function () {
          }
        },
        close: function () {
        }
      }
    });
    return;
  }


  $.blockUI({
    css: { fontFamily: 'Roboto', backgroundColor: '#fffff', color: '#74c2e1', border: 'none', width: '20%', backgroundColor: 'none' },
    baseZ: 2000
  });

  $.ajax({
    url: base_url + "/User/verifyOtp",
    type: "post",
    data: { 'otp': otp },
    success: function (response) {
      if (response == 1 || response == '1') {
        $.unblockUI();
        window.location.href = base_url + "/Home"
      } else {
        $.unblockUI();
        $.confirm({
          title: 'Invalid OTP',
          content: 'Kindly Check OTP',
          type: 'red',
          typeAnimated: true,
          buttons: {
            tryAgain: {
              text: 'Try again',
              btnClass: 'btn-red',
              action: function () {
              }
            },
            close: function () {
            }
          }
        });


        return;
      }
    },
    error: function (jqXHR, textStatus, errorThrown) {
      console.log(textStatus, errorThrown);
    }
  });

})


$("#payment_gateway").click(function (e) {

  e.preventDefault();

  $.blockUI({
    css: { fontFamily: 'Roboto', backgroundColor: '#fffff', color: '#74c2e1', border: 'none', width: '20%', backgroundColor: 'none' },
    baseZ: 2000
  });


  var base_url = window.location.origin;
  $.ajax({
    url: base_url + "/Payment/add_to_payment",
    type: "POST",
    data: new FormData(document.getElementById("notice-data")),
    contentType: false,
    processData: false,
    success: function (response) {
      if (response == "1") {
        $.unblockUI();
        window.location.href = base_url + "/Checkout";
        return;
      }
      if (response == '2') {
        $.unblockUI();
        alert("Something Wents Wrong Please Try After Some Time");
      }

    }
  });


})


function checkNoticeFile(id, tr_id) {

  var fileInput = document.getElementById(id);
  var filePath = fileInput.value;
  var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.pdf)$/i;

  if (!allowedExtensions.exec(filePath)) {

    $.confirm({
      title: 'Unsupported File Format',
      content: 'Allowed only PDF,PNG,JPEG',
      type: 'red',
      typeAnimated: true,
      buttons: {
        tryAgain: {
          text: 'Try again',
          btnClass: 'btn-red',
          action: function () {
          }
        },
        close: function () {
        }
      }
    });

    document.getElementById(tr_id).classList.add("tr-border");
    document.getElementById(tr_id).classList.remove("no-border");

    fileInput.value = '';
    return false;
  }
  else {
    $("#" + tr_id).removeClass("tr-border");
    $("#" + tr_id).addClass("no-border");

  }

}





function checkFile(id, tr_id) {

  var property = document.getElementById(id).files[0];
  var image_name = property.name;
  var image_extension = image_name.split('.').pop().toLowerCase();

  if (jQuery.inArray(image_extension, ['gif', 'jpg', 'jpeg', '', 'png', 'pdf']) == -1) {

    $.confirm({
      title: 'Unsupported File Format',
      content: 'Allowed only PDF,PNG,JPEG',
      type: 'red',
      typeAnimated: true,
      buttons: {
        tryAgain: {
          text: 'Try again',
          btnClass: 'btn-red',
          action: function () {
          }
        },
        close: function () {
        }
      }
    });

    document.getElementById(tr_id).classList.add("tr-border");
    document.getElementById(tr_id).classList.remove("no-border");
    fileInput.value = '';
    return false;
  }

  $("#" + tr_id).removeClass("tr-border");
  $("#" + tr_id).addClass("no-border");

  var base_url = window.location.origin;

  var form_data = new FormData();
  form_data.append("file",property);
  form_data.append("name",id);
  $.ajax({
    url: base_url + "/UploadFile/upload",
    method: 'POST',
    data: form_data,
    contentType: false,
    cache: false,
    processData: false,
    beforeSend: function () {
      $('#msg').html('Loading......');
    },
    success: function (data) {
      console.log(data);
      $('#msg').html(data);
    }
  });



}



function checkAudio(id, tr_id) {

  var property = document.getElementById(id).files[0];
  var image_name = property.name;
  var image_extension = image_name.split('.').pop().toLowerCase();

  if (jQuery.inArray(image_extension, ['mp3', 'mp4', 'wav', '', 'mov']) == -1) {

    $.confirm({
      title: 'Unsupported File Format',
      content: 'Allowed only PDF,PNG,JPEG',
      type: 'red',
      typeAnimated: true,
      buttons: {
        tryAgain: {
          text: 'Try again',
          btnClass: 'btn-red',
          action: function () {
          }
        },
        close: function () {
        }
      }
    });

    document.getElementById(tr_id).classList.add("tr-border");
    document.getElementById(tr_id).classList.remove("no-border");
    fileInput.value = '';
    return false;
  }

  $("#" + tr_id).removeClass("tr-border");
  $("#" + tr_id).addClass("no-border");

  var name  = $("#"+id).attr("data-name");
  var base_url = window.location.origin;

  var form_data = new FormData();
  form_data.append("file",property);
  form_data.append("name",name);
  $.ajax({
    url: base_url + "/UploadFile/upload",
    method: 'POST',
    data: form_data,
    contentType: false,
    cache: false,
    processData: false,
    beforeSend: function () {
      $('#msg').html('Loading......');
    },
    success: function (data) {
      console.log(data);
      $('#msg').html(data);
    }
  });

 
}