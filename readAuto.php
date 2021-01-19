<?php
    include 'includes/class-autoload.inc.php';
    require_once 'templates/header.php';

    $autos = new Auto();
    echo "<tabel>";
    foreach($autos->getAuto() as $auto){
            echo "<tr>".
             "<div style='margin-top: 20px; margin-bottom: -30px; border: 1px solid #dedede; border-radius: 5px; background-color: #dedede;' class='container'>Klantid: " . $auto["klantid"] . "<br/>".
             "<td>"."Autokenteken: " . $auto["autokenteken"] . "</td>"."<br/>".
             "<td>"."Automerk: " . $auto["automerk"] . "</td>"."<br/>".
             "<td>"."Autotype: " . $auto["autotype"] . "</td>"."<br/>".
             "<td>"."Autokmstand: " . $auto["autokmstand"] . "</td>"."<br/>"."<br/>".
            "</br></div>" .
             "<div class='container'>
            <button style='margin-top: -30px;'type='button' class='btn btn-success'><a style='color: white; text-decoration: none;' 
            href=editFormAuto.php?autokenteken=$auto[autokenteken]>Bewerken</a></button>";
            echo "<button style='margin-left: 10px; margin-top: -30px;' type='button' class='btn btn-danger'><a style='color: white; text-decoration: none;' href='auto.process.php?autokenteken=$auto[autokenteken]&send=del'>Verwijderen</a></button></div>";
            echo "</br>";
    }    
    echo "</tabel>";
    echo "<div class='container'><style'margin-top: 20px; margin-bottom: 60px; margin-left: 20px' type='button' class='btn btn-primary'><a style='color: white; text-decoration: none' href='indexAuto.php'>Terug naar menu</a></style></div>";   

    require_once 'templates/footer.php';
?>