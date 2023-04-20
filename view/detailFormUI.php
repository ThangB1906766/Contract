<?php
if (isset($_SESSION['user_role']) && ($_SESSION['user_role'] == 1)) {

?>

<div class="main-content-inner">
                <div class="row">
                <!-- Start form input -->
                <div class="col-lg-6 col-ml-12">
                        <input type="hidden" name="hd_id" value="<?=$hopdongId[0]['hd_id']?>">
                        <div class="row">
                            <!-- Textual inputs start -->
                            <div class="col-12 mt-5">
                                <div class="card"> 
                                    <div class="card-body">
                                        <h4 class="header-title">CHI TIẾT</h4>
                                        <div class="form-group">
                                            <label for="example-date-input" class="col-form-label">Ngày Yêu Cầu</label>
                                            <input class="form-control" type="date" name="hd_ngayYeuCau" value="<?=$hopdongId[0]['hd_ngayYeuCau']?>" id="example-date-input" readonly> 
                                        </div>
                                        <div class="form-group">
                                            <label for="example-date-input" class="col-form-label">Ngày Ký Hợp Đồng</label>
                                            <input class="form-control" type="date" name="hd_ngayKyHD" value="<?=$hopdongId[0]['hd_ngayKyHD']?>" id="example-date-input" readonly> 
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Tên Người Lập</label>
                                            <input class="form-control" type="text" name="hd_tenNguoiLap" value="<?=$hopdongId[0]['hd_tenNguoiLap']?>" id="example-text-input" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label">Trạng Thái</label>
                                            <select class="custom-select" name="hd_trangThai" readonly>
                                                <option selected="selected"><?=$nameOption[0]['tt_loai']?></option>
                                                <!-- <option value="1">Đã nhập ĐHSXKD</option>
                                                <option value="2">Chờ Gen</option>
                                                <option value="3">Chờ trả BBBG</option>
                                                <option value="4">Chờ xuất hóa đơn</option>
                                                <option value="5">Chờ hoàn thiện</option>
                                                <option value="6">Hủy yêu cầu</option> -->
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label">Loại Yêu cầu</label>
                                            <select class="custom-select" name="hd_loaiYeuCau">
                                                <option selected="selected" readonly><?=$nameOption[0]['hd_loaiYeuCau']?></option>
                                                <!-- <option value="1">Gia hạn</option> -->
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label">Dịch Vụ</label>
                                            <select class="custom-select" name="hd_dichVu" readonly>
                                                <option selected="selected"><?=$nameOption[0]['hd_dichVu']?></option>
                                                <!-- <option value="1">CA + IVAN</option>
                                                <option value="2">HDDT</option>
                                                <option value="3">Phamarcy</option>
                                                <option value="4">SmartCA</option>
                                                <option value="5">eReceipt</option>
                                                <option value="6">VNPT HKD</option>
                                                <option value="7">BLDT</option> -->
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Mã Hợp Đồng</label>
                                            <input class="form-control" type="text" name="hd_maHopDong" value="<?=$hopdongId[0]['hd_maHopDong']?> " readonly id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Tên Khách Hàng</label>
                                            <input class="form-control" type="text" name="hd_tenKhachHang" value="<?=$hopdongId[0]['hd_tenKhachHang']?>" readonly id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Địa chỉ Khách Hàng</label>
                                            <?php 
                                                $tenXaPhuongThiTran = $diaChiId[0]['tenXaPhuongThiTran'];
                                                $tenQuanHuyen = $diaChiId[0]['tenQuanHuyen'];
                                                $tenTinhThanhPho = $diaChiId[0]['tenTinhThanhPho'];
                                                $diaChi = $tenXaPhuongThiTran.',  '.$tenQuanHuyen.',  '.$tenTinhThanhPho;

                                            ?>
                                            <input class="form-control" type="text" name="hd_diaChiKH" value="<?=$diaChi?>" readonly id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Mã Số Thuế</label>
                                            <input class="form-control" type="text" name="hd_maSoThue" value="<?=$hopdongId[0]['hd_maSoThue']?>" readonly id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Mã BHXH (Nếu có)</label>
                                            <input class="form-control" type="text" name="hd_maBHXH" value="<?=$hopdongId[0]['hd_maBHXH']?>" readonly id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Tên Gói</label>
                                            <input class="form-control" type="text" name="hd_tenGoi" value="<?=$hopdongId[0]['hd_tenGoi']?>" readonly id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-number-input" class="col-form-label">Thời Gian (Tháng)</label>
                                            <input class="form-control" type="text" name="hd_thoiGian" value="<?=$hopdongId[0]['hd_thoiGian']?>" readonly id="example-number-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Giá Trước Thuế</label>
                                            <div class="input-group">
                                                <input type="text" name="hd_giaTruocThue"  class="form-control" aria-label="Amount (to the nearest dollar)" readonly>
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
                                            <label for="example-text-input" class="col-form-label">Giá Tiền</label>
                                            <div class="input-group">
                                                <input type="text" name="hd_giaTien" value="<?=$hopdongId[0]['hd_giaTien']?>" readonly class="form-control" aria-label="Amount (to the nearest dollar)">
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
                                            <select class="custom-select" name="hd_token" readonly>
                                                <option selected="selected"><?=$nameOption[0]['token_loai']?></option>
                                                <!-- <option value="1">Tự trang bị</option>
                                                <option value="2">Khuyến mãi</option> -->
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Mã Giao Dịch</label>
                                            <input class="form-control" type="text" name="hd_maGiaoDich" value="<?=$hopdongId[0]['hd_maGiaoDich']?>" readonly id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Mã Thuê Bao</label>
                                            <input class="form-control" type="text" name="hd_maThueBao" value="<?=$hopdongId[0]['hd_maThueBao']?>" readonly id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">UserName</label>
                                            <input class="form-control" type="text" name="hd_userName" value="<?=$hopdongId[0]['hd_userName']?>" readonly id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Số Seri</label>
                                            <input class="form-control" type="text" name="hd_soSeri" value="<?=$hopdongId[0]['hd_soSeri']?>" readonly id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">BBBG (Cập nhật ngày trả)</label>
                                            <input class="form-control" type="text" name="hd_BBBG" value="<?=$hopdongId[0]['hd_BBBG']?>" readonly id="example-text-input">
                                        </div>  
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">GCN</label>
                                            <input class="form-control" type="text" name="hd_GCN" value="<?=$hopdongId[0]['hd_GCN']?>" readonly id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Số Hóa Đơn</label>
                                            <input class="form-control" type="text" name="hd_soHoaDon" value="<?=$hopdongId[0]['hd_soHoaDon']?>" readonly id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Mã Tra Cứu Hóa Đơn</label>
                                            <input class="form-control" type="text" name="hd_maTraCuuHD" value="<?=$hopdongId[0]['hd_maTraCuuHD']?>" readonly id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-date-input" class="col-form-label">Ngày Xuất Hóa Đơn</label>
                                            <input class="form-control" type="date" name="hd_ngayXuatHD" value="<?=$hopdongId[0]['hd_ngayXuatHD']?>" readonly id="example-date-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Mẫu Hóa Đơn</label>
                                            <input class="form-control" type="text" name="hd_mauHD" value="<?=$hopdongId[0]['hd_mauHD']?>" readonly id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Ghi chú</label>
                                            <textarea class="form-control" aria-label="With textarea" name="hd_ghiChu" readonly ><?=$hopdongId[0]['hd_ghiChu']?></textarea>
                                        </div>
                                        <a href="/controller/index.php?act=update&id=<?=$hopdongId[0]['hd_id']?>" class="btn btn-primary">Tiến hành cập nhật</a>
                                        <a href="/controller/index.php?act=return" class="btn btn-warning">Trở về trang chủ</a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
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