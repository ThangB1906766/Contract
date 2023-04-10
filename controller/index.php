
<?php
        session_start();
        ob_start();
    
        include "../model/connectdb.php";
        include "../model/user.php"; 
        include "../model/table.php";
        
        if(isset($_GET['act'])){
            $act = $_GET['act'];
                switch ($act) {
                    case 'dangnhap':
                        if((isset($_POST['login'])) && ($_POST['login'])){
                            $user = $_POST['user'];
                            $pass = $_POST['pass'];
                            $role = checkUser($user, $pass); // checkUser => return 0 or 1
                            if($role == 1){
                                $_SESSION['user_role'] = $role;
                                $_SESSION['user_taiKhoan'] = $user;

                                $array_result = getAllDataInTable();
                                include "../view/headerAdmin.php";
                                include "../view/home.php";
                                include "../view/footerAdmin.php";
                                
                            }else{
                                echo '<script type="text/javascript">
                                            window.onload = function () { alert("Sai tên tài khoản hoặc mật khẩu!"); }
                                        </script>';
                                include "../view/login.php";
                                break;
                            }
                        }else{
                            header('location: ../view/login.php');
                        }
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
            
            header('location: ../view/login.php');
        }
?>


 