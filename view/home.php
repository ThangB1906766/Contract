<?php
if (isset($_SESSION['user_role']) && ($_SESSION['user_role'] == 1)) {

?>

<div class="main-content-inner">
                <div class="row">
                    <!-- Form input start -->
                    <?php include "formInput.php"; ?>
                    <!-- Form input End -->

                    <!-- Table Data start -->
                    <?php include "tableData.php"; ?>
                    <!-- Table Data End -->
                    
                </div>
</div>

<?php
} 

else {
    header('Location: /controller/index.php');
}
?>