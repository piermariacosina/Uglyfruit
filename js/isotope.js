(function($) {
$(document).ready(function(){
var $container = $('#posts_list');
// initialize isotope
$container.isotope({
  itemSelector : '.item'
});

$('#categories a').click(function(){
  var selector = $(this).attr('data-filter');
  $container.isotope({ filter: selector });
  return false;
});
});
})(jQuery);