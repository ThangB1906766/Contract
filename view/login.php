 <?php 
    session_start();
    ob_start();
    include "../model/connectdb.php";
    include "../model/user.php";


    if((isset($_POST['login'])) && ($_POST['login'])){
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        
        $role = checkUser($user, $pass);

        $_SESSION['user_role'] = $role;

        if($role == 1){
            header('location: /view/admin/home.php');
        }else{
            $txtErro = "Sai tài khoản hoặc mật khẩu";
        }
    }
 ?>

 <!-- Start form đăng nhập -->
 <div id="wrapper">
    <div class="container">
        <div class="row justify-content-around">
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" class="col-md-6 bg-light my-3">
                <h1 class="text-center text-uppercase h3 py-3">Đăng Nhập</h1>
                <div class="form-group">
                    <label for="user">Tài Khoản</label>
                    <input type="text" name="user" id="user" class="form-control">
                </div>
                <div class="form-group">
                    <label for="pass">Mật Khẩu</label>
                    <input type="password" name="pass" id="pass" class="form-control">
                </div>
                <div class="form-group my-3">
                    <!-- <button type="button" class="btn btn-primary" id="userLoginBtn" onclick="kiemTraDangNhap()">Đăng Nhập</button> -->
                    <input type="submit" value="Đăng Nhập" class="btn-primary btn btn-block" name="login">
                    <!-- <a href="index.php?act=home">Trang chủ</a> -->
                    <small id="thongBao"><?php 
                                            if(isset($txtErro) && ($txtErro !="")){
                                                 echo "<font color='red'>".$txtErro."</font>";
                        }?></small> 
                </div>
            </form>
        </div>
    </div>
</div>  
  <!-- End form đăng nhập -->