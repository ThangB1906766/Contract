<?php
if (isset($_SESSION['user_role']) && ($_SESSION['user_role'] == 1)) {

?>

<div class="main-content-inner">-+
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
                                            <label for="example-date-input" class="col-form-label">Ngày Ký Hợp Đồng</label>
                                            <input required class="form-control" type="date" name="hd_ngayKyHD" value="<?=$hopdongId[0]['hd_ngayKyHD']?>" id="example-date-input">
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
                                            <label class="col-form-label">Loại Yêu cầu</label>
                                            <select class="custom-select" name="hd_loaiYeuCau">
                                                 <option selected="selected" value="<?=$nameOption[0]['hd_loaiYeuCau']?>"><?=$nameOption[0]['lyc_loai']?></option>
                                                <?php
                                                    $array_result_typeOfRequest = getTypeOfRequest();
                                                        if(isset($array_result_typeOfRequest) && (count($array_result_typeOfRequest) >= 1)){
                                                            foreach ($array_result_typeOfRequest as $loaiyeucau) {
                                                                echo'
                                                                    <option value="'.$loaiyeucau['hd_loaiYeuCau'].'">'.$loaiyeucau['lyc_loai'].'</option>
                                                                ';
                                                            }
                                                        }
                                                ?>
                                                <!-- <option selected="selected" value="1">Tạo mới</option>
                                                <option value="2">Gia hạn</option> -->
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label">Dịch Vụ</label>
                                            <select class="custom-select" name="hd_dichVu">
                                                <option selected="selected" value="<?=$nameOption[0]['hd_dichVu']?>"><?=$nameOption[0]['dv_loai']?></option>
                                                <?php
                                                        $array_result_typeOfService = getTypeOfService();
                                                        if(isset($array_result_typeOfService) && (count($array_result_typeOfService) >= 1)){
                                                            foreach ($array_result_typeOfService as $dichvu) {
                                                                echo'
                                                                    <option value="'.$dichvu['hd_dichVu'].'">'.$dichvu['dv_loai'].'</option>
                                                                ';
                                                            }
                                                        }
                                                ?>
                                                <!-- <option selected="selected" value="1">VNPT BHXH</option>
                                                <option value="2">CA + IVAN</option>
                                                <option value="3">HDDT</option>
                                                <option value="4">Phamarcy</option>
                                                <option value="5">SmartCA</option>
                                                <option value="6">eReceipt</option>
                                                <option value="7">VNPT HKD</option>
                                                <option value="8">BLDT</option> -->
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
                                            <label for="example-text-input" class="col-form-label">Địa chỉ Khách Hàng</label>
                                            <input required class="form-control" type="text" name="hd_diaChiKH" value="<?=$hopdongId[0]['hd_diaChiKH']?>" id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Mã Số Thuế</label>
                                            <input required class="form-control" type="text" name="hd_maSoThue" value="<?=$hopdongId[0]['hd_maSoThue']?>" id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Mã BHXH (Nếu có)</label>
                                            <input class="form-control" type="text" name="hd_maBHXH" value="<?=$hopdongId[0]['hd_maBHXH']?>" id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Tên Gói</label>
                                            <input required class="form-control" type="text" name="hd_tenGoi" value="<?=$hopdongId[0]['hd_tenGoi']?>" id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label required for="example-number-input" class="col-form-label">Thời Gian (Tháng)</label>
                                            <input class="form-control" type="number" name="hd_thoiGian" value="<?=$hopdongId[0]['hd_thoiGian']?>" id="example-number-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Giá Trước Thuế</label>
                                            <div class="input-group">
                                                <input type="text" name="hd_giaTruocThue" value="<?=$hopdongId[0]['hd_giaTruocThue']?>" class="form-control" aria-label="Amount (to the nearest dollar)">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">VND</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Thuế VAT</label>
                                            <div class="input-group">
                                                <input type="text" name="hd_thueVAT" value="<?=$hopdongId[0]['hd_thueVAT']?>" class="form-control" aria-label="Amount (to the nearest dollar)">
                                                <div class="input-group-append">
                                                    <span class="input-group-text"> % </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Giá Tiền</label>
                                            <div class="input-group">
                                                <input required type="text" name="hd_giaTien" value="<?=$hopdongId[0]['hd_giaTien']?>" class="form-control" aria-label="Amount (to the nearest dollar)">
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
                                            <input class="form-control" type="text" name="hd_BBBG" value="<?=$hopdongId[0]['hd_BBBG']?>" id="example-text-input">
                                        </div>  
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">GCN</label>
                                            <input class="form-control" type="text" name="hd_GCN" value="<?=$hopdongId[0]['hd_GCN']?>" id="example-text-input">
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
                                            <input class="form-control" type="text" name="hd_mauHD" value="<?=$hopdongId[0]['hd_mauHD']?>" id="example-text-input">
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