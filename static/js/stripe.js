window.payment_amount = null;

var handler = StripeCheckout.configure({
  key: 'pk_live_hmWhECrTqVomfEeabgcjfjS3',
  token: function(token) {
  	$.post( "/payment.php", {
    		stripeToken: token.id,
    		email: token.email,
    		amount: payment_amount
  	});
  }
});

$(document).ready(function(){
  $('.donateButton, .donateButtonCustom').click(function(e) {
    var y = $(this).attr('data-name')
    var z = $(this).attr('data-description')
    var w = 'EUR';
    var x = $(this).attr('data-amount') || $('input[name="donation-amount"]').val() * 100;
    handler.open({
      name: y,
      description: z,
      amount: x,
      currency: w,
    });
    payment_amount = x;
    e.preventDefault();
  });
});
