function kiemTraDangNhap(){
    console.log("Login Clicked!!")
    var taikhoan = $("#taikhoan").val();
    var matkhau = $("#matkhau").val();
    console.log(taikhoan);
    console.log(matkhau);
    $.ajax({
        url: './checkAdmin.php', 
        method: "POST",
        data:{
            // checkLogEmail: "checkLogEmail",
            taikhoan: taikhoan,
            matkhau: matkhau,
        },
        success:function(data){
            //  console.log(taikhoan);
            //  console.log(matkhau);
            console.log(data);
            if(data == 0){
                $("#thongBao").html('<small class="alert alert-danger"> Sai tên tài khoản hoặc mật khẩu !</small>'); 
            }else if(data == 1){
                $("#thongBao").html('<div class="spinner-border text-success role="status"></div>');
                setTimeout(()=>{
                    window.location.href = "home.html";
                }, 1000 );
            }
        }
    });
    alert("Sai tên tài khoản hoặc mật khẩu !!");
}