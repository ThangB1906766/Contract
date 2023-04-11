<?php
if (isset($_SESSION['user_role']) && ($_SESSION['user_role'] == 1)) {

?>

<div class="main-content-inner">
                <div class="row">
                <!-- Start form input -->
                <div class="col-lg-6 col-ml-12">
                    <form action="/controller/index.php?act=confirm_addNew" method="post">
                        <input required type="hidden" name="hd_id" value="<?=$hopdongId[0]['hd_id']?>">
                        <div class="row">
                            <!-- Textual inputs start -->
                            <div class="col-12 mt-5">
                                <div class="card"> 
                                    <div class="card-body">
                                        <h4 class="header-title">THÊM MỚI</h4>
                                        <div class="form-group">
                                            <label for="hd_ngayKyHD" class="col-form-label">Ngày Ký Hợp Đồng</label>
                                            <input required class="form-control" type="date" name="hd_ngayKyHD" value="" id="hd_ngayKyHD">
                                        </div>
                                        <div class="form-group">
                                            <label for="hd_tenNguoiLap" class="col-form-label">Tên Người Lập</label>
                                            <input required class="form-control" type="text" name="hd_tenNguoiLap" value="" id="hd_tenNguoiLap">
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label">Trạng Thái</label>
                                            <select class="custom-select" name="hd_trangThai">
                                                <option selected="selected">Gừi yêu cầu</option>
                                                <option value="1">Đã nhập ĐHSXKD</option>
                                                <option value="2">Chờ Gen</option>
                                                <option value="3">Chờ trả BBBG</option>
                                                <option value="4">Chờ xuất hóa đơn</option>
                                                <option value="5">Chờ hoàn thiện</option>
                                                <option value="6">Hủy yêu cầu</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label">Loại Yêu cầu</label>
                                            <select class="custom-select" name="hd_loaiYeuCau">
                                                <option selected="selected">Tạo mới</option>
                                                <option value="1">Gia hạn</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label">Dịch Vụ</label>
                                            <select class="custom-select" name="hd_dichVu">
                                                <option selected="selected">VNPT BHXH</option>
                                                <option value="1">CA + IVAN</option>
                                                <option value="2">HDDT</option>
                                                <option value="3">Phamarcy</option>
                                                <option value="4">SmartCA</option>
                                                <option value="5">eReceipt</option>
                                                <option value="6">VNPT HKD</option>
                                                <option value="7">BLDT</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="hd_maHopDong" class="col-form-label">Mã Hợp Đồng</label>
                                            <input required class="form-control" type="text" name="hd_maHopDong" value="" id="hd_maHopDong">
                                        </div>
                                        <div class="form-group">
                                            <label for="hd_tenKhachHang" class="col-form-label">Tên Khách Hàng</label>
                                            <input required class="form-control" type="text" name="hd_tenKhachHang" value="" id="hd_tenKhachHang">
                                        </div>
                                        <div class="form-group">
                                            <label for="hd_diaChiKH" class="col-form-label">Địa chỉ Khách Hàng</label>
                                            <input required class="form-control" type="text" name="hd_diaChiKH" value="" id="hd_diaChiKH">
                                        </div>
                                        <div class="form-group">
                                            <label for="hd_maSoThue" class="col-form-label">Mã Số Thuế</label>
                                            <input required class="form-control" type="text" name="hd_maSoThue" value="" id="hd_maSoThue">
                                        </div>
                                        <div class="form-group">
                                            <label for="hd_maBHXH" class="col-form-label">Mã BHXH (Nếu có)</label>
                                            <input required class="form-control" type="text" name="hd_maBHXH" value="" id="hd_maBHXH">
                                        </div>
                                        <div class="form-group">
                                            <label for="hd_tenGoi" class="col-form-label">Tên Gói</label>
                                            <input required class="form-control" type="text" name="hd_tenGoi" value="" id="hd_tenGoi">
                                        </div>
                                        <div class="form-group">
                                            <label for="hd_thoiGian" class="col-form-label">Thời Gian (Tháng)</label>
                                            <input required class="form-control" type="number" name="hd_thoiGian" value="" id="hd_thoiGian">
                                        </div>
                                        <div class="form-group">
                                            <label for="hd_giaTruocThue" class="col-form-label">Giá Trước Thuế</label>
                                            <div class="input-group">
                                                <input required type="text" name="hd_giaTruocThue" id="hd_giaTruocThue" value="" class="form-control" aria-label="Amount (to the nearest dollar)">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">VND</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="hd_thueVAT" class="col-form-label">Thuế VAT</label>
                                            <div class="input-group">
                                                <input required type="text" name="hd_thueVAT" id="hd_thueVAT" value="" class="form-control" aria-label="Amount (to the nearest dollar)">
                                                <div class="input-group-append">
                                                    <span class="input-group-text"> % </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="hd_giaTien" class="col-form-label">Giá Tiền</label>
                                            <div class="input-group">
                                                <input required type="text" name="hd_giaTien" value="" id="hd_giaTien" class="form-control" aria-label="Amount (to the nearest dollar)">
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
                                                <option selected="selected">Mua</option>
                                                <option value="1">Tự trang bị</option>
                                                <option value="2">Khuyến mãi</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="hd_maGiaoDich" class="col-form-label">Mã Giao Dịch</label>
                                            <input class="form-control" type="text" name="hd_maGiaoDich" value="" id="hd_maGiaoDich">
                                        </div>
                                        <div class="form-group">
                                            <label for="hd_maThueBao" class="col-form-label">Mã Thuê Bao</label>
                                            <input class="form-control" type="text" name="hd_maThueBao" value="" id="hd_maThueBao">
                                        </div>
                                        <div class="form-group">
                                            <label for="hd_userName" class="col-form-label">UserName</label>
                                            <input class="form-control" type="text" name="hd_userName" value="" id="hd_userName">
                                        </div>
                                        <div class="form-group">
                                            <label for="hd_soSeri" class="col-form-label">Số Seri</label>
                                            <input class="form-control" type="text" name="hd_soSeri" value="" id="hd_soSeri">
                                        </div>
                                        <div class="form-group">
                                            <label for="hd_BBBG" class="col-form-label">BBBG (Cập nhật ngày trả)</label>
                                            <input class="form-control" type="text" name="hd_BBBG" value="" id="hd_BBBG">
                                        </div>  
                                        <div class="form-group">
                                            <label for="hd_GCN" class="col-form-label">GCN</label>
                                            <input class="form-control" type="text" name="hd_GCN" value="" id="hd_GCN">
                                        </div>
                                        <div class="form-group">
                                            <label for="hd_soHoaDon" class="col-form-label">Số Hóa Đơn</label>
                                            <input class="form-control" type="text" name="hd_soHoaDon" value="" id="hd_soHoaDon">
                                        </div>
                                        <div class="form-group">
                                            <label for="hd_maTraCuuHD" class="col-form-label">Mã Tra Cứu Hóa Đơn</label>
                                            <input class="form-control" type="text" name="hd_maTraCuuHD" value="" id="hd_maTraCuuHD">
                                        </div>
                                        <div class="form-group">
                                            <label for="hd_ngayXuatHD" class="col-form-label">Ngày Xuất Hóa Đơn</label>
                                            <input class="form-control" type="date" name="hd_ngayXuatHD" value="" id="hd_ngayXuatHD" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="hd_mauHD" class="col-form-label">Mẫu Hóa Đơn</label>
                                            <input class="form-control" type="text" name="hd_mauHD" value="" id="hd_mauHD">
                                        </div>
                                        <div class="form-group">
                                            <label for="hd_ghiChu" class="col-form-label">Ghi chú</label>
                                            <textarea class="form-control" aria-label="With textarea" name="hd_ghiChu" id="hd_ghiChu"></textarea>
                                        </div>

                                        <button class="btn btn-primary" type="submit">Xác Nhận Thêm Mới</button>
                                        <a href="/controller/index.php?act=return" class="btn btn-warning">Trở về</a>
                                        
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