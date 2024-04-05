<?php
include '../db.php';
   

 
 
 class Tafel{
    private $dbh;

    public function __construct($dbh)
    {
        $this->dbh = $dbh;

    }
    public function addTafel($tafelnummer, $bijzonderheden, $max_persoon)
    {
        return $this->dbh->execute("INSERT INTO tafel (tafelnummer, bijzonderheden, max_persoon)
        VALUES (?,?,?)",
        [$tafelnummer, $bijzonderheden, $max_persoon]);
    }

    public function selectAlltafel(){
        return $this->dbh->execute("SELECT * FROM tafel");
    }

    public function updateTafel($ID, $tafelnummer, $bijzonderheden, $max_persoon) {
        $sql = "UPDATE tafel SET   tafelnummer = ?,  bijzonderheden = ?, max_persoon = ? WHERE ID = ?";
        return $this->dbh->execute($sql, array($tafelnummer, $bijzonderheden, $max_persoon,  $ID));
    }
    

    public function gettafelById($ID) {
        $sql = "SELECT * FROM tafel WHERE ID = ?";
        $stmt = $this->dbh->execute($sql, array($ID));
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function deletetafel($ID) {
        $sql = "DELETE FROM tafel WHERE ID = ?";
        return $this->dbh->execute($sql, array($ID));
    }
}
 
?>