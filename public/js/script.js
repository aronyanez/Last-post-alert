(function($) {

//change settings
//$('.alert').css("background-color", $('.alert').data('color') );
//$('.alert').css("color", $('.alert').data('letter') );


//show animation
var animation=$('.alert').data('animation');
$('.alert').addClass('animated '+ animation);


//close
$('.close').addClass('animated bounce');

$('.close').click(function() {
  $('.alert').hide('fast');
});




})( jQuery );
