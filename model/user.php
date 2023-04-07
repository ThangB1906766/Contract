<?php 
    function checkUser($user, $pass){
        $conn=connectdb();
        $stmt = $conn->prepare("SELECT * FROM user WHERE user_taiKhoan = '".$user."' AND user_matKhau = '".$pass."'");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt->fetchAll();
        if(count($kq) > 0) return $kq[0]['user_role'];
        return 0;
    }
?>