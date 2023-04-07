
<?php
    // session_start();
    // ob_start();
    // if(isset($_SESSION['user_role']) && ($_SESSION['user_role']==1)){
        

        include "../view/header.php";
        if(isset($_GET['act'])){
            $act = $_GET['act'];
                switch ($act) {
                    case 'home':
                        include "../view/home.php";
                        break;
                    case 'dangxuat':
                        if(isset($_SESSION['user_role'])){
                            unset($_SESSION['user_role']);
                        }
                        header('location: index.php');
                    default:
                        include "../view/login.php";
                        break;
                }
        }else{
            include "../view/login.php";
        }
        include "../view/footer.php";


    //}
    // else{
    //     header('location: ../view/login.php');
    //     // header('location: index.php');

    // }

?>


 