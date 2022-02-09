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
            User Profile
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Examples</a></li>
            <li class="active">User profile</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-3">

                <!-- Profile Image -->
                <div class="box box-primary">
                    <div class="box-body box-profile">

                        <div class="pull-left image">
                            <img src="dist/img/<?php echo $u_image; ?>" class="img-circle" alt="User Image">
                        </div>

                        <h3 class="profile-username text-center"><?php echo $u_name; ?></h3>

                        <p class="text-muted text-center">Software Engineer</p>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

                <!-- About Me Box -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">About Me</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <strong><i class="fa fa-book margin-r-5"></i> Education</strong>

                        <p class="text-muted">
                            B.C.A from the Gujrat University
                        </p>

                        <hr>

                        <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

                        <p class="text-muted">Navrangpura,Ahmedabad</p>

                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
            <?php
                
                
  //if(isset($_POST['submit'])){
    //$image = $_POST['image'];

    //$sql="INSERT INTO `admin`(`image`) VALUES ('$image')";
   // $result = mysqli_query($conn,$sql);

  //  if($result){
   //   echo"image upload success";
   // }
  //}
                
              ?>
            <div class="col-md-9">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li><b>
                                <h1>&nbsp;&nbsp;<u>Update Your Details</h1>
                            </b></u></li>
                    </ul>
                    <div class="tab-content">
                        <div class="active tab-pane" id="activity">

                            <div class="tab-pane" id="settings">
                                <form class="form-horizontal" action="update_code.php" method="POST">
                                    <div class="form-group">
                                        <label for="inputName" class="col-sm-2 control-label">Name</label>

                                        <div class="col-sm-10">
                                            <input type="name" class="form-control" id="inputName" placeholder="Name"
                                                value="<?php echo $u_name; ?>">

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputName" class="col-sm-2 control-label">Surname</label>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputName" placeholder="Name"
                                                value="<?php  echo $u_surname;  ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="inputEmail" placeholder="Email"
                                                value="<?php echo $u_email;  ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail" class="col-sm-2 control-label">photo</label>
                                        <div>
                                            <input type="file" name="image">
                                        </div>
                                    </div>



                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn btn-danger" name="update">Update</button>
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

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php
  include "include/footer.php"
?>