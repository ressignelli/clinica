$('.button').click(function() {
  $.ajax({
    type: "POST",
    url: "agendapac.php",
    data: { name: "John" }
  }).done(function( msg ) {
    alert( "Data Saved: " + msg );
  });
});