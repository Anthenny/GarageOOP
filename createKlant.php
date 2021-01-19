<?php
    include 'includes/class-autoload.inc.php';
    require_once 'templates/header.php';

    if(isset($_POST['submit'])){
        //validate entries
        $validation = new Validate($_POST);
        $errors = $validation->validateForm(); 
            if(!$errors){
            
                $klant = new Klant;

                $klantnaam = $_POST['klantnaam'];
                $klantadres = $_POST['klantadres'];
                $klantpostcode = $_POST['klantpostcode'];
                $klantplaats = $_POST['klantplaats']; 
                
                $klant->addKlant($klantnaam, $klantadres, $klantpostcode, $klantplaats);
            }
    }
?>
<!-- Verzend formulier -->
<div class="container">
    <form class="needs-validation" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <div class="form-row">
            <div style="margin-top: 50px" class="col-md-12 mb-4">
                <label for="validationCustom01">Voornaam:</label>
                <input type="text" class="form-control" name="klantnaam" value="<?php echo $_POST['klantnaam'] ?? '' ?>"
                    placeholder="Voer uw voornaam in">
                <div class="error">
                    <?php echo $errors['klantnaam'] ?? '' ?>
                </div>
            </div>
            <div class="col-md-12 mb-4">
                <label for="validationCustom02">Adres:</label>
                <input type="text" class="form-control" name="klantadres"
                    value="<?php echo $_POST['klantadres'] ?? '' ?>" placeholder="Voer uw adres hier in">
                <div class="error">
                    <?php echo $errors['klantadres'] ?? '' ?>
                </div>
            </div>
            <div class="col-md-12 mb-4">
                <label for="validationCustom03">Postcode:</label>
                <input type="text" class="form-control" name="klantpostcode"
                    value="<?php echo $_POST['klantpostcode'] ?? '' ?>" placeholder="Voer uw postcode hier in">
                <div class="error">
                    <?php echo $errors['klantpostcode'] ?? '' ?>
                </div>
            </div>
            <div class="col-md-12 mb-4">
                <label for="validationCustom05">Plaats:</label>
                <input type="text" class="form-control" name="klantplaats"
                    value="<?php echo $_POST['klantplaats'] ?? '' ?>" placeholder="Voer uw plaats hier in">
                <div class="error">
                    <?php echo $errors['klantplaats'] ?? '' ?>
                </div>
            </div>
        </div>
        <button class="btn btn-success" name="submit" type="submit">Verzenden</button>
    </form>
</div>
<?php
    require_once 'templates/footer.php';
?>