<?php 
    function getStatus(){
        $conn=connectdb();
        $stmt = $conn->prepare("SELECT * FROM trangthai");
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        $array_result_status = $stmt->fetchAll(); 
        return $array_result_status;
    }

    function getTypeOfRequest(){
        $conn=connectdb();
        $stmt = $conn->prepare("SELECT * FROM loaiyeucau");
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        $array_result_typeOfRequest = $stmt->fetchAll(); 
        return $array_result_typeOfRequest;
    }

    function getTypeOfService(){
        $conn=connectdb();
        $stmt = $conn->prepare("SELECT * FROM dichvu");
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        $array_result_typeOfService = $stmt->fetchAll(); 
        return $array_result_typeOfService;
    }

    function getTypeOfToken(){
        $conn=connectdb();
        $stmt = $conn->prepare("SELECT * FROM token");
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        $array_result_typeOfToken = $stmt->fetchAll(); 
        return $array_result_typeOfToken;
    }

    function getNamePackage(){
        $conn=connectdb();
        $stmt = $conn->prepare("SELECT DISTINCT dsgc_tenGoiCuoc FROM danhsachgoicuoc");
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        $array_name_package = $stmt->fetchAll(); 
        return $array_name_package;
    }

    function getTimePackage(){
        $conn=connectdb();
        $stmt = $conn->prepare("SELECT DISTINCT dsgc_thoiGian FROM danhsachgoicuoc");
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        $array_time_package = $stmt->fetchAll(); 
        return $array_time_package;
    }

    function getServicePackage(){
        $conn=connectdb();
        $stmt = $conn->prepare("SELECT DISTINCT dsgc_dichVu FROM danhsachgoicuoc");
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        $array_service_package = $stmt->fetchAll(); 
        return $array_service_package;
    }

    function getRequestPackage(){
        $conn=connectdb();
        $stmt = $conn->prepare("SELECT DISTINCT dsgc_loaiHopDong FROM danhsachgoicuoc");
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        $array_request_package = $stmt->fetchAll(); 
        return $array_request_package;
    }

    function getMoney($thoiGian, $tenGoi, $dichVu, $loaiYeuCau){
        $conn=connectdb();
        $stmt = $conn->prepare("SELECT ds.dsgc_thanhTien as dsgc_thanhTien FROM danhsachgoicuoc ds WHERE dsgc_dichVu='".$dichVu."' AND dsgc_loaiHopDong='".$loaiYeuCau."' AND dsgc_tenGoiCuoc='".$tenGoi."' AND dsgc_thoiGian='".$thoiGian."'");
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        $array_dsgc_thanhTien = $stmt->fetchAll();
        return $array_dsgc_thanhTien;
    }

    function getID_loaiyeucau(){
        $conn=connectdb();
        $stmt = $conn->prepare("SELECT DISTINCT lyc.hd_loaiYeuCau as id_loaiYeuCau, lyc.lyc_loai as ten_loaiYeuCau FROM `loaiyeucau` lyc JOIN danhsachgoicuoc ds ON lyc.lyc_loai = ds.dsgc_loaiHopDong");
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        $array_request_package = $stmt->fetchAll(); 
        return $array_request_package;
    }
?>