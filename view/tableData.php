

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