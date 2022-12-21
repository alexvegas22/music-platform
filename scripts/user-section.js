$("#login").click(function() {
    alert("click");
    $( "#guest-grid" ).hide();
    $( "#profile-grid" ).show();
  });

  $("#logout").click(function() {
    alert("click");
    $("#profile-grid").hide();
    $("#guest-grid").show();
  });

 