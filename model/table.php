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

    function updateDataById($hd_id, $hd_ngayKyHD, $hd_tenNguoiLap, $hd_trangThai, $hd_loaiYeuCau, $hd_dichVu, $hd_maHopDong,        $hd_tenKhachHang, $hd_diaChiKH, $hd_maSoThue, $hd_maBHXH, $hd_tenGoi, $hd_thoiGian, $hd_giaTruocThue, $hd_thueVAT, $hd_giaTien, $hd_token, $hd_maGiaoDich, $hd_maThueBao, $hd_userName, $hd_soSeri, $hd_BBBG, $hd_GCN, $hd_soHoaDon, $hd_maTraCuuHD, $hd_ngayXuatHD,    $hd_mauHD, $hd_ghiChu){

        $conn=connectdb();

        $sql = "UPDATE hopdong
                SET  hd_ngayKyHD='".$hd_ngayKyHD."', hd_tenNguoiLap='".$hd_tenNguoiLap."', hd_trangThai='".$hd_trangThai."',
                     hd_loaiYeuCau='".$hd_loaiYeuCau."', hd_dichVu='".$hd_dichVu."', hd_maHopDong='".$hd_maHopDong."',
                     hd_tenKhachHang='".$hd_tenKhachHang."', hd_tenKhachHang='".$hd_tenKhachHang."', hd_tenKhachHang='".$hd_tenKhachHang."',
                     hd_diaChiKH='".$hd_diaChiKH."', hd_maSoThue='".$hd_maSoThue."', hd_maBHXH='".$hd_maBHXH."',
                     hd_tenGoi='".$hd_tenGoi."', hd_thoiGian='".$hd_thoiGian."', hd_giaTruocThue='".$hd_giaTruocThue."', 
                     hd_thueVAT='".$hd_thueVAT."', hd_giaTien='".$hd_giaTien."', hd_token='".$hd_token."',
                     hd_maGiaoDich='".$hd_maGiaoDich."', hd_maThueBao='".$hd_maThueBao."', hd_userName='".$hd_userName."',
                     hd_soSeri='".$hd_soSeri."', hd_BBBG='".$hd_BBBG."', hd_GCN='".$hd_GCN."', 
                     hd_soHoaDon='".$hd_soHoaDon."', hd_maTraCuuHD='".$hd_maTraCuuHD."', hd_ngayXuatHD='".$hd_ngayXuatHD."',
                     hd_mauHD='".$hd_mauHD."', hd_ghiChu='".$hd_ghiChu."'
                WHERE hd_id=".$hd_id;
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }

    function  addNewData($hd_ngayKyHD, $hd_tenNguoiLap, $hd_trangThai, $hd_loaiYeuCau, $hd_dichVu, $hd_maHopDong, $hd_tenKhachHang, $hd_diaChiKH, $hd_maSoThue, $hd_maBHXH, $hd_tenGoi, $hd_thoiGian, $hd_giaTruocThue, $hd_thueVAT, $hd_giaTien, $hd_token, $hd_maGiaoDich, $hd_maThueBao, $hd_userName, $hd_soSeri, $hd_BBBG, $hd_GCN, $hd_soHoaDon, $hd_maTraCuuHD, $hd_ngayXuatHD, $hd_mauHD, $hd_ghiChu){
        $conn=connectdb();

        $sql = "INSERT INTO hopdong (hd_ngayKyHD, hd_tenNguoiLap, hd_trangThai, hd_loaiYeuCau, hd_dichVu, hd_maHopDong, hd_tenKhachHang, hd_diaChiKH, hd_maSoThue, hd_maBHXH, hd_tenGoi, hd_thoiGian, hd_giaTruocThue, hd_thueVAT, hd_giaTien, hd_token, hd_maGiaoDich, hd_maThueBao, hd_userName, hd_soSeri, hd_BBBG, hd_GCN, hd_soHoaDon, hd_maTraCuuHD, hd_ngayXuatHD, hd_mauHD, hd_ghiChu) 
                VALUES ('".$hd_ngayKyHD."', '".$hd_tenNguoiLap."', '".$hd_trangThai."', '".$hd_loaiYeuCau."', '".$hd_dichVu."', '".$hd_maHopDong."', '".$hd_tenKhachHang."', '".$hd_diaChiKH."', '".$hd_maSoThue."', '".$hd_maBHXH."', '".$hd_tenGoi."', '".$hd_thoiGian."', '".$hd_giaTruocThue."', '".$hd_thueVAT."', '".$hd_giaTien."', '".$hd_token."', '".$hd_maGiaoDich."', '".$hd_maThueBao."', '".$hd_userName."', '".$hd_soSeri."', '".$hd_BBBG."', '".$hd_GCN."', '".$hd_soHoaDon."', '".$hd_maTraCuuHD."', '".$hd_ngayXuatHD."', '".$hd_mauHD."', '".$hd_ghiChu."')";

        $conn->exec($sql);
        // echo "New record created successfully";
    }
?>