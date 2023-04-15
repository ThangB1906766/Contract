<?php 
SESSION_start();
ob_start();

include_once("../model/connectdb.php");
include "../model/form.php";

if((isset($_POST['thoiGian']) && ($_POST['thoiGian']))){
    $thoiGian = $_POST['thoiGian'];
    $tenGoi = $_POST['tenGoi'];
    $dichVu = $_POST['dichVu'];
    $loaiYeuCau = $_POST['loaiYeuCau'];

    $result = getMoney($thoiGian, $tenGoi, $dichVu, $loaiYeuCau);

    echo $result[0]['dsgc_thanhTien'];
}
?>