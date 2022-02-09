<?php
include "include/header.php";
//include "include/sidebar.php";
include "include/connection.php";
?>

<div class="admin-content-container">
    <h3 class="admin-heading">Update Sub Category</h3>
    <?php  
                $sub_cat_id = $_GET['id'];
                $sql = "SELECT * FROM `subcategory` where idsubcategory=$sub_cat_id";
                $result = mysqli_query($conn,$sql);
                $num = mysqli_num_rows($result);
                if ($num > 0) {
                    foreach($result as $row) {?>
    <div class="row">
        <!-- Form -->
        <form id="updateSubCategory" class="add-post-form col-md-6" method="POST">
            <input type="hidden" name="idsubcategory" value="<?php echo $row['idsubcategory']; ?>">
            <div class="form-group">
                <label>Sub Category Title</label>
                <input type="text" name="subcategoryname" class="form-control sub_category"
                    value="<?php echo $row['subcategoryname']; ?>" placeholder="" required>
            </div>
            <div class="form-group">
                <label>Category</label>
                <?php
                                $sql2 = "SELECT * FROM `category` ";
                                $result2 = mysqli_query($conn,$sql);
                                $num2 = mysqli_num_rows($result2); ?>
                <select name="parent_cat" class="form-control parent_cat">
                    <option value="">Select Category</option>
                    <?php if ($num2 > 0) {  ?>
                    <?php while($row2=mysqli_fetch_rows($result2)){ ?>
                    <option <?php if($row2['idcategory'] == $row['category_idcategory']) {?>
                        value="<?php echo $row2['idcategory']; ?>"><?php echo $row2['categoryname']; ?></option>
                    <?php }} ?>
                    <?php } ?>
                </select>
            </div>
            <input type="submit" name="sumbit" class="btn add-new" value="Update" />
        </form>
        <!-- /Form -->
    </div>
    <?php
                    }
                } else { ?>
    <div class="empty-result">!!! Result Not Found !!!</div>
    <?php } ?>
</div>
<?php
  include "include/footer.php"
?>