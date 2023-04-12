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
                                                <option selected="selected">Mua</option>
                                                <option value="1">Tự trang bị</option>
                                                <option value="2">Khuyến mãi</option>
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