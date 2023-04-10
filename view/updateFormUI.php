<?php
if (isset($_SESSION['user_role']) && ($_SESSION['user_role'] == 1)) {

?>

<div class="main-content-inner">
                <div class="row">

                <div class="col-lg-6 col-ml-12">
                        <div class="row">
                            <!-- Textual inputs start -->
                            <div class="col-12 mt-5">
                                <div class="card"> 
                                    <div class="card-body">
                                        <?php var_dump($hopdongId)?>
                                        <h4 class="header-title">CẬP NHẬT</h4>
                                        <div class="form-group">
                                            <label for="example-date-input" class="col-form-label">Ngày Ký Hợp Đồng</label>
                                            <input class="form-control" type="date" value="<?=$hopdongId[0]['hd_ngayKyHD']?>" id="example-date-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Tên Người Lập</label>
                                            <input class="form-control" type="text" value="<?=$hopdongId[0]['hd_tenNguoiLap']?>" id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label">Trạng Thái</label>
                                            <select class="custom-select">
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
                                            <select class="custom-select">
                                                <option selected="selected">Tạo mới</option>
                                                <option value="1">Gia hạn</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label">Dịch Vụ</label>
                                            <select class="custom-select">
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
                                            <input class="form-control" type="text" value="<?=$hopdongId[0]['hd_maHopDong']?>" id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Tên Khách Hàng</label>
                                            <input class="form-control" type="text" value="<?=$hopdongId[0]['hd_tenKhachHang']?>" id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Địa chỉ Khách Hàng</label>
                                            <input class="form-control" type="text" value="<?=$hopdongId[0]['hd_diaChiKH']?>" id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Mã Số Thuế</label>
                                            <input class="form-control" type="text" value="<?=$hopdongId[0]['hd_maSoThue']?>" id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Mã BHXH (Nếu có)</label>
                                            <input class="form-control" type="text" value="<?=$hopdongId[0]['hd_maBHXH']?>" id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Tên Gói</label>
                                            <input class="form-control" type="text" value="<?=$hopdongId[0]['hd_tenGoi']?>" id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-number-input" class="col-form-label">Thời Gian (Tháng)</label>
                                            <input class="form-control" type="number" value="<?=$hopdongId[0]['hd_thoiGian']?>" id="example-number-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Giá Trước Thuế</label>
                                            <div class="input-group">
                                                <input type="text" value="<?=$hopdongId[0]['hd_giaTruocThue']?>" class="form-control" aria-label="Amount (to the nearest dollar)">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">VND</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Thuế VAT</label>
                                            <div class="input-group">
                                                <input type="text" value="<?=$hopdongId[0]['hd_thueVAT']?>" class="form-control" aria-label="Amount (to the nearest dollar)">
                                                <div class="input-group-append">
                                                    <span class="input-group-text"> % </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Giá Tiền</label>
                                            <div class="input-group">
                                                <input type="text" value="<?=$hopdongId[0]['hd_giaTien']?>" class="form-control" aria-label="Amount (to the nearest dollar)">
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
                                            <select class="custom-select">
                                                <option selected="selected">Mua</option>
                                                <option value="1">Tự trang bị</option>
                                                <option value="2">Khuyến mãi</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Mã Giao Dịch</label>
                                            <input class="form-control" type="text" value="<?=$hopdongId[0]['hd_maGiaoDich']?>" id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Mã Thuê Bao</label>
                                            <input class="form-control" type="text" value="<?=$hopdongId[0]['hd_maThueBao']?>" id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">UserName</label>
                                            <input class="form-control" type="text" value="<?=$hopdongId[0]['hd_userName']?>" id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Số Seri</label>
                                            <input class="form-control" type="text" value="<?=$hopdongId[0]['hd_soSeri']?>" id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">BBBG (Cập nhật ngày trả)</label>
                                            <input class="form-control" type="text" value="<?=$hopdongId[0]['hd_BBBG']?>" id="example-text-input">
                                        </div>  
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">GCN</label>
                                            <input class="form-control" type="text" value="<?=$hopdongId[0]['hd_GCN']?>" id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Số Hóa Đơn</label>
                                            <input class="form-control" type="text" value="<?=$hopdongId[0]['hd_soHoaDon']?>" id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Mã Tra Cứu Hóa Đơn</label>
                                            <input class="form-control" type="text" value="<?=$hopdongId[0]['hd_maTraCuuHD']?>" id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-date-input" class="col-form-label">Ngày Xuất Hóa Đơn</label>
                                            <input class="form-control" type="date" value="<?=$hopdongId[0]['hd_ngayXuatHD']?>" id="example-date-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Mẫu Hóa Đơn</label>
                                            <input class="form-control" type="text" value="<?=$hopdongId[0]['hd_mauHD']?>" id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Ghi chú</label>
                                            <textarea class="form-control" aria-label="With textarea"><?=$hopdongId[0]['hd_ghiChu']?></textarea>
                                        </div>

                                        <button class="btn btn-primary" type="submit">Update form</button>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    <!-- Bordered Table start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Sanh Sách Khởi Tạo Dịch Vụ</h4>
                                <div class="single-table">
                                    <div class="table-responsive edit-full-content-in-table">
                                        <table class="table table-bordered text-center">
                                        <thead class="text-uppercase bg-primary">
                                            <tr class="text-white">
                                                <th>STT</th>
                                                <th>Ngày Ký HD</th>
                                                <th>Tên Người Lập</th>
                                                <th>Trạng Thái</th>
                                                <th>Loại Yêu Cầu</th>
                                                <th>Dịch Vụ</th>
                                                <th>Mã Hợp Đồng</th>
                                                <th>Tên Khách Hàng</th>
                                                <th>Địa Chỉ Khách Hàng</th>
                                                <th>MST</th>
                                                <th>Mã BHXH</th>
                                                <th>Tên Gói</th>
                                                <th>Thời Gian</th>
                                                <th>Giá Trước Thuế</th>
                                                <th>Thuế VAT</th>
                                                <th>Giá Tiền</th>
                                                <th>Token</th>
                                                <th>Mã Giao Dịch</th>
                                                <th>Mã TB</th>
                                                <th>UserName</th>
                                                <th>Số Seri</th>
                                                <th>BBBG</th>
                                                <th>GCN</th>
                                                <th>Số Hóa Đơn</th>
                                                <th>Mã Tra Cứu HĐ</th>
                                                <th>Ngày Xuất HĐ</th>
                                                <th>Mã HĐ</th>
                                                <th>Ghi Chú</th>
                                                <th>Hành động</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    // var_dump($array_result);
                                                    if(isset($array_result) && (count($array_result) >= 1)){
                                                        $stt=1;
                                                        foreach ($array_result as $hopdong) {
                                                            echo '
                                                            <tr>
                                                                <th scope="row">'.$stt.'</th>
                                                                <td>'.$hopdong['hd_ngayKyHD'].'</td>
                                                                <td>'.$hopdong['hd_tenNguoiLap'].'</td>
                                                                <td>'.$hopdong['hd_trangThai'].'</td>
                                                                <td>'.$hopdong['hd_loaiYeuCau'].'</td>
                                                                <td>'.$hopdong['hd_dichVu'].'</td>
                                                                <td>'.$hopdong['hd_maHopDong'].'</td>
                                                                <td>'.$hopdong['hd_tenKhachHang'].'</td>
                                                                <td>'.$hopdong['hd_diaChiKH'].'</td>
                                                                <td>'.$hopdong['hd_maSoThue'].'</td>
                                                                <td>'.$hopdong['hd_maBHXH'].'</td>
                                                                <td>'.$hopdong['hd_tenGoi'].'</td>
                                                                <td>'.$hopdong['hd_thoiGian'].'</td>
                                                                <td>'.$hopdong['hd_giaTruocThue'].'</td>
                                                                <td>'.$hopdong['hd_thueVAT'].'</td>
                                                                <td>'.$hopdong['hd_giaTien'].'</td>
                                                                <td>'.$hopdong['hd_token'].'</td>
                                                                <td>'.$hopdong['hd_maGiaoDich'].'</td>
                                                                <td>'.$hopdong['hd_maThueBao'].'</td>
                                                                <td>'.$hopdong['hd_userName'].'</td>
                                                                <td>'.$hopdong['hd_soSeri'].'</td>
                                                                <td>'.$hopdong['hd_BBBG'].'</td>
                                                                <td>'.$hopdong['hd_GCN'].'</td>
                                                                <td>'.$hopdong['hd_soHoaDon'].'</td>
                                                                <td>'.$hopdong['hd_maTraCuuHD'].'</td>
                                                                <td>'.$hopdong['hd_ngayXuatHD'].'</td>
                                                                <td>'.$hopdong['hd_mauHD'].'</td>
                                                                <td>'.$hopdong['hd_ghiChu'].'</td>
                                                                <td>
                                                                    <a href="/controller/index.php?act=deleteData&id='.$hopdong['hd_id'].'">Xóa <i class="ti-trash"></i></a> /
                                                                    <a href="/controller/index.php?act=updateData&id='.$hopdong['hd_id'].'"> Cập nhật <i class="ti-trash"></i></a>
                                                                </td>
                                                            </tr>
                                                            ';
                                                            $stt++; 
                                                        }
                                                    }
                                                ?>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>09/04/2023</td>
                                                    <td>Lê Minh Thắng</td>
                                                    <td>Gửi Yêu Cầu</td>
                                                    <td>Gia Hạn</td>
                                                    <td>VNPT BHXH</td>
                                                    <td>211011-D0097/VNPT VNP-TTKDCTO-PKHTCDN/HĐ VNPT-CA</td>
                                                    <td>CÔNG TY TNHH THƯƠNG MẠI DỊCH VỤ CƠ GIỚI CÔNG TRÌNH TRƯỜNG TIẾN</td>
                                                    <td>230 Nguyễn Trã, Ninh Kiều, TP Cần Thơ</td>
                                                    <td>1800577863</td>
                                                    <td></td>
                                                    <td>Staff ID Pro</td>
                                                    <td>18 tháng</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>220,000</td>
                                                    <td>Tự Trang Bị</td>
                                                    <td>CTO-LD/00139319</td>
                                                    <td>cto_ca_1800577863</td>
                                                    <td>OIDCTO1800577863</td>
                                                    <td>5401010177f13a3e27e4391cd5185202</td>
                                                    <td>2023-04-11</td>
                                                    <td></td>
                                                    <td>0045704/ 25.10.21_CTO-LD/00139319</td>
                                                    <td></td>
                                                    <td>25/10/2021</td>
                                                    <td></td>
                                                    <td>Nội dung ghi chú</td>
                                                    <td>
                                                      <a href="/controller/index.php?">Xóa <i class="ti-trash"></i></a> /
                                                       <a href=""> Cập nhật <i class="ti-trash"></i></a>
                                                    </td>
                                                </tr>
                                               
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- Bordered Table end -->   
                    
                </div>
</div>

<?php 
} 

else {
    header('Location: /controller/index.php');
}
?>