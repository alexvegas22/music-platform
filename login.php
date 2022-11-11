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
    <form action="" method="post">
       
      <div class="content">
        <div class="container">
          <label for="uname"><b>Nom d'utilisateur</b></label>
          <input type="text" placeholder="Entrez votre nom d'utilisateur" name="uname" required>
      
          <label for="psw"><b>Mot de passe</b></label>
          <input type="password" placeholder="Entrez votre mot de passe" name="psw" required>
      
          <button type="submit"> <a href="explore.php">Connexion</a> </button>
        </div>
      
        <div class="container" >
          <button type="button" class="cancelbtn"><a href="index.php">Annuler</a></button>
          <span class="psw">Oublié votre <a href="#">Mot de passe?</a></span>
        </div>
      </div>
    </form>
    <?php
      try{
        $cnx = new PDO('mysql:host=localhost;dbname=users','root','crosemont');
        $requete = 'SELECT * FROM users';
        $res = $cnx->query($requete);
        $res->setFetchMode(PDO::FETCH_OBJ);
        $row = $res->fetch();
        if(ISSET($_REQUEST))
        ?>
        <p> <?=$row->Nom?></p>
        <p> <?=$row->Prenom?></p>
        <p> <?=$row->Email?></p>
        <p> <?=$row->MotDePasse?></p>
        <?php
        $res->closeCursor();
          $cnx = null;
      } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
    ?>
</body>
</html>