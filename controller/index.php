
<?php
        session_start();
        ob_start();
    // if(isset($_SESSION['user_role']) && ($_SESSION['user_role']==1)){
        
        include "../model/connectdb.php";
        include "../model/user.php"; 
        include "../view/header.php";

        if(isset($_GET['act'])){
            $act = $_GET['act'];
                switch ($act) {
                    case 'dangnhap':
                        if((isset($_POST['login'])) && ($_POST['login'])){
                            $user = $_POST['user'];
                            $pass = $_POST['pass'];
                            $role = checkUser($user, $pass);
                            if($role == 1){
                                $_SESSION['user_role'] = $role;
                                header('location: /view/admin/home.php');
                            }else{
                                // $_SESSION['user_role'] = $role;
                                // $txtErro = "Sai tài khoản hoặc mật khẩu";
                                // alert($txtErro);
                                header('location: index.php');
                                break;
                            }
                        }
                        // include "/view/home.php";
                    case 'home':
                        include "../view/home.php";
                        break;
                    case 'dangxuat':
                        if(isset($_SESSION['user_role'])){
                            unset($_SESSION['user_role']);
                        }
                        header('location: index.php');
                        break;
                    default:
                        include "../view/login.php";
                        break;
                }
        }else{
            include "../view/login.php";
        }
        include "../view/footer.php";
    // }

?>


 