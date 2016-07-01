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
    var donorName = $(this).attr('data-name')
    var donorDescription = $(this).attr('data-description')
    var donorCurrency = 'EUR';
    var donorAmount = $(this).attr('data-amount') || $('input[name="donation-amount"]').val() * 100;
    handler.open({
      name: donorName,
      description: donorDescription,
      amount: donorAmount,
      currency: donorCurrency,
    });
    payment_amount = x;
    e.preventDefault();
  });
});
