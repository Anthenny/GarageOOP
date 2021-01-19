<?php
    include 'includes/class-autoload.inc.php';
    require_once 'templates/header.php';

    $klanten = new Klant;
    $klant = $klanten->editKlant($_GET['klantid']);

    $klantid = $klant['klantid'];
    $klantnaam = $klant['klantnaam'];
    $klantadres = $klant['klantadres'];
    $klantpostcode = $klant['klantpostcode'];
    $klantplaats = $klant['klantplaats'];

?>
<div class="container">
    <form class="needs-validation" action="klant.process.php?klantid=<?= $klantid; ?>" method="post">
        <div class="form-row">
            <div style="margin-top: 50px" class="col-md-12 mb-4">
                <label for="validationCustom01">Nieuwe Voornaam</label>
                <input type="text" class="form-control" id="klantnaam" name="klantnaam" value="<?= $klantnaam; ?>">
            </div>
            <div class="col-md-12 mb-4">
                <label for="validationCustom02">Nieuw Adres</label>
                <input type="text" class="form-control" id="klantadres" name="klantadres" value="<?= $klantadres; ?>">
            </div>
            <div class="col-md-12 mb-4">
                <label for="validationCustom03">Nieuwe Postcode</label>
                <input type="text" class="form-control" id="klantpostcode" name="klantpostcode"
                    value="<?= $klantpostcode; ?>">
            </div>
            <div class="col-md-12 mb-4">
                <label for="validationCustom05">Nieuwe Plaats</label>
                <input type="text" class="form-control" id="klantplaats" name="klantplaats"
                    value="<?= $klantplaats; ?>">
            </div>
        </div>
        <button class="btn btn-success" name="update" type="submit">Update</button>
    </form>
</div>
<?php
    require_once 'templates/footer.php';
?>