$(document).ready(function(){
    $(".tinhThanhPho").change(function(){
        var matp = $(".tinhThanhPho").val();
        //  alert(matp);
        $.post("/view/getQuanHuyen.php", {matp: matp}, function(getQuanHuyen){
            $(".quanHuyen").html(getQuanHuyen);
        })
    })

    $(".quanHuyen").change(function(){ 
        var maqh = $(".quanHuyen").val();
        // alert(maqh);
         $.post("/view/getXaPhuongThiTran.php", {maqh: maqh}, function(getXaPhuongThiTran){
             $(".xaPhuongThiTran").html(getXaPhuongThiTran);
         })
    })
})