let logged = 0;

function checkUser(){
  if (logged == 1){
      $("#guest-grid").hide();
      $("#profile-grid").show();
  } 
  if (logged == 0){
      $("#profile-grid").hide();
      $("#guest-grid").show();  
  }
}
$( document ).ready(function() {
    $("#login").click(function() {
      $( "#guest-grid" ).hide();
      $( "#profile-grid" ).show();
    });
  
    $("#logout").click(function() {
      $("#profile-grid").hide();
      $("#guest-grid").show();
    });
});