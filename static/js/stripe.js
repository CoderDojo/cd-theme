window.payment_amount = null;

$.extend({
  redirectPost: function(location, args) {
    var form = $('<form></form>');
    form.attr("method", "post");
    form.attr("action", location);

    $.each( args, function( key, value ) {
      var field = $('<input></input>');
      field.attr("type", "hidden");
      field.attr("name", key);
      field.attr("value", value);
      form.append(field);
    });
    
    $(form).appendTo('body').submit();
  }
});

$(document).ready(function(){
  $('.donateButton, .donateButtonCustom').click(function(e) {
    e.preventDefault();
    var donorAmount = $(this).attr('data-amount') || $('input[name="donation-amount"]').val() * 100;
    payment_amount = donorAmount;
    $.redirectPost("/payment.php", {amount: payment_amount});
  });
});
