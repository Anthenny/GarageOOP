<?php
    require_once 'classes/user.class.php';
    require_once 'classes/dbh.class.php';
    require_once 'classes/uservalidator.class.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="login.css"> 

    <title>Login | Klant</title>
  </head>
  <body>
  <?php 

    if(isset($_POST['signIn'])){
      //validate entries
      $validation = new RegistratieValidator($_POST);
      $errors = $validation->validateForm(); 
          if(!$errors){
          
              $user = new User();

              $name = $_POST['name'];
              $email = $_POST['email'];
              $pwd = $_POST['pwd'];
              $pwdRepeat = $_POST['pwdRepeat'];
              
              $user->createUser($name, $email, $pwd);
          }
    }
      ?>

    <div class="container-1">
      <h2>Signup formulier</h2>
        <form class="form-container-1" action="<?php echo $_SERVER['PHP_SELF']  ?>" method="POST">
          <label for=""><b>Gebruikersnaam</b></label>
          <input type="text" name="name" placeholder="Voer uw gebruikernaam in" value="<?php echo $_POST['name'] ?? '' ?>">
          <div class="error">
            <?php echo $errors['name'] ?? '' ?>
          </div>
          <br>
          <label for=""><b>Email</b></label>
          <input type="text" name="email" placeholder="Voer uw email in" value="<?php echo $_POST['email'] ?? '' ?>">
          <div class="error">
            <?php echo $errors['email'] ?? '' ?>
          </div>
          <br>
          <label for=""><b>Wachtwoord</b></label>
          <input type="password" name="pwd" placeholder="Voer uw wachtwoord in" value="<?php echo $_POST['pwd'] ?? '' ?>">
          <div class="error">
            <?php echo $errors['pwd'] ?? '' ?>
          </div>
          <br>
          <label for=""><b>Herhaal Wachtwoord</b></label>
          <input type="password" name="pwdRepeat" placeholder="Herhaal wachtwoord in" value="<?php echo $_POST['pwdRepeat'] ?? '' ?>">
          <div class="error">
            <?php echo $errors['pwdRepeat'] ?? '' ?>
          </div>
          <br>
          <button type="submit" name="signIn">Sign in</button>
        </form>

    </div>
  </body>
</html>