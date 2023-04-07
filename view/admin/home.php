<?php 
    SESSION_start();
    ob_start();
    include "headerAdmin.php";
    if(isset($_SESSION['user_role']) && ($_SESSION['user_role']==1)){
?>
        <body>
            <h1>Trang chủ (home.php)</h1>
        </body>

<?php
    }else{
        header('Location: /controller/index.php');
    }
include "footerAdmin.php";
?>
