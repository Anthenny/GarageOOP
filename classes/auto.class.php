<?php

class Auto extends Dbh {

    public function getAuto(){
      $sql = "SELECT * FROM autogegevens";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute();
  
     while($result = $stmt->fetchAll()){
       return $result;
     }
    }
  
    public function addAuto($autokenteken, $automerk, $autotype, $autokmstand, $klantid){
      $sql = "INSERT INTO autogegevens(autokenteken, automerk, autotype, autokmstand, klantid) VALUES (?, ?, ?, ?, ?)";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$autokenteken, $automerk, $autotype, $autokmstand, $klantid]);
      header('location: readAuto.php');
    }

    public function editAuto($autokenteken){
        $sql = "SELECT * FROM autogegevens WHERE autokenteken=?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$autokenteken]);
        $result = $stmt->fetch();
        return $result;
    }

    public function updateAuto($automerk, $autotype, $autokmstand, $klantid, $autokenteken){
        $sql = "UPDATE autogegevens SET automerk = ?, autotype = ?, autokmstand = ?, klantid = ? WHERE autokenteken = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$automerk, $autotype, $autokmstand, $klantid, $autokenteken]);
        header('location: readAuto.php');
    }

    public function deleteAuto($autokenteken){
      $sql = "DELETE FROM autogegevens WHERE autokenteken = ?";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$autokenteken]);
      header('location: readAuto.php');
    }
}
?>