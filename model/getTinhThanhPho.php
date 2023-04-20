<?php
    function getTinhThanhPho(){
        $conn=connectdb();
        $stmt = $conn->prepare("SELECT * FROM tinhthanhpho");
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        $array_tinhthanhpho= $stmt->fetchAll(); 
        return $array_tinhthanhpho;
    }
?>
