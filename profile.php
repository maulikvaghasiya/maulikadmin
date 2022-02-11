<?php
include "include/header.php";
 include "include/sidebar.php";
include "include/connection.php";
?>

<?php

if(isset($_POST['updatep'])){
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];

    $sql = "UPDATE `admin` SET `first_name` = '$name', `last_name` = '$surname', `email_id` = '$email' WHERE `idadmin` = '$id'";
    $result = mysqli_query($conn,$sql);
    if($result>0){
      //  echo "updated";
      
      echo "<script>
       window.location.href='home.php' </script>";
        
    }else{
        echo "fail";
    }
}
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            User Profile
        </h1>

    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-3">

                <!-- Profile Image -->
                <div class="box box-primary">
                    <div class="box-body box-profile">
                        <div class="pull-left image">
                            <img src="dist/img/<?php echo $img; ?>" class="img-circle" alt="User Image">
                        </div>
                        <h3 class="profile-username text-center"><?php echo $name; ?></h3>
                        <p class="text-muted text-center">Software Engineer</p>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li><b>
                                <h1>&nbsp;&nbsp;<u>Update Your Details</u></h1>
                            </b></li>
                    </ul>
                    <div class="tab-content">
                        <div class="active tab-pane" id="activity">
                            <div class="tab-pane" id="settings">
                                <form class="form-horizontal" action="" method="POST">
                                    <div class="form-group">
                                        <label for="inputName" class="col-sm-2 control-label">Name</label>

                                        <div class="col-sm-10">
                                            <input type="name" class="form-control" id="inputName" placeholder="Name"
                                                name="name" value="<?php echo $name; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputName" class="col-sm-2 control-label">Surname</label>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputName" placeholder="Name"
                                                name="surname" value="<?php  echo $surname;  ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="inputEmail" placeholder="Email"
                                                name="email" value="<?php echo $emailid;  ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn btn-danger" name="updatep">Update</button>

                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                    </div>
                    <!-- /.nav-tabs-custom -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
   
  include "include/footer.php"
?>