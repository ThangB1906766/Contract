<?php 
    function getAllDataInTable(){
        $conn=connectdb();
        $stmt = $conn->prepare("SELECT * FROM hopdong");
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        $array_result = $stmt->fetchAll(); 
        return $array_result;
    }
?>