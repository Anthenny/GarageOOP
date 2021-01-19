<?php
    include 'includes/class-autoload.inc.php';
    require_once 'templates/header.php';

    $klanten = new Klant();
    echo "<tabel>";
    foreach($klanten->getKlanten() as $klant){
            echo "<tr>".
             "<div style='margin-top: 20px; margin-bottom: -30px; border: 1px solid #dedede; border-radius: 5px; background-color: #dedede;' class='container'>Klantid: " . $klant["klantid"] . "<br/>".
             "<td>"."Klantnaam: " . $klant["klantnaam"] . "</td>"."<br/>".
             "<td>"."Klantadres: " . $klant["klantadres"] . "</td>"."<br/>".
             "<td>"."Klantpostcode: " . $klant["klantpostcode"] . "</td>"."<br/>".
             "<td>"."Klantplaats: " . $klant["klantplaats"] . "</td>"."<br/>"."<br/>".
            "</br></div>" .
             "<div class='container'>
            <button style='margin-top: -30px;'type='button' class='btn btn-success'><a style='color: white; text-decoration: none;' 
            href=editFormKlant.php?klantid=$klant[klantid]>Bewerken</a></button>";
            echo "<button style='margin-left: 10px; margin-top: -30px;' type='button' class='btn btn-danger'><a style='color: white; text-decoration: none;' href='klant.process.php?klantid=$klant[klantid]&send=del'>Verwijderen</a></button></div>";
            echo "</br>";
    }    
    echo "</tabel>";
    echo "<div class='container'><style'margin-top: 20px; margin-bottom: 60px; margin-left: 20px' type='button' class='btn btn-primary'><a style='color: white; text-decoration: none' href='index.php'>Terug naar menu</a></style></div>";   

    require_once 'templates/footer.php';