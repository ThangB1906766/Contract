<?php
include_once('../model/connectdb_mySQLi.php');
if(isset($_POST['maqh']) && $_POST['maqh']){
    $key = $_POST['maqh'];
    $sql = "SELECT * FROM xaphuongthitran WHERE maqh = '$key'";
    $result = $conn->query($sql);
    echo ' <option required selected="selected" value="">-----Chọn Xã, Phường hoặc Thị Trấn-----</option>';
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {

    ?>
            <option value="<?php echo $row['xaid'] ?>"><?php echo $row['name'] ?></option>

    <?php
        }
    }
}
?>
