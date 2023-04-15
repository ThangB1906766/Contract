    // JQuery
    $(document).ready(function () {
        $(".thoiGian" || ".tenGoi" || ".dichVu" || ".loaiYeuCau").change(function (e) { 
            e.preventDefault();
            var thoiGian = $("#thoiGian").val();
            var tenGoi = $("#tenGoi").val();
            var dichVu = $("#dichVu").val();
            var loaiYeuCau = $("#loaiYeuCau").val();

            // alert(thoiGian);
            // alert(tenGoi);
            // alert(dichVu);
            // alert(loaiYeuCau);

                $.post("/model/money.php",{
                    thoiGian: thoiGian,
                    tenGoi: tenGoi,
                    dichVu: dichVu,
                    loaiYeuCau, loaiYeuCau
                    },
                    function (data) {                       
                        // var giaTien =  $("#hd_giaTien");
                        var giaTien =  $("#hd_giaTien");
                        giaTien.val(data);
                    }
                    
                );
        });

        $(".tenGoi").change(function (e) { 
            e.preventDefault();
            var thoiGian = $("#thoiGian").val();
            var tenGoi = $("#tenGoi").val();
            var dichVu = $("#dichVu").val();
            var loaiYeuCau = $("#loaiYeuCau").val();

                $.post("/model/money.php",{
                    thoiGian: thoiGian,
                    tenGoi: tenGoi,
                    dichVu: dichVu,
                    loaiYeuCau, loaiYeuCau
                    },
                    function (data) {                       
                        var giaTien =  $("#hd_giaTien");
                        giaTien.val(data);
                    }
                    
                );
        });

        $(".dichVu").change(function (e) { 
            e.preventDefault();
            var thoiGian = $("#thoiGian").val();
            var tenGoi = $("#tenGoi").val();
            var dichVu = $("#dichVu").val();
            var loaiYeuCau = $("#loaiYeuCau").val();

                $.post("/model/money.php",{
                    thoiGian: thoiGian,
                    tenGoi: tenGoi,
                    dichVu: dichVu,
                    loaiYeuCau, loaiYeuCau
                    },
                    function (data) {                       
                        var giaTien =  $("#hd_giaTien");
                        giaTien.val(data);
                    }
                    
                );
        });

        $(".loaiYeuCau").change(function (e) { 
            e.preventDefault();
            var thoiGian = $("#thoiGian").val();
            var tenGoi = $("#tenGoi").val();
            var dichVu = $("#dichVu").val();
            var loaiYeuCau = $("#loaiYeuCau").val();

                $.post("/model/money.php",{
                    thoiGian: thoiGian,
                    tenGoi: tenGoi,
                    dichVu: dichVu,
                    loaiYeuCau, loaiYeuCau
                    },
                    function (data) {                       
                        var giaTien =  $("#hd_giaTien");
                        giaTien.val(data);
                    }
                    
                );
        });
    });

