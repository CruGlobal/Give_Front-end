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

});