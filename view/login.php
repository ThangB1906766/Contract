<?php include "headerLogin.php" ?>
 <!-- Start form đăng nhập -->
 <div id="wrapper">
    <div class="container">
        <div class="row justify-content-around">
            <form action="/controller/index.php?act=dangnhap" method="POST" class="col-md-6 bg-light my-3">
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
                    <input type="submit" value="Đăng Nhập" class="btn-primary btn btn-block" name="login">
                </div>
            </form>
        </div>
    </div>
</div>  
  <!-- End form đăng nhập -->
  <?php include "footerLogin.php" ?>

  