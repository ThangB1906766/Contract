
<?php
include_once('../model/connectdb_mySQLi.php');
if(isset($_POST['matp']) && $_POST['matp']){
    $key = $_POST['matp'];
    $sql = "SELECT * FROM quanhuyen WHERE matp = '$key'";
    $result = $conn->query($sql);
    echo ' <option required selected="selected" value="">-----Chọn Quận Huyện-----</option>';
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {

    ?>
            <option value="<?php echo $row['maqh'] ?>"><?php echo $row['name'] ?></option>

    <?php
        }
    }
}
?>
