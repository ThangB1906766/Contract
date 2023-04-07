<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"                    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Admin</title>
</head>
<body>
    <header>
        <h2>Admin - WEBSITE</h2>
        <nav>
            <a href="index.php">Trang chủ</a>
            <a href="/controller/index.php?act=dangxuat">Đăng xuất</a>
            <?php
                if(isset($_SESSION['user_role']) && ($_SESSION['user_role'] !="")){
                    echo '<a href="#">'.$_SESSION['user_role'].'</a>';
                }else{

                }
            ?>
        </nav>
    </header>
