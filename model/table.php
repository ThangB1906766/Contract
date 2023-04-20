<?php 
    // function getAllDataInTable(){
    //     $conn=connectdb();
    //     $stmt = $conn->prepare("SELECT * FROM hopdong");
    //     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    //     $stmt->execute();
    //     $array_result = $stmt->fetchAll(); 
    //     return $array_result;
    // }

    // function getAllDataInTable(){
    //     $conn=connectdb();
    //     $stmt = $conn->prepare("SELECT hd.hd_id as hd_id, hd.hd_ngayKyHD as hd_ngayKyHD, hd.hd_tenNguoiLap as hd_tenNguoiLap, tt.tt_loai as hd_trangThai, lyc.lyc_loai as hd_loaiYeuCau,
    //             dv.dv_loai as hd_dichVu, hd.hd_tenKhachHang as hd_tenKhachHang, hd.hd_maSoThue as hd_maSoThue, hd.hd_giaTien as hd_giaTien 
    //             FROM hopdong hd 
    //             JOIN trangthai tt
    //                 ON hd.hd_trangThai = tt.hd_trangThai
    //             JOIN loaiyeucau lyc
    //                 ON hd.hd_loaiYeuCau = lyc.hd_loaiYeuCau
    //             JOIN dichvu dv
    //                 ON hd.hd_dichVu = dv.hd_dichVu
    //              JOIN token tk
    //                  ON hd.hd_token = tk.hd_token");
    //     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    //     $stmt->execute();
    //     $array_result = $stmt->fetchAll(); 
    //     return $array_result;
    // }

    function getAllDataInTable(){
        $conn=connectdb();
        $stmt = $conn->prepare("SELECT hd.hd_id as hd_id,  hd.hd_ngayYeuCau as hd_ngayYeuCau, hd.hd_ngayKyHD as hd_ngayKyHD, hd.hd_tenNguoiLap as hd_tenNguoiLap, tt.tt_loai as hd_trangThai, hd.hd_loaiYeuCau as hd_loaiYeuCau, hd.hd_dichVu as hd_dichVu, hd.hd_tenKhachHang as hd_tenKhachHang, hd.hd_maSoThue as hd_maSoThue, hd.hd_giaTien as hd_giaTien 
        FROM hopdong hd JOIN trangthai tt ON hd.hd_trangThai = tt.hd_trangThai");
               
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

    function getDiaChiById($id){
        $conn=connectdb();
        $stmt = $conn->prepare("SELECT hd.hd_id as hd_id, ttp.matp as matp, qh.maqh as maqh, xptt.xaid as xaid, ttp.name as tenTinhThanhPho, qh.name as tenQuanHuyen, xptt.name as tenXaPhuongThiTran FROM hopdong hd JOIN tinhthanhpho ttp ON hd.hd_tinhThanhPho = ttp.matp JOIN quanhuyen qh ON hd.hd_quanHuyen = qh.maqh JOIN xaphuongthitran xptt ON hd.hd_xaPhuongThiTran = xptt.xaid WHERE hd_id=".$id);
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        $array_diachi = $stmt->fetchAll(); 
        return $array_diachi;
    }

    function updateDataById($hd_id, $hd_ngayYeuCau, $hd_ngayKyHD, $hd_tenNguoiLap, $hd_trangThai, $hd_loaiYeuCau, $hd_dichVu, $hd_maHopDong, $hd_tenKhachHang, $hd_diaChiKH, $hd_maSoThue, $hd_maBHXH, $hd_tenGoi, $hd_thoiGian, $hd_giaTruocThue, $hd_thueVAT, $hd_giaTien, $hd_token, $hd_maGiaoDich, $hd_maThueBao, $hd_userName, $hd_soSeri, $hd_BBBG, $hd_GCN, $hd_soHoaDon, $hd_maTraCuuHD, $hd_ngayXuatHD, $hd_mauHD, $hd_ghiChu, $hd_tinhThanhPho,  $hd_quanHuyen, $hd_xaPhuongThiTran){

        $conn=connectdb();

        $sql = "UPDATE hopdong
                SET  hd_ngayYeuCau='".$hd_ngayYeuCau."',hd_ngayKyHD='".$hd_ngayKyHD."', hd_tenNguoiLap='".$hd_tenNguoiLap."', hd_trangThai='".$hd_trangThai."',
                     hd_loaiYeuCau='".$hd_loaiYeuCau."', hd_dichVu='".$hd_dichVu."', hd_maHopDong='".$hd_maHopDong."',
                     hd_tenKhachHang='".$hd_tenKhachHang."', hd_tenKhachHang='".$hd_tenKhachHang."', hd_tenKhachHang='".$hd_tenKhachHang."',
                     hd_diaChiKH='".$hd_diaChiKH."', hd_maSoThue='".$hd_maSoThue."', hd_maBHXH='".$hd_maBHXH."',
                     hd_tenGoi='".$hd_tenGoi."', hd_thoiGian='".$hd_thoiGian."', hd_giaTruocThue='".$hd_giaTruocThue."', 
                     hd_thueVAT='".$hd_thueVAT."', hd_giaTien='".$hd_giaTien."', hd_token='".$hd_token."',
                     hd_maGiaoDich='".$hd_maGiaoDich."', hd_maThueBao='".$hd_maThueBao."', hd_userName='".$hd_userName."',
                     hd_soSeri='".$hd_soSeri."', hd_BBBG='".$hd_BBBG."', hd_GCN='".$hd_GCN."', 
                     hd_soHoaDon='".$hd_soHoaDon."', hd_maTraCuuHD='".$hd_maTraCuuHD."', hd_ngayXuatHD='".$hd_ngayXuatHD."',
                     hd_mauHD='".$hd_mauHD."', hd_ghiChu='".$hd_ghiChu."',  hd_tinhThanhPho='".$hd_tinhThanhPho."', hd_quanHuyen='".$hd_quanHuyen."', hd_xaPhuongThiTran='".$hd_xaPhuongThiTran."'
                WHERE hd_id=".$hd_id;
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }

    function  addNewData($hd_ngayYeuCau, $hd_ngayKyHD, $hd_tenNguoiLap, $hd_trangThai, $hd_loaiYeuCau, $hd_dichVu, $hd_maHopDong, $hd_tenKhachHang, $hd_diaChiKH, $hd_maSoThue, $hd_maBHXH, $hd_tenGoi, $hd_thoiGian, $hd_giaTruocThue, $hd_thueVAT, $hd_giaTien, $hd_token, $hd_maGiaoDich, $hd_maThueBao, $hd_userName, $hd_soSeri, $hd_BBBG, $hd_GCN, $hd_soHoaDon, $hd_maTraCuuHD, $hd_ngayXuatHD, $hd_mauHD, $hd_ghiChu, $hd_tinhThanhPho,  $hd_quanHuyen, $hd_xaPhuongThiTran){
        $conn=connectdb();

        $sql = "INSERT INTO hopdong (hd_ngayYeuCau, hd_ngayKyHD, hd_tenNguoiLap, hd_trangThai, hd_loaiYeuCau, hd_dichVu, hd_maHopDong, hd_tenKhachHang, hd_diaChiKH, hd_maSoThue, hd_maBHXH, hd_tenGoi, hd_thoiGian, hd_giaTruocThue, hd_thueVAT, hd_giaTien, hd_token, hd_maGiaoDich, hd_maThueBao, hd_userName, hd_soSeri, hd_BBBG, hd_GCN, hd_soHoaDon, hd_maTraCuuHD, hd_ngayXuatHD, hd_mauHD, hd_ghiChu, hd_tinhThanhPho, hd_quanHuyen, hd_xaPhuongThiTran) 
                VALUES ('".$hd_ngayYeuCau."', '".$hd_ngayKyHD."', '".$hd_tenNguoiLap."', '".$hd_trangThai."', '".$hd_loaiYeuCau."', '".$hd_dichVu."', '".$hd_maHopDong."', '".$hd_tenKhachHang."', '".$hd_diaChiKH."', '".$hd_maSoThue."', '".$hd_maBHXH."', '".$hd_tenGoi."', '".$hd_thoiGian."', '".$hd_giaTruocThue."', '".$hd_thueVAT."', '".$hd_giaTien."', '".$hd_token."', '".$hd_maGiaoDich."', '".$hd_maThueBao."', '".$hd_userName."', '".$hd_soSeri."', '".$hd_BBBG."', '".$hd_GCN."', '".$hd_soHoaDon."', '".$hd_maTraCuuHD."', '".$hd_ngayXuatHD."', '".$hd_mauHD."', '".$hd_ghiChu."', '".$hd_tinhThanhPho."', '".$hd_quanHuyen."', '".$hd_xaPhuongThiTran."')";

        $conn->exec($sql);
        // echo "New record created successfully";
    }
    
    // function getOptionById($id){
    //     $conn=connectdb();
    //     $stmt = $conn->prepare("SELECT hd.hd_id as hd_id, hd.hd_ngayKyHD as hd_ngayKyHD, hd.hd_tenNguoiLap as hd_tenNguoiLap, tt.tt_loai as tt_loai, lyc.lyc_loai as lyc_loai, dv.dv_loai as dv_loai, hd.hd_tenKhachHang as hd_tenKhachHang, hd.hd_maSoThue as hd_maSoThue, hd.hd_giaTien as hd_giaTien, tk.token_loai as token_loai,
    //     hd.hd_trangThai, hd.hd_loaiYeuCau, hd.hd_dichVu, hd.hd_token
    //             FROM hopdong hd 
    //             JOIN trangthai tt
    //                 ON hd.hd_trangThai = tt.hd_trangThai
    //             JOIN loaiyeucau lyc
    //                 ON hd.hd_loaiYeuCau = lyc.hd_loaiYeuCau
    //             JOIN dichvu dv
    //                 ON hd.hd_dichVu = dv.hd_dichVu
    //             JOIN token tk
    //                  ON hd.hd_token = tk.hd_token
    //             WHERE hd_id=".$id);
    //     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    //     $stmt->execute();
    //     $array_result = $stmt->fetchAll(); 
    //     return $array_result;
    // }

    function getOptionById($id){
        $conn=connectdb();
        $stmt = $conn->prepare("SELECT DISTINCT * FROM hopdong hd JOIN trangthai tt ON hd.hd_trangThai=tt.hd_trangThai JOIN token tk ON hd.hd_token=tk.hd_token WHERE hd_id=".$id);
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        $array_result = $stmt->fetchAll(); 
        return $array_result;
    }
?>