<?php
include '../db.php';
   

 
 
 class Reservering{
    private $dbh;

    public function __construct($dbh)
    {
        $this->dbh = $dbh;

    }
    public function addReservering($naam, $tijd, $datum)
    {
        return $this->dbh->execute("INSERT INTO reservering (naam, tijd, datum)
        VALUES (?,?,?)",
        [$naam, $tijd, $datum]);
    }

    public function selectAllreservering(){
        return $this->dbh->execute("SELECT * FROM reservering");
    }

    public function updateReservering($ID, $naam, $tijd, $datum) {
        $sql = "UPDATE reservering SET   naam = ?,  tijd = ?, datum = ? WHERE ID = ?";
        return $this->dbh->execute($sql, array($naam, $tijd, $datum,  $ID));
    }
    

    public function getreserveringById($ID) {
        $sql = "SELECT * FROM reservering WHERE ID = ?";
        $stmt = $this->dbh->execute($sql, array($ID));
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function deletereservering($ID) {
        $sql = "DELETE FROM reservering WHERE ID = ?";
        return $this->dbh->execute($sql, array($ID));
    }
}
 
?>