<?php
include 'include/connection.php';

    if(isset($_POST['update'])){
        $cat_id = $_POST['cat_id'];
        $cat_name = $_POST['cat_name'];

        $sql = "UPDATE `category` SET `categoryname` = '$cat_name' WHERE `idcategory` = '$cat_id';";
        $result = mysqli_query($conn,$sql);

        if($result){
            echo "updated";
            header("location:category.php");
        }else{
            echo "fail";
        }
    }

    if(isset($_POST['cate_delete_btn'])){
        $cat_id = $_POST['cate_delete_id'];

        echo $cat_id;

        
        $sql3 = "DELETE FROM `subcategory` WHERE category_idcategory= $cat_id ";
        $result3 = mysqli_query($conn,$sql3);
       
        if($result3){
            echo "done";
        }
        else{
            echo "not";
        }
        // $sql2 = "DELETE FROM `category` WHERE idcategory = '$cat_id' ";
        // // $sql3
        // $result2 = mysqli_query($conn,$sql2);
        // if($result2){
        //     echo "success";
        // }else{
        //     echo "fail";
        // }
    }

    
?>