<?php
include "include/header.php";
include "include/sidebar.php";
include "include/connection.php";
?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            All Product

        </h1>

    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->

        <table class="table table-striped table-hover table-bordered" id="myTable">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">TITLE</th>
                    <th scope="col">BRAND</th>
                    <th scope="col">QTY</th>
                    <th scope="col">QTY_PER SET</th>
                    <th scope="col">MRP</th>
                    <th scope="col">PRICE</th>
                    <th scope="col">DESCRIPTION</th>
                    <th scope="col">IMAGE</th>
                    <th scope="col">HSN_CODE</th>
                    <th scope="col">GST_NO.</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM `product`";
                $result = mysqli_query($conn,$sql);
                $cnt=1; 
                while($rows = mysqli_fetch_assoc($result)){
                   echo" <tr>
                        <th>". $cnt ."</th>
                        <td>". $rows['pname'] ."</td>
                        <td>". $rows['brand'] ."</td>
                        <td>". $rows['minimum_set_qut-pur'] ."</td>
                        <td>". $rows['quantity_of_1_set'] ."</td>
                        <td>". $rows['MRP'] ."</td>
                        <td>". $rows['price'] ."</td>
                        <td>". $rows['description'] ."</td>
                        <td><img src='".$rows['image']."' height='100' width='100'>"."</td>
                        <td>". $rows['HSN_code'] ."</td>
                        <td>". $rows['GST_rate'] ."</td>
                    </tr>";
                    $cnt++;   
                }
            ?>
            </tbody>
        </table>
        <!-- /.row (main row) -->
    </section>
    <!-- /.content -->
</div>
<?php

include 'include/footer.php';

?>