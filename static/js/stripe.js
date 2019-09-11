window.payment_amount = null;

$(document).ready(function(){
  $('.donateButton, .donateButtonCustom').click(function(e) {
    e.preventDefault();
    var donorAmount = $(this).attr('data-amount') || $('input[name="donation-amount"]').val() * 100;
    payment_amount = donorAmount;
    $.post( "/payment.php", {
      amount: payment_amount
    });
  });
});
