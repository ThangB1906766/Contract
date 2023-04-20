<?php
if (isset($_SESSION['user_role']) && ($_SESSION['user_role'] == 1)) {

?>

<div class="main-content-inner">
                <div class="row">
                <!-- Start form input -->
                <div class="col-lg-6 col-ml-12">
                    <form action="/controller/index.php?act=update" method="post">
                        <input type="hidden" name="hd_id" value="<?=$hopdongId[0]['hd_id']?>">
                        <div class="row">
                            <!-- Textual inputs start -->
                            <div class="col-12 mt-5">
                                <div class="card"> 
                                    <div class="card-body">
                                        <h4 class="header-title">CẬP NHẬT</h4>
                                        <div class="form-group">
                                            <label for="example-date-input" class="col-form-label">Ngày Yêu Cầu</label>
                                            <input required class="form-control" type="date" name="hd_ngayYeuCau" value="<?=$hopdongId[0]['hd_ngayYeuCau']?>" id="example-date-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-date-input" class="col-form-label">Ngày Ký Hợp Đồng</label>
                                            <input class="form-control" type="date" name="hd_ngayKyHD" value="<?=$hopdongId[0]['hd_ngayKyHD']?>" id="example-date-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Tên Người Lập</label>
                                            <input required class="form-control" type="text" name="hd_tenNguoiLap" value="<?=$hopdongId[0]['hd_tenNguoiLap']?>" id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label">Trạng Thái</label>
                                            <select class="custom-select" name="hd_trangThai">
                                                <option selected="selected" value="<?=$nameOption[0]['hd_trangThai']?>"><?=$nameOption[0]['tt_loai']?></option>
                                                <?php
                                                    $array_result_status = getStatus();
                                                    if(isset($array_result_status) && (count($array_result_status) >= 1)){
                                                        foreach ($array_result_status as $trangthai) {
                                                            echo'
                                                                <option value="'.$trangthai['hd_trangThai'].'">'.$trangthai['tt_loai'].'</option>
                                                            ';
                                                        }
                                                    }
                                                ?>
                                                <!-- <option value="2">Đã nhập ĐHSXKD</option>
                                                <option value="3">Chờ Gen</option>
                                                <option value="4">Chờ trả BBBG</option>
                                                <option value="5">Chờ xuất hóa đơn</option>
                                                <option value="6">Chờ hoàn thiện</option>
                                                <option value="77">Hủy yêu cầu</option> -->
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Mã Hợp Đồng</label>
                                            <input required class="form-control" type="text" name="hd_maHopDong" value="<?=$hopdongId[0]['hd_maHopDong']?>" id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Tên Khách Hàng</label>
                                            <input required class="form-control" type="text" name="hd_tenKhachHang" value="<?=$hopdongId[0]['hd_tenKhachHang']?>" id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label">Tỉnh/Thành Phố (*)</label>
                                            <select class="custom-select tinhThanhPho" name="tinhThanhPho">
                                                <option selected="selected" value="<?=$diaChiId[0]['matp']?>">-----<?=$diaChiId[0]['tenTinhThanhPho']?>-----</option>
                                                <?php
                                                    $array_tinhthanhpho = getTinhThanhPho();
                                                    if(isset($array_tinhthanhpho) && (count($array_tinhthanhpho) >= 1)){
                                                        foreach ($array_tinhthanhpho as $tinhthanhpho) {
                                                            if($tinhthanhpho['name'] !=""){
                                                                echo'
                                                                    <option value="'.$tinhthanhpho['matp'].'">'.$tinhthanhpho['name'].'</option>
                                                                ';
                                                            }
                                                        }
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label">Quận/Huyện (*)</label>
                                            <select class="custom-select quanHuyen" name="quanHuyen">
                                            <option selected="selected" value="<?=$diaChiId[0]['maqh']?>">-----<?=$diaChiId[0]['tenQuanHuyen']?>-----</option>
                                                
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label">Phường/Xã (*)</label>
                                            <select class="custom-select xaPhuongThiTran" name="xaPhuongThiTran">
                                                <<option selected="selected" value="<?=$diaChiId[0]['xaid']?>">-----<?=$diaChiId[0]['tenXaPhuongThiTran']?>-----</option>
                                                
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Địa chỉ Khách Hàng</label>
                                            <input readonly class="form-control" type="text" name="hd_diaChiKH" value="<?=$hopdongId[0]['hd_diaChiKH']?>" id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Mã Số Thuế</label>
                                            <input required class="form-control" type="text" name="hd_maSoThue" value="<?=$hopdongId[0]['hd_maSoThue']?>" id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Mã BHXH (Nếu có)</label>
                                            <input class="form-control" type="text" name="hd_maBHXH" value="<?=$hopdongId[0]['hd_maBHXH']?>" id="example-text-input">
                                        </div>
                                        <div class="form-group loaiYeuCau">
                                            <label class="col-form-label">Loại Yêu Cầu (*)</label>
                                            <select class="custom-select" name="hd_loaiYeuCau" id="loaiYeuCau">
                                                <?php
                                                    $array_request_package = getRequestPackage();
                                                    if(isset($array_request_package) && (count($array_request_package) >= 1)){
                                                        foreach ($array_request_package as $danhsachgoicuoc) {
                                                            if($danhsachgoicuoc['dsgc_loaiHopDong'] !=""){
                                                                echo'
                                                                    <option value="'.$danhsachgoicuoc['dsgc_loaiHopDong'].'">'.$danhsachgoicuoc['dsgc_loaiHopDong'].'</option>
                                                                ';
                                                            }
                                                        }
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group dichVu">
                                            <label class="col-form-label">Dịch Vụ (*)</label>
                                            <select class="custom-select" name="hd_dichVu" id="dichVu">
                                                <?php
                                                    $array_service_package = getServicePackage();
                                                    if(isset($array_service_package) && (count($array_service_package) >= 1)){
                                                        foreach ($array_service_package as $danhsachgoicuoc) {
                                                            if($danhsachgoicuoc['dsgc_dichVu'] !=""){
                                                                echo'
                                                                    <option value="'.$danhsachgoicuoc['dsgc_dichVu'].'">'.$danhsachgoicuoc['dsgc_dichVu'].'</option>
                                                                ';
                                                            }
                                                        }
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group tenGoi">
                                            <label class="col-form-label">Tên Gói (*)</label>
                                            <select class="custom-select" name="hd_tenGoi" id="tenGoi">
                                                <?php
                                                    $array_name_package = getNamePackage();
                                                    if(isset($array_name_package) && (count($array_name_package) >= 1)){
                                                        foreach ($array_name_package as $danhsachgoicuoc) {
                                                            if($danhsachgoicuoc['dsgc_tenGoiCuoc'] !=""){
                                                                echo'
                                                                    <option value="'.$danhsachgoicuoc['dsgc_tenGoiCuoc'].'">'.$danhsachgoicuoc['dsgc_tenGoiCuoc'].'</option>
                                                                ';
                                                            }
                                                        }
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group thoiGian">
                                            <label class="col-form-label">Thời Gian (*)</label>
                                            <select class="custom-select" name="hd_thoiGian" id="thoiGian">
                                                <?php
                                                    $array_time_package = getTimePackage();
                                                    if(isset($array_time_package) && (count($array_time_package) >= 1)){
                                                        foreach ($array_time_package as $danhsachgoicuoc) {
                                                            // Nếu khác rỗng mới show ra
                                                            if($danhsachgoicuoc['dsgc_thoiGian'] !=""){
                                                                echo'
                                                                    <option value="'.$danhsachgoicuoc['dsgc_thoiGian'].'">'.$danhsachgoicuoc['dsgc_thoiGian'].'</option>
                                                                ';
                                                            }

                                                        }
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Giá Trước Thuế</label>
                                            <div class="input-group">
                                                <input readonly type="text" name="hd_giaTruocThue" value="" class="form-control" aria-label="Amount (to the nearest dollar)">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">VND</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Thuế VAT</label>
                                            <div class="input-group">
                                                <input readonly type="text" name="hd_thueVAT" value="10" class="form-control" aria-label="Amount (to the nearest dollar)">
                                                <div class="input-group-append">
                                                    <span class="input-group-text"> % </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Giá Tiền</label>
                                            <div class="input-group">
                                                <input readonly type="text" id="hd_giaTien" name="hd_giaTien" value="<?=$hopdongId[0]['hd_giaTien']?>" class="form-control" aria-label="Amount (to the nearest dollar)">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">VND</span>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="col-lg-6 col-ml-12">
                    <div class="row">
                            <!-- basic form start -->
                            <div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body">
                                    <div class="form-group">
                                            <label class="col-form-label">Token</label>
                                            <select class="custom-select" name="hd_token">
                                                <option selected="selected" value="<?=$nameOption[0]['hd_token']?>"><?=$nameOption[0]['token_loai']?></option>
                                                <?php
                                                        $array_result_typeOfToken = getTypeOfToken();
                                                        if(isset($array_result_typeOfToken) && (count($array_result_typeOfToken) >= 1)){
                                                            foreach ($array_result_typeOfToken as $token) {
                                                                echo'
                                                                    <option value="'.$token['hd_token'].'">'.$token['token_loai'].'</option>
                                                                ';
                                                            }
                                                        }
                                                ?>
                                                <!-- <option selected="selected" value="1">Mua</option>
                                                <option value="2">Tự trang bị</option>
                                                <option value="3">Khuyến mãi</option> -->
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Mã Giao Dịch</label>
                                            <input class="form-control" type="text" name="hd_maGiaoDich" value="<?=$hopdongId[0]['hd_maGiaoDich']?>" id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Mã Thuê Bao</label>
                                            <input class="form-control" type="text" name="hd_maThueBao" value="<?=$hopdongId[0]['hd_maThueBao']?>" id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">UserName</label>
                                            <input class="form-control" type="text" name="hd_userName" value="<?=$hopdongId[0]['hd_userName']?>" id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Số Seri</label>
                                            <input class="form-control" type="text" name="hd_soSeri" value="<?=$hopdongId[0]['hd_soSeri']?>" id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">BBBG (Cập nhật ngày trả)</label>
                                            <input class="form-control" readonly type="text" name="hd_BBBG" value="<?=$hopdongId[0]['hd_BBBG']?>" id="example-text-input">
                                        </div>  
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">GCN</label>
                                            <input class="form-control" type="text" readonly name="hd_GCN" value="<?=$hopdongId[0]['hd_GCN']?>" id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Số Hóa Đơn</label>
                                            <input class="form-control" type="text" name="hd_soHoaDon" value="<?=$hopdongId[0]['hd_soHoaDon']?>" id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Mã Tra Cứu Hóa Đơn</label>
                                            <input class="form-control" type="text" name="hd_maTraCuuHD" value="<?=$hopdongId[0]['hd_maTraCuuHD']?>" id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-date-input" class="col-form-label">Ngày Xuất Hóa Đơn</label>
                                            <input required class="form-control" type="date" name="hd_ngayXuatHD" value="<?=$hopdongId[0]['hd_ngayXuatHD']?>" id="example-date-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Mẫu Hóa Đơn</label>
                                            <input class="form-control" readonly type="text" name="hd_mauHD" value="<?=$hopdongId[0]['hd_mauHD']?>" id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Ghi chú</label>
                                            <textarea class="form-control" aria-label="With textarea" name="hd_ghiChu"><?=$hopdongId[0]['hd_ghiChu']?></textarea>
                                        </div>
                                        
                                        <button class="btn btn-primary" type="submit">Xác nhận cập nhật</button>
                                        <a href="/controller/index.php?act=return" class="btn btn-warning">Trở về trang chủ</a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </form>
                </div>
                <!-- End form input -->
                </div>
</div>

<?php 
} 

else {
    header('Location: /controller/index.php');
}
?>