(function($) {


$('.alert').addClass('animated bounceInRight');

$('.close').addClass('animated bounce');

$('.close').click(function() {
  $('.alert').hide('fast');
});


})( jQuery );
