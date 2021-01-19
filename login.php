<header><link rel="stylesheet" href="login.css"></header>

<?php
    require_once 'classes/user.class.php';
    require_once 'classes/dbh.class.php';
    require_once 'classes/uservalidator.class.php';
    require_once 'templates/header.php';

    if(isset($_POST['login'])){
      //validate entries
      $validation = new LoginValidator($_POST);
      $errors = $validation->validateForm(); 
          if(!$errors){

              $user = new User();
              $name = $_POST['name'];
              $pwd = $_POST['pwd'];
              $user->loginUser($name, $pwd);
          }
    }
?>
    <div class="container-1">
      <h2>Login formulier</h2>
        <form class="form-container-1" action="<?php echo $_SERVER ['PHP_SELF'] ?>" method="POST">
          <label for=""><b>Gebruikersnaam</b></label>
          <input type="text" name="name"  placeholder="Voer uw gebruikernaam in" value="<?php echo $name ?? ''  ?>">
          <div class="error">
            <?php echo $errors['name'] ?? '' ?>
          </div>
          <br>
          <label for=""><b>Wachtwoord</b></label>
          <input type="password" name='pwd' placeholder="Voer uw wachtwoord in">
          <div class="error">
            <?php echo $errors['pwd'] ?? '' ?>
          </div>
          <br>
          <button type="submit" name="login">Login</button>
        </form>
      
    </div>
<?php
  require_once 'templates/footer.php';
?>
