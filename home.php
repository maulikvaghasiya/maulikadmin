<?php
include "include/header.php";
include "include/sidebar.php";
include "include/connection.php";
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard

        </h1>

    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-4 col-xs-8">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>
                            <?php
                             $sql = "SELECT * FROM `sales_orders`";
                             $result = mysqli_query($conn,$sql);
                             $num = mysqli_num_rows($result);
                             echo $num;
                          ?>
                        </h3>
                        <p> order</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="order.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-xs-8">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>
                            <?php
                            $sql = "SELECT * FROM `product`";
                            $result = mysqli_query($conn,$sql);
                            $num = mysqli_num_rows($result);
                            echo $num;
                          ?></h3>
                        <p>Product</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="product.php" class="small-box-footer">More info <i
                            class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-xs-8">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3>
                            <?php
                            $sql = "SELECT * FROM `category`";
                            $result = mysqli_query($conn,$sql);
                            $num = mysqli_num_rows($result);
                            echo $num;
                          ?></h3>
                        <p>Category</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="category.php" class="small-box-footer">More info <i
                            class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3><?php
                            $sql = "SELECT * FROM `subcategory`";
                            $result = mysqli_query($conn,$sql);
                            $num = mysqli_num_rows($result);
                            echo $num;
                            ?></h3>
                        <p>Subcategory</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="sub_cat.php" class="small-box-footer">More info <i
                            class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3><?php
                            $sql = "SELECT * FROM `user`";
                            $result = mysqli_query($conn,$sql);
                            $num = mysqli_num_rows($result);
                            echo $num;
                            ?></h3>
                        <p>USERS</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="user1.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <!-- ./col -->
        </div>
        <!-- /.row (main row) -->
    </section>
    <!-- /.content -->
</div>
<?php
  include "include/footer.php"
  ?>