<?php
class Klant extends Dbh {

  public function getKlanten(){
    $sql = "SELECT * FROM klantgegevens";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute();

   while($result = $stmt->fetchAll()){
     return $result;
   }
  }

  public function addKlant($klantnaam, $klantadres, $klantpostcode, $klantplaats){
    $sql = "INSERT INTO klantgegevens(klantnaam, klantadres, klantpostcode, klantplaats) VALUES (?, ?, ?, ?)";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$klantnaam, $klantadres, $klantpostcode, $klantplaats]);
    header('location: readKlant.php');
  }

  public function editKlant($klantid){
      $sql = "SELECT * FROM klantgegevens WHERE klantid=?";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$klantid]);
      $result = $stmt->fetch();
      return $result;
  }

  public function updateKlant($klantnaam, $klantadres, $klantpostcode, $klantplaats, $klantid){
      $sql = "UPDATE klantgegevens SET klantnaam = ?, klantadres = ?, klantpostcode = ?, klantplaats = ? WHERE klantid = ?";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$klantnaam, $klantadres, $klantpostcode, $klantplaats, $klantid]);
      header('location: readKlant.php');
  }

  public function deleteKlant($klantid){
      $sql = "DELETE FROM klantgegevens WHERE klantid = ?";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$klantid]);
      header('location: readKlant.php');
  }

}
?>