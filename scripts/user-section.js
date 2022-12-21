
$(document).ready(function() {

  $("#login").click(function() {
    
    $( "#guest-grid" ).hide();
    $( "#login-grid" ).show();
  });

  $("#sign-in").click(function() {
    $("#guest-grid").hide();
    $( "#sign-in-grid" ).show();
    
  });
  $("#annuler").click(function() {
    
    $( "#guest-grid" ).show();
    $( "#login-grid" ).hide();
  });

});
