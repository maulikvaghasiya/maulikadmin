<?php

include 'include/header.php'; 
include 'include/sidebar.php'; 
include 'include/connection.php'; 

?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h2 class="admin-heading">Add New Category</h2>
        <form id="createCategory" class="" method="POST">
            <div class="form-group">
                <label>Category Name</label>
                <input type="text" name="cat" class="form-control category" placeholder="Category Name" required />
            </div>
            <input type="submit" name="save" class="btn add-new btn-primary" value="Submit">
        </form>
    </section>
</div>
<?php

    if(isset($_POST['save'])){
        $add_cat = $_POST['cat'];

        $sql = "INSERT INTO `category`(`categoryname`) VALUES ('$add_cat')";
        $result = mysqli_query($conn,$sql);

        if($result){
            echo "<script>
       window.location.href='category.php' </script>";
        }else{
            echo"fail";
        }
        
    }

    include "include/footer.php";
?>