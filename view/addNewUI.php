<?php
if (isset($_SESSION['user_role']) && ($_SESSION['user_role'] == 1)) {

?>

<div class="main-content-inner">
                <div class="row">
                <!-- Start form input -->
                <div class="col-lg-6 col-ml-12">
                    <form action="/controller/index.php?act=confirm_addNew" method="post">
                        <div class="row">
                            <!-- Textual inputs start -->
                            <div class="col-12 mt-5">
                                <div class="card"> 
                                    <div class="card-body">
                                        <h4 class="header-title">THÊM MỚI</h4>
                                        <div class="form-group">
                                            <label for="hd_ngayKyHD" class="col-form-label">Ngày Ký Hợp Đồng (*)</label>
                                            <input required class="form-control" type="date" name="hd_ngayKyHD" id="hd_ngayKyHD">
                                        </div>
                                        <div class="form-group">
                                            <label for="hd_tenNguoiLap" class="col-form-label">Tên Người Lập (*)</label>
                                            <input required class="form-control" type="text" name="hd_tenNguoiLap" id="hd_tenNguoiLap">
                                        </div>
                                        <div class="form-group">
                                            <label for="hd_maHopDong" class="col-form-label">Mã Hợp Đồng (*)</label>
                                            <input required class="form-control" type="text" name="hd_maHopDong" id="hd_maHopDong">
                                        </div>
                                        <div class="form-group">
                                            <label for="hd_tenKhachHang" class="col-form-label">Tên Khách Hàng (*)</label>
                                            <input required class="form-control" type="text" name="hd_tenKhachHang" id="hd_tenKhachHang">
                                        </div>
                                        <div class="form-group">
                                            <label for="hd_diaChiKH" class="col-form-label">Địa chỉ Khách Hàng (*)</label>
                                            <input required class="form-control" type="text" name="hd_diaChiKH" id="hd_diaChiKH">
                                        </div>
                                        <div class="form-group">
                                            <label for="hd_maSoThue" class="col-form-label">Mã Số Thuế (*)</label>
                                            <input required class="form-control" type="text" name="hd_maSoThue" id="hd_maSoThue">
                                        </div>
                                        <div class="form-group">
                                            <label for="hd_maBHXH" class="col-form-label">Mã BHXH</label>
                                            <input class="form-control" type="text" name="hd_maBHXH" id="hd_maBHXH">
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label">Trạng Thái (*)</label>
                                            <select class="custom-select" name="hd_trangThai">
                                                <option selected="selected" value="1">Gừi yêu cầu</option>
                                                <!-- <option value="2">Đã nhập ĐHSXKD</option>
                                                <option value="3">Chờ Gen</option>
                                                <option value="4">Chờ trả BBBG</option>
                                                <option value="5">Chờ xuất hóa đơn</option>
                                                <option value="6">Chờ hoàn thiện</option>
                                                <option value="7">Hủy yêu cầu</option> -->
                                            </select>
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
                                                <!-- <option selected="selected">-----Chọn------</option> -->
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
                                                <input type="text" name="hd_giaTruocThue" class="form-control" aria-label="Amount (to the nearest dollar)" readonly>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">VND</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Thuế VAT</label>
                                            <div class="input-group">
                                                <input type="text" name="hd_thueVAT" placeholder="10" readonly class="form-control" aria-label="Amount (to the nearest dollar)">
                                                <div class="input-group-append">
                                                    <span class="input-group-text"> % </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="hd_giaTien" class="col-form-label">Giá Tiền</label>
                                            <!-- <span id="text">???</span> -->
                                            <div class="input-group">
                                                <?php 
                                                    
                                                ?>
                                                <input readonly type="text" name="hd_giaTien" id="hd_giaTien" class="form-control"
                                                placeholder="Vui lòng chọn thời gian!" aria-label="Amount (to the nearest dollar)">
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
                                                <option selected="selected" value="1">Mua</option>
                                                <option value="2">Tự trang bị</option>
                                                <option value="3">Khuyến mãi</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="hd_maGiaoDich" class="col-form-label">Mã Giao Dịch</label>
                                            <input class="form-control" type="text" name="hd_maGiaoDich" id="hd_maGiaoDich">
                                        </div>
                                        <div class="form-group">
                                            <label for="hd_maThueBao" class="col-form-label">Mã Thuê Bao</label>
                                            <input class="form-control" type="text" name="hd_maThueBao" id="hd_maThueBao">
                                        </div>
                                        <div class="form-group">
                                            <label for="hd_userName" class="col-form-label">UserName</label>
                                            <input class="form-control" type="text" name="hd_userName" id="hd_userName">
                                        </div>
                                        <div class="form-group">
                                            <label for="hd_soSeri" class="col-form-label">Số Seri</label>
                                            <input class="form-control" type="text" name="hd_soSeri" id="hd_soSeri">
                                        </div>
                                        <div class="form-group">
                                            <label for="hd_BBBG" class="col-form-label">BBBG (Cập nhật ngày trả)</label>
                                            <input class="form-control" readonly type="text" name="hd_BBBG" id="hd_BBBG">
                                        </div>  
                                        <div class="form-group">
                                            <label for="hd_GCN" class="col-form-label">GCN</label>
                                            <input class="form-control" readonly type="text" name="hd_GCN" id="hd_GCN">
                                        </div>
                                        <div class="form-group">
                                            <label for="hd_soHoaDon" class="col-form-label">Số Hóa Đơn</label>
                                            <input class="form-control" type="text" name="hd_soHoaDon" id="hd_soHoaDon">
                                        </div>
                                        <div class="form-group">
                                            <label for="hd_maTraCuuHD" class="col-form-label">Mã Tra Cứu Hóa Đơn</label>
                                            <input class="form-control" type="text" name="hd_maTraCuuHD" id="hd_maTraCuuHD">
                                        </div>
                                        <div class="form-group">
                                            <label for="hd_ngayXuatHD" class="col-form-label">Ngày Xuất Hóa Đơn (*)</label>
                                            <input class="form-control" type="date" name="hd_ngayXuatHD" id="hd_ngayXuatHD" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="hd_mauHD" class="col-form-label">Mẫu Hóa Đơn</label>
                                            <input class="form-control" readonly type="text" name="hd_mauHD" id="hd_mauHD">
                                        </div>
                                        <div class="form-group">
                                            <label for="hd_ghiChu" class="col-form-label">Ghi chú</label>
                                            <textarea class="form-control" aria-label="With textarea" name="hd_ghiChu" id="hd_ghiChu"></textarea>
                                        </div>
                                        <input type="submit" class="btn btn-primary" name="btn_confirm_addNew" value="Xác nhận thêm mới">
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