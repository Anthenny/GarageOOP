<?php
    include 'includes/class-autoload.inc.php';
    require_once 'templates/header.php';

    if(isset($_POST['submit'])){
                $auto = new Auto;

                $autokenteken = $_POST['autokenteken'];
                $automerk = $_POST['automerk'];
                $autotype = $_POST['autotype'];
                $autokmstand = $_POST['autokmstand']; 
                $klantid = $_POST['klantid'];
                
                $auto->addAuto($autokenteken, $automerk, $autotype, $autokmstand, $klantid);
            }

?>
<div class="container">
    <form class="needs-validation" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <div style="margin-top: 50px" class="form-row">
            <div class="col-md-12 mb-4">
                <label for="validationCustom01">Autokenteken</label>
                <input type="text" class="form-control" id="autokenteken" name="autokenteken"
                    placeholder="Voer het kenteken nummer in">

                <label for="validationCustom02">Automerk</label>
                <input type="text" class="form-control" id="automerk" name="automerk"
                    placeholder="Voer het automerk in">

                <label for="validationCustom03">Autotype</label>
                <input type="text" class="form-control" id="autotype" name="autotype"
                    placeholder="Voer het type auto in.">

                <label for="validationCustom05">Auto kilometer stand</label>
                <input type="text" class="form-control" id="autokmstand" name="autokmstand"
                    placeholder="Voer de kilometer stand van de auto in">

                <label for="validationCustom05">Klant id</label>
                <input type="text" class="form-control" id="klantid" name="klantid"
                    placeholder="Voer hier de klantid in">
            </div>
        </div>
        <button class="btn btn-primary" name="submit" type="submit">Verzenden</button>
    </form>
</div>
<?php
    require_once 'templates/footer.php';
?>