<?php
if (isset($_SESSION['user_role']) && ($_SESSION['user_role'] == 1)) {

?>

<div class="main-content-inner">
                <div class="row">

                    <?php include "tableData.php"; ?>

                </div>
</div>

<?php
} 

else {
    header('Location: /controller/index.php');
}
?>