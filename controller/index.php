
<?php
        session_start();
        ob_start();
        include "../model/connectdb.php";
        include "../model/user.php"; 
        include "../model/table.php";
        include "../model/form.php";

        
            if(isset($_GET['act'])){
                $act = $_GET['act'];
                    switch ($act) {
                        case 'login':
                            if((isset($_POST['login'])) && ($_POST['login'])){
                                $user = $_POST['user'];
                                $pass = $_POST['pass'];
                                $role = checkUser($user, $pass); // checkUser => return 0 or 1
                                if($role == 1){
                                    $_SESSION['user_role'] = $role;
                                    $_SESSION['user_taiKhoan'] = $user;

                                    // $array_result = getAllDataInTable();
                                    $array_result = getAllDataInTable();

                                    include "../view/headerAdmin.php";
                                    include "../view/home.php";
                                    include "../view/footerAdmin.php";
                                    
                                }else{
                                    echo '<script type="text/javascript">
                                                window.onload = function () { alert("Sai tên tài khoản hoặc mật khẩu!"); }
                                            </script>';
                                    include "../view/login.php";
                                    break;
                                }
                            }else{
                                header('location: ../view/login.php');
                            }
                            break;
                        case 'confirm_addNew':
                            
                            if(isset($_POST['btn_confirm_addNew']) && $_POST['btn_confirm_addNew']){
                                $hd_ngayKyHD = $_POST['hd_ngayKyHD'];
                                $hd_tenNguoiLap = $_POST['hd_tenNguoiLap'];
                                $hd_trangThai = $_POST['hd_trangThai'];
                                $hd_loaiYeuCau = $_POST['hd_loaiYeuCau'];
                                $hd_dichVu = $_POST['hd_dichVu'];
                                $hd_maHopDong = $_POST['hd_maHopDong'];
                                $hd_tenKhachHang = $_POST['hd_tenKhachHang'];
                                $hd_diaChiKH = $_POST['hd_diaChiKH'];
                                $hd_maSoThue = $_POST['hd_maSoThue'];
                                $hd_maBHXH = $_POST['hd_maBHXH'];
                                $hd_tenGoi = $_POST['hd_tenGoi'];
                                $hd_thoiGian = $_POST['hd_thoiGian'];
                                $hd_giaTruocThue = $_POST['hd_giaTruocThue'];
                                $hd_thueVAT = $_POST['hd_thueVAT'];
                                $hd_giaTien = $_POST['hd_giaTien'];
                                $hd_token = $_POST['hd_token'];
                                $hd_maGiaoDich = $_POST['hd_maGiaoDich'];
                                $hd_maThueBao = $_POST['hd_maThueBao'];
                                $hd_userName = $_POST['hd_userName'];
                                $hd_soSeri = $_POST['hd_soSeri'];
                                $hd_BBBG = $_POST['hd_BBBG'];
                                $hd_GCN = $_POST['hd_GCN'];
                                $hd_soHoaDon = $_POST['hd_soHoaDon'];
                                $hd_maTraCuuHD = $_POST['hd_maTraCuuHD'];
                                $hd_ngayXuatHD = $_POST['hd_ngayXuatHD'];
                                $hd_mauHD = $_POST['hd_mauHD'];
                                $hd_ghiChu = $_POST['hd_ghiChu'];
                                addNewData($hd_ngayKyHD, $hd_tenNguoiLap, $hd_trangThai, $hd_loaiYeuCau, $hd_dichVu, $hd_maHopDong, $hd_tenKhachHang, $hd_diaChiKH, $hd_maSoThue, $hd_maBHXH, $hd_tenGoi, $hd_thoiGian, $hd_giaTruocThue, $hd_thueVAT, $hd_giaTien, $hd_token, $hd_maGiaoDich, $hd_maThueBao, $hd_userName, $hd_soSeri, $hd_BBBG, $hd_GCN, $hd_soHoaDon, $hd_maTraCuuHD, $hd_ngayXuatHD, $hd_mauHD, $hd_ghiChu);
                            }

                            $array_result = getAllDataInTable();
                            include "../view/headerAdmin.php";
                            include "../view/home.php";
                            include "../view/footerAdmin.php";
                            break;
                        case 'logout':
                            if(isset($_SESSION['user_role'])){
                                unset($_SESSION['user_role']);
                            }
                            header('location: index.php');
                            break;

                        case 'addNewAtHome':
                            $array_result = getAllDataInTable();
                            include "../view/headerAdmin.php";
                            include "../view/addNewUI.php";
                            include "../view/footerAdmin.php";
                            break;
                        case 'return':
                            $array_result = getAllDataInTable();
                            include "../view/headerAdmin.php";
                            include "../view/home.php";
                            include "../view/footerAdmin.php";
                            break;
                        case 'detail':
                            if(isset($_GET['id'])){
                                $id = $_GET['id'];
                                $hopdongId= getDataById($id); // Hiển thị dữ liệu lên form theo id
                                $nameOption= getOptionById($id); // Hiển thị tên option trong csdl theo id
                                $array_result = getAllDataInTable();
                                include "../view/headerAdmin.php";
                                include "../view/detailFormUI.php";
                                include "../view/footerAdmin.php";
                            }
                            break;
                        case 'update':
                                if(isset($_GET['id'])){
                                    $id = $_GET['id'];
                                    $hopdongId= getDataById($id);
                                    $nameOption= getOptionById($id);
                                    $array_result = getAllDataInTable();
                                    include "../view/headerAdmin.php";
                                    include "../view/updateFormUI.php";
                                    include "../view/footerAdmin.php";
                                }
                                if(isset($_POST['hd_id'])){
                                        $hd_id = $_POST['hd_id'];
                                        $hd_ngayKyHD = $_POST['hd_ngayKyHD'];
                                        $hd_tenNguoiLap = $_POST['hd_tenNguoiLap'];
                                        $hd_trangThai = $_POST['hd_trangThai'];
                                        $hd_loaiYeuCau = $_POST['hd_loaiYeuCau'];
                                        $hd_dichVu = $_POST['hd_dichVu'];
                                        $hd_maHopDong = $_POST['hd_maHopDong'];
                                        $hd_tenKhachHang = $_POST['hd_tenKhachHang'];
                                        $hd_diaChiKH = $_POST['hd_diaChiKH'];
                                        $hd_maSoThue = $_POST['hd_maSoThue'];
                                        $hd_maBHXH = $_POST['hd_maBHXH'];
                                        $hd_tenGoi = $_POST['hd_tenGoi'];
                                        $hd_thoiGian = $_POST['hd_thoiGian'];
                                        $hd_giaTruocThue = $_POST['hd_giaTruocThue'];
                                        $hd_thueVAT = $_POST['hd_thueVAT'];
                                        $hd_giaTien = $_POST['hd_giaTien'];
                                        $hd_token = $_POST['hd_token'];
                                        $hd_maGiaoDich = $_POST['hd_maGiaoDich'];
                                        $hd_maThueBao = $_POST['hd_maThueBao'];
                                        $hd_userName = $_POST['hd_userName'];
                                        $hd_soSeri = $_POST['hd_soSeri'];
                                        $hd_BBBG = $_POST['hd_BBBG'];
                                        $hd_GCN = $_POST['hd_GCN'];
                                        $hd_soHoaDon = $_POST['hd_soHoaDon'];
                                        $hd_maTraCuuHD = $_POST['hd_maTraCuuHD'];
                                        $hd_ngayXuatHD = $_POST['hd_ngayXuatHD'];
                                        $hd_mauHD = $_POST['hd_mauHD'];
                                        $hd_ghiChu = $_POST['hd_ghiChu'];
                                    updateDataById($hd_id, $hd_ngayKyHD, $hd_tenNguoiLap, $hd_trangThai, $hd_loaiYeuCau, $hd_dichVu, $hd_maHopDong, $hd_tenKhachHang, $hd_diaChiKH, $hd_maSoThue, $hd_maBHXH, $hd_tenGoi, $hd_thoiGian, $hd_giaTruocThue, $hd_thueVAT, $hd_giaTien, $hd_token, $hd_maGiaoDich, $hd_maThueBao, $hd_userName, $hd_soSeri, $hd_BBBG, $hd_GCN, $hd_soHoaDon, $hd_maTraCuuHD, $hd_ngayXuatHD, $hd_mauHD, $hd_ghiChu);
                                    
                                    $array_result = getAllDataInTable();
                                    include "../view/headerAdmin.php";
                                    include "../view/home.php";
                                    include "../view/footerAdmin.php";
                                }
                            break;
                        default:
                            include "../view/login.php";
                            break;
                    }
            }else{
                header('location: ../view/login.php');
            }
?>


 