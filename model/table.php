<?php 
    function getAllDataInTable(){
        $conn=connectdb();
        $stmt = $conn->prepare("SELECT * FROM hopdong");
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        $array_result = $stmt->fetchAll(); 
        return $array_result;
    }

    function deleteData($id){
        $conn=connectdb();
        $sql = "DELETE FROM hopdong WHERE hd_id=".$id;
        $conn->exec($sql);
       
    }

    function getDataById($id){
        $conn=connectdb();
        $stmt = $conn->prepare("SELECT * FROM hopdong WHERE hd_id=".$id);
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        $array_result = $stmt->fetchAll(); 
        return $array_result;
    }
?>