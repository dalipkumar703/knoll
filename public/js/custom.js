$(document).on('typeahead:opened', function(event, datum) {
  var width = $(event.target).width();
  $('.dropdown-menu').width(width);
});