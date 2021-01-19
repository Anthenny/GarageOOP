<?php
    include 'includes/class-autoload.inc.php';
    $klant = new Klant;
    
    if(isset($_POST['update'])){
        $klantid = $_GET['klantid'];
        $klantnaam = $_POST['klantnaam'];
        $klantadres = $_POST['klantadres'];
        $klantpostcode = $_POST['klantpostcode'];
        $klantplaats = $_POST['klantplaats'];

        $klant->updateKlant($klantnaam, $klantadres, $klantpostcode, $klantplaats, $klantid);
    }else if($_GET['send'] ==='del'){
        $klantid = $_GET['klantid'];

        $klant->deleteKlant($klantid);
    }
?>