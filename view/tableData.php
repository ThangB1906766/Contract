                    <!-- Primary table start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">DANH SÁCH KHỞI TẠO DỊCH VỤ</h4>
                                <div class="data-tables datatable-primary">
                                    <table id="dataTable2" class="text-center">
                                        <a href="/controller/index.php?act=addNewAtHome" class="btn btn-danger mb-3" style="margin-bottom: 10px;width: 225px;"><h6>Thêm mới</h6></a>
                                        <thead class="text-capitalize">
                                            <tr>
                                                <th>STT</th>
                                                <th>Ngày Yêu Cầu</th>
                                                <th>Tên Nhân Viên Lập</th>
                                                <th>Trạng Thái</th>
                                                <th>Loại Yêu Cầu</th>
                                                <th>Dịch Vụ</th>
                                                <th>Tên Khách Hàng</th>
                                                <th>Mã Số Thuế</th>
                                                <th>Hành Động</th>
                                                <th>Giá Tiền</th>
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
                                                                <td>'.$hopdong['hd_ngayYeuCau'].'</td>
                                                                <td>'.$hopdong['hd_tenNguoiLap'].'</td>
                                                                <td>'.$hopdong['hd_trangThai'].'</td>
                                                                <td>'.$hopdong['hd_loaiYeuCau'].'</td>
                                                                <td>'.$hopdong['hd_dichVu'].'</td>
                                                                <td>'.$hopdong['hd_tenKhachHang'].'</td>
                                                                <td>'.$hopdong['hd_maSoThue'].'</td>
                                                                <td>
                                                                    <a style="width: 73px;" class="btn btn-primary btn-xs mb-3" href="/controller/index.php?act=detail&id='.$hopdong['hd_id'].'"> Chi tiết </i></a>
                                                                    <a class="btn btn-danger btn-xs mb-3" href="/controller/index.php?act=update&id='.$hopdong['hd_id'].'">Cập nhật</a>
                                                                </td>
                                                                <td>'.$hopdong['hd_giaTien'].'</td>
                                                            </tr>
                                                        ';
                                                        $stt++;
                                                    }
                                                }
                                            ?>
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Primary table end -->