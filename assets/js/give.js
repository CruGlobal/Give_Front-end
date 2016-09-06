$(function() {
  $('#menu-toggle').click(function(e) {
    e.preventDefault();
    $('#wrapper').toggleClass('toggled');
  });

  $('.commentLink').click(function() {
    $(this).next().toggle();
    return false;
  });

  $('.tab-btn').click(function() {

  $('.tab-btn').removeClass('on');
  $(this).addClass('on');

    tabTarget = $(this).data('target');
    $('.cart-tab').removeClass('show');
    $('.'+tabTarget).addClass('show');
    return false;

    console.log('tab');
  });

  $('#billingAddressValue').click(function() {
    $('#address-billing-current, #address-billing-new').toggleClass('on');
  });

  $('.bank-explain-trigger').click(function() {
    $('.bank-explain-wrap').toggleClass('on');
    return false;
  });

  $('.is-toggle').click(function() {
    $('.is-toggle-wrap').toggleClass('open');
    return false;
  });

  $('.slick-related-carousel').slick({
    slidesToShow: 3,
    slidesToScroll: 3,
    adaptiveHeight: true,
    dots: false,
    useCSS: true,
    cssEase: 'ease-in-out',
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
          infinite: true,
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 549,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

});