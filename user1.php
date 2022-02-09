<?php
include "include/header.php";
include "include/sidebar.php";
include "include/connection.php";
?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            All User

        </h1>

    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->

        <table class="table table-striped table-hover table-bordered" id="myTable">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">EMAIL ID</th>
                    <th scope="col">NAME</th>
                    <th scope="col">BUSINESS NAME</th>
                    <th scope="col">GST NO.</th>
                    <th scope="col">MOBILE NO.</th>
                    <th scope="col">PAN NO.</th>
                    <th scope="col">AADHAR NO.</th>
                    <th scope="col">BANK ACC. NO.</th>
                    <th scope="col">ADDRESS</th>
                    <th scope="col">COMMISSION RATE</th>
                    <th scope="col">USER</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM `user`";
                $result = mysqli_query($conn,$sql);

                while($rows = mysqli_fetch_assoc($result)){
                   echo" <tr>
                        <th>". $rows['idRegister'] ."</th>
                        <td>". $rows['email_id'] ."</td>
                        <td>". $rows['name'] ."</td>
                        <td>". $rows['bussiness_name'] ."</td>
                        <th>". $rows['gst_number'] ."</th>
                        <td>". $rows['mobile_number'] ."</td>
                        <td>". $rows['pancard'] ."</td>
                        <td>". $rows['addhar_card'] ."</td>
                        <td>". $rows['bankaccount_number'] ."</td>
                        <td>". $rows['address'] ."</td>
                        <td>". $rows['commissionn_rate'] ." %</td>
                        <td>"; ?> <?php if($rows['is_seller']==1){
                            echo"Seller";
                        }else{
                            echo"Buyer";
                        } ?> <?php echo"</td>
                    </tr>";   
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