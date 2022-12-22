function load(){  
    checkSong();
    $("#login-grid").hide();
}

function logout() {
    var xhr = new XMLHttpRequest();
    xhr.onload = function() {
        document.location = 'index.php';
    }
    xhr.open('GET', 'Modele/controller/logout.php', true);
    xhr.send();
}



    $("#login").click(function() {
      
      $( "#guest-grid" ).hide();
      $( "#login-grid" ).show();
    });
  
    $("#sign-in").click(function() {
      $("#guest-grid").hide();
      
    });
  
