<!DOCTYPE html>
<html lang="en">
<head>
    <?php
   
     include '../db.php';
    class Rekening{
        private $dbh;
 
        public function __construct(DB $dbh)
        {
            $this->dbh = $dbh;
 
        }
        public function addRekening($naam, $tafelnummer, $totaal_bedrag)
        {
            return $this->dbh->execute("INSERT INTO rekening(naam, tafelnummer, totaal_bedrag)
            VALUES (?,?,?)",
            [$naam, $tafelnummer, $totaal_bedrag]);
        }

        public function selectAllrekening(){
            return $this->dbh->execute("SELECT * FROM rekening");
        }
    
        public function updateRekening($ID, $naam, $tafelnummer, $totaal_bedrag) {
            $sql = "UPDATE rekening SET naam = ?,  tafelnummer = ?,  totaal_bedrag = ? WHERE ID = ?";
            return $this->dbh->execute($sql, array($naam, $tafelnummer, $totaal_bedrag,  $ID));
        }
        
    
        public function getrekeningById($ID) {
            $sql = "SELECT * FROM rekening WHERE ID = ?";
            $stmt = $this->dbh->execute($sql, array($ID));
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
        public function deleterekening($ID) {
            $sql = "DELETE FROM rekening WHERE ID = ?";
            return $this->dbh->execute($sql, array($ID));
        }
        
    }
    
   
    ?>
 
</head>
 
</html>