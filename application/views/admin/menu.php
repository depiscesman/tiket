 <!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?php echo base_url('assets/gambar/'.$this->session->userdata('gambar'));?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><?php echo  $this->session->userdata('username'); ?></p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
         <!--  <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form> -->
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
           <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> 
                    <span>Dashboard</span> 
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
               <!--  <li class="active"><a href=""><i class="fa fa-circle-o"></i>Menu</a></li> -->
                <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Setting</span>
                <i class="fa fa-angle-left pull-right"></i>
               <!--  <span class="label label-primary pull-right">4</span> -->
              </a>
              <ul class="treeview-menu">
                <li><i class="fa fa-circle-o"><?php echo anchor('admin/menu','Menu'); ?></i></li>
                <li><i class="fa fa-circle-o"><?php echo anchor('admin/user','User'); ?></i></li>
               </ul>
            </li>
          
    </section>
<!-- /.sidebar -->
</aside>
<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
      <?= $contents?>