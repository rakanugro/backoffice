<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title; ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="icon" type="image/png" href="<?php base_url();?>asset/adminlte/">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>asset/adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url();?>asset/adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url();?>asset/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo base_url();?>asset/adminlte/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>asset/adminlte/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url();?>asset/adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <!--<link rel="stylesheet" href="<?php echo base_url();?>asset/adminlte/plugins/daterangepicker/daterangepicker.css">-->
  <link rel="stylesheet" href="<?php echo base_url();?>asset/adminlte/plugins/datepicker/css/datepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url();?>asset/adminlte/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link href="<?php echo base_url()?>asset/bsb/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link navbar-primary">
      <img src="<?php echo base_url();?>asset/adminlte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Setia Samudera Abadi</span>
    </a>

    <!-- Sidebar -->
    <?php $this->load->view('sidebar'); ?>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?php echo $breadcrumb; ?></h1>
          </div><!-- /.col -->
         <!--  <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div> --><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
 <div id="notifications"><?php echo $this->session->flashdata('msg'); ?></div> 
    <!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Master Client</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             <?php echo form_open_multipart('Backoffice/simpan_client') ?>
                
              <div class="card-body">
                <div class="row">
                  <div class="form-group col-sm-6">
                    <span class="fa fa-pen"></span>
                    <label for="exampleInputEmail1">ID Client</label>
                    <input type="text" class="form-control" id="id_client" name="id_client" placeholder="ID" required="">
                  </div>
                  <div class="form-group col-sm-6">
                    <span class="fa fa-pen"></span>
                    <label for="exampleInputEmail1">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="alamat">
                  </div>
                  <div class="form-group col-sm-12">
                    <span class="fa fa-pen"></span>
                    <label for="exampleInputEmail1">Nama Client</label>
                    <input type="text" class="form-control" id="nama_client" name="nama_client" placeholder="client" required="">
                  </div>
                  <div class="form-group col-sm-6">
                    <span class="fa fa-pen"></span>
                    <label for="exampleInputPassword1">NPWP</label>
                    <input type="text" class="form-control" id="npwp" name="npwp" placeholder="npwp">
                  </div>
                  <div class="form-group col-sm-6">
                    <span class="fa fa-phone"></span>
                    <label for="exampleInputPassword1">no_tlp</label>
                    <input type="text" class="form-control" id="no_tlp" name="no_tlp" placeholder="telepon">
                  </div>
                  <div class="form-group col-sm-6">
                    <span class="fa fa-pen"></span>
                    <label for="exampleInputPassword1">SIUP</label>
                    <input type="text" class="form-control" id="siup" name="siup" placeholder="siup">
                  </div>
                 <div class="form-group col-sm-6">
                    <span class="fa fa-pen"></span>
                    <label for="exampleInputPassword1">dll</label>
                    <input type="text" class="form-control" id="dll" name="dll" placeholder="keterangan">
                  </div>
                  
                <!-- /.card-body -->
                <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Submit" />  

             <?php echo form_close() ?>
      </div>
    </div>  
  </div>


   <div class="body">
                            <div class="table-responsive">
                                <table id="table_client" class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr bgcolor="#3395FF">
                                            <th><font color="#FFFFFF">No</font></th>
                                            <th><font color="#FFFFFF">No ID</font></th>
                                            <th><font color="#FFFFFF">Alamat</font></th>
                                            <th><font color="#FFFFFF">Nama Client</font></th>
                                            <th><font color="#FFFFFF">npwp</font></th>                   <th><font color="#FFFFFF">no_tlp</font></th>
                                            <th><font color="#FFFFFF">SIUP</font></th>
                                            <th><font color="#FFFFFF">keterangan</font></th>
                                            <th><font color="#FFFFFF">Action</font></th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr bgcolor="#3395FF">
                                            <th><font color="#FFFFFF">No</font></th>
                                            <th><font color="#FFFFFF">No ID</font></th>
                                            <th><font color="#FFFFFF">Alamat</font></th>
                                            <th><font color="#FFFFFF">Nama Client</font></th>
                                            <th><font color="#FFFFFF">npwp</font></th>
                                            <th><font color="#FFFFFF">no_tlp</font></th>
                                            <th><font color="#FFFFFF">SIUP</font></th>
                                            <th><font color="#FFFFFF">keterangan</font></th>
                                            <th><font color="#FFFFFF">Action</font></th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        
                                        <?php 

                                        $no = 1;
                                        foreach ($data_client as $hasil) {
                                            
                                        
                                        ?>

                                          <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $hasil->id_client ?></td>
                                            <td><?php echo $hasil->alamat ?></td>
                                            <td><?php echo $hasil->nama_client ?></td>   
                                            <td><?php echo $hasil->npwp ?></td>
                                            <td><?php echo $hasil->no_tlp ?></td>
                                            <td><?php echo $hasil->siup ?></td>
                                            <td><?php echo $hasil->dll ?></td>

                                          <td>
                                            <a onclick="edit_call();return false;" id="edit" href="# <?php echo $hasil->no_id ?>" class="btn btn-sm btn-success">Edit</a>
                                            <!-- <a href="<?php echo base_url() ?>product/hapus/<?php echo $hasil->id_product ?>" class="btn btn-sm btn-danger" onclick="return confirmdelete()">Delete</a> -->
                                            </td>
                                        </tr>

                                         <?php } ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>


</section>

<!-- Modal -->
<div class="modal fade" id="editform" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Tutup</span>
                </button>
                <h4 class="modal-title" id="labelModalKu">Edit</h4>
            </div>
            <!-- Modal Body -->
            <div class="modal-body">
                <p class="statusMsg"></p>
                <form role="form">
                  <div class="form-group">
                        <label for="id_client">ID Client</label>
                        <input type="text" class="form-control" id="id_client" placeholder="edit ID" readonly="" />
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="Alamat" placeholder="edit alamat"/>
                    </div>
                    <div class="form-group">
                        <label for="namaclient">Nama Client</label>
                        <input type="text" class="form-control" id="nama_client" placeholder="edit client"/>
                    </div>
                    <div class="form-group">
                        <label for="npwp">NPWP</label>
                        <input type="text" class="form-control" id="npwp" placeholder="edit npwp"/>
                    </div>
                    <div class="form-group">
                        <label for="npwp">No Telp</label>
                        <input type="text" class="form-control" id="no_tlp" placeholder="edit tlp"/>
                    </div>
                    <div class="form-group">
                        <label for="npwp">SIUP</label>
                        <input type="text" class="form-control" id="siup" placeholder="edit siup"/>
                    </div>
                    <div class="form-group">
                        <label for="npwp">Keterangan</label>
                        <input type="text" class="form-control" id="keterangan" placeholder="edit ket"/>
                    </div>
                </form>
            </div>
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger submitBtn" onclick="kirimContactForm()">Save</button>
            </div>
        </div>
    </div>
</div>
    
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php $this->load->view('footer'); ?>

  <!-- Control Sidebar -->
  <aside class="cont rol-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url();?>asset/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url();?>asset/adminlte/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url();?>asset/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url();?>asset/adminlte/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url();?>asset/adminlte/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?php echo base_url();?>asset/adminlte/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo base_url();?>asset/adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url();?>asset/adminlte/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url();?>asset/adminlte/plugins/moment/moment.min.js"></script>
<!--<script src="<?php echo base_url();?>asset/adminlte/plugins/daterangepicker/daterangepicker.js"></script>-->
<script src="<?php echo base_url();?>asset/adminlte/plugins/datepicker/js/bootstrap-datepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url();?>asset/adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo base_url();?>asset/adminlte/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url();?>asset/adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>asset/adminlte/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url();?>asset/adminlte/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>asset/adminlte/dist/js/demo.js"></script>
 <script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url();?>asset/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url();?>asset/adminlte/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url();?>asset/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>asset/adminlte/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>asset/adminlte/dist/js/demo.js"></script>
<!-- page script -->
<script>
  $('#notifications').slideDown('slow').delay(3000).slideUp('slow');

  $(function () {
    //$("#example1").DataTable();
    $('#table_client').DataTable({
      "paging": true,
       "pageLength": 5,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
</body>


</html>

<script type="text/javascript">

  function edit_call()
  {
    $('#editform').modal('show');
  }

</script>