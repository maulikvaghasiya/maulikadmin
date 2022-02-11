<?php
include "include/header.php";
include "include/sidebar.php";
include "include/connection.php";
?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <div class="row ">
        <!-- Form -->
        <form action="update_code.php" class="add-post-form col-md-6" method="POST">
            <?php
            $sub_cat_id = $_GET['subid'];
            $sql = "SELECT * FROM `subcategory` where idsubcategory=$sub_cat_id";
            $result = mysqli_query($conn,$sql);
            $num = mysqli_num_rows($result);
            if ($num > 0) {
                foreach($result as $row){
            ?>
            <input type="hidden" name="sub_cat_id" value="<?php echo $row['idsubcategory']; ?>">

            <div class="form-group">
                <label>SubCategory Name</label>
                <input type="text" name="sub_cat_name" class="form-control"
                    value="<?php echo $row['subcategoryname']; ?>" placeholder="subCategory Name" required />
            </div>
            <form id="createCategory" class="" method="POST">
                <div class="form-group">
                    <label>Select Category</label>
                    <select name="subid">
                        <?php
                  $selectcategory="SELECT * FROM category";
                  $res=mysqli_query($conn,$selectcategory);
                  $num=mysqli_num_rows($res);
                    if($num>0){
                        while($row=mysqli_fetch_array($res)){ 
                            echo '<option  value='.$row["idcategory"].'>'.$row["categoryname"].'</option>';
                            $value= $row["idcategory"];
                            }      
                   }
                   ?>
                    </select>
                </div>
                <input type="submit" name="updatesubcat" class="btn btn-primary" value="Update" />
            </form>

        </form>
        <!-- /Form -->
    </div>
    <!-- /.content -->
    <?php
                }
            } else { ?>
    <div class="not-found">!!! Result Not Found !!!</div>
    <?php  } ?>
</div>
<?php




?>
<?php

include 'include/footer.php';

?>