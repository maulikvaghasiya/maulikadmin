 <!-- Left side column. contains the logo and sidebar -->
 <aside class="main-sidebar">
     <!-- sidebar: style can be found in sidebar.less -->
     <section class="sidebar">
         <!-- Sidebar user panel -->
         <div class="user-panel">
             <div class="pull-left image">
                 <img src="dist/img/<?php echo $u_image; ?>" class="img-circle" alt="User Image">
             </div>
             <div class="pull-left info">
                 <h5><?php echo $u_name; ?></h5>
             </div>
         </div>


         <ul class="sidebar-menu" data-widget="tree">
             <li class="active treeview">
                 <a href="">
                     <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                     <span class="pull-right-container">
                         <i class="fa fa-angle-left pull-right"></i>
                     </span>
                 </a>
                 <ul class="treeview-menu">
                     <li><a href="product.php" class="active"><i class="fa fa-circle-o"></i>PRODUCTS</a></li>
                     <li><a href="category.php" class="active"><i class="fa fa-circle-o"></i>CATEGORIES</a></li>
                     <li><a href="sub_cat.php"><i class="fa fa-circle-o"></i>SUBCATEGORIES</a></li>
                     <li><a href="order.php"><i class="fa fa-circle-o"></i>ODERS</a></li>
                     <li><a href="user1.php"><i class="fa fa-circle-o"></i>USERS</a></li>
                 </ul>
             </li>
         </ul>
     </section>
     <!-- /.sidebar -->
 </aside>