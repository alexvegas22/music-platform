function load(){  
    checkSong();
    $("#login-grid").hide();
}

function annuler(){
   alert("click");
   $.ajax({
    type: "POST",
    url: "logout.php"
  })

}


    $("#login").click(function() {
      
      $( "#guest-grid" ).hide();
      $( "#login-grid" ).show();
    });
  
    $("#sign-in").click(function() {
      $("#guest-grid").hide();
      
    });
  
