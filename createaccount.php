<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\login.css">
    <link rel="stylesheet" href="css\style.css">
    <title>Connexion</title>
</head>
<body>
    <form action="action_page.php" method="post">
       
      <div class="content">
        <div class="container">
          <label for="uname"><b>Prénom</b></label>
          <input type="text" placeholder="Entrez votre prénom" name="firstname" required>
          <label for="uname"><b>Nom</b></label>
          <input type="text" placeholder="Entrez votre nom" name="lastname" required>
          <label for="uname"><b>Adresse électronique</b></label>
          <input type="text" placeholder="Entrez votre addresse électronique" name="email" required>
          <label for="uname"><b>Nom d'utilisateur</b></label>
          <input type="text" placeholder="Entrez votre nom d'utilisateur" name="uname" required>
      
          <label for="psw"><b>Mot de passe</b></label>
          <input type="password" placeholder="Entrez votre mot de passe" name="psw" required>
          <label for="psw"><b>Confirmez votre mot de passe</b></label>
          <input type="password" name="psw" required>
      
          <button type="submit"> <a href="explore.html">Connexion</a> </button>
        </div>
      
        <div class="container" >
          
          <b class="centered-text">Vous avez déja un <a href="login.php">compte?</a></b>
        </div>
      </div>
    </form>
</body>
</html>