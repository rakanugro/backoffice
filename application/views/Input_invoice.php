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

    <!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Invoice Header</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                
              <div class="card-body">
                <div class="row">
                  <div class="form-group col-sm-6">
                    <span class="fa fa-pen"></span>
                    <label for="exampleInputEmail1">Nama Shipper</label>
                    <input type="text" class="form-control" id="nama_shipper" name="nama_shipper" placeholder="Shipper" required="">
                  </div>
                  <div class="form-group col-sm-6">
                    <span class="fa fa-pen"></span>
                    <label for="exampleInputEmail1">Consumerime good</label>
                    <input type="text" class="form-control" id="con_good" name="con_good" placeholder="good" required="">
                  </div>
                  <div class="form-group col-sm-6">
                    <span class="fa fa-pen"></span>
                    <label for="exampleInputPassword1">Invoice Number</label>
                    <input type="text" class="form-control" id="invoice_no" name="invoice_no" placeholder="Invoice" required="">
                  </div>
                  <div class="form-group col-sm-6">
                    <span class="fa fa-calendar"></span>
                    <label for="exampleInputPassword1">Tgl Kirim</label>
                    <input type="text" class="form-control" id="tgl_kirim" name="tgl_kirim" placeholder="tgl_kirim">
                  </div>
                  <div class="form-group col-sm-6">
                    <span class="fa fa-pen"></span>
                    <label for="exampleInputPassword1">Term</label>
                    <input type="text" class="form-control" id="term" name="term" placeholder="term">
                  </div>
                 <div class="form-group col-sm-6">
                    <span class="fa fa-pen"></span>
                    <label for="exampleInputPassword1">Feeder/Flight</label>
                    <input type="text" class="form-control" id="feeder" name="feeder" placeholder="feeder/flight">
                  </div>
                   <div class="form-group col-sm-6">
                    <span class="fa fa-calendar"></span>
                    <label for="exampleInputPassword1">ETD</label>
                    <input type="text" class="form-control" id="etd" name="etd" placeholder="ETD">
                  </div>
                   <div class="form-group col-sm-6">
                    <span class="fa fa-pen"></span>
                    <label for="exampleInputPassword1">POL</label>
                    <input type="text" class="form-control" id="pol" name="pol" placeholder="POL">
                  </div>
                   <div class="form-group col-sm-6">
                    <span class="fa fa-pen"></span>
                    <label for="exampleInputPassword1">POD</label>
                    <input type="text" class="form-control" id="POD" name="POD" placeholder="POD">
                  </div>
                  <div class="form-group col-sm-6">
                    <span class="fa fa-pen"></span>
                    <label for="exampleInputPassword1">AWL/BL Number</label>
                    <input type="text" class="form-control" id="awl_bl" name="awl_bl" placeholder="AWL/BL">
                  </div>
                  <div class="form-group col-sm-12">
                    <span class="fa fa-pen"></span>
                    <label for="exampleInputPassword1">Consignee Name</label>
                    <input type="text" class="form-control" id="consignee_name" name="consignee_name" placeholder="Consignee">
                  </div>
                  <div class="form-group col-sm-6">
                    <span class="fa fa-pen"></span>
                    <label for="exampleInputPassword1">Container Details/Pallet/Weight</label>
                    <input type="text" class="form-control" id="container_detail" name="container_detail" placeholder="Container">
                  </div>
                  <div class="form-group col-sm-6">
                    <span class="fa fa-truck"></span>
                    <label for="exampleInputPassword1">No Container</label>
                    <input type="text" class="form-control" id="container_no" name="container_no" placeholder="Container number">
                  </div>
                   <div class="form-group col-sm-1">
                    <span class="fa fa-percent"></span>
                    <label for="exampleInputPassword1">Percent</label>
                    <input type="text" class="form-control" id="persen" name="persen" value="1">
                  </div>
                <!-- /.card-body -->

              </form>
      </div>
    </div>  
  </div>

<div class="container">
    
    <div class="form-group">
         <form name="add_name" id="add_name" method="POST" action="" enctype="multipart/form-data">
   
            <div class="table-responsive">  
                <table class="table table-bordered" id="table_harga">  
                        <th>Charges Name</th>
                        <th>Unit</th>
                        <th>Price</th>
                        <th>Amount</th>
                        <th>Action</th>
                    <tr>  
                        <td><input type="text" name="charges_name[]" id="charges_name" placeholder="charges_name" class="form-control charges_name" required="" /></td>
                        <td><input type="text" name="unit[]" id="unit-0" placeholder="unit" class="form-control unit" required=""  /></td>
                        <td><input type="text" name="price[]" id="price-0" placeholder="price" class="form-control price" required="" /></td>
                        <td><input type="text" name="amount[]" id="amount-0" placeholder="amount" class="form-control amount" readonly="" /></td>  
                        <td><button type="button" name="add" id="add" class="btn btn-success">Add</button></td>  
                    </tr>  
                </table>  
                
                
                
            </div>
   
         </form>  
    </div> 
</div>

<div class="col-lg-12">
    <div class="main-box">


          <div class="main-box-body clearfix">
          <div class="col-xs-8">
            
          </div>
          <div class="col-xs-4" style="float: right;">
            <div class="form-group col-xs-12">
              <h2><label>TOTAL</label></h2>
              
            </div>
            <div class="form-group col-xs-12">
              <label>SUB TOTAL</label>
              <input name="sub_total" id="sub_total" type="text" style="text-align: right;" class="form-control" placeholder="sub_total" readonly>
            </div>
            <div class="form-group col-xs-12">
              <label>VAT</label>
              <input name="vat" id="vat" type="text" style="text-align: right;" class="form-control" placeholder="vat" readonly>
            </div>
            <div class="form-group col-xs-12">
              <label>TOTAL</label>
              <input name="total" id="total" type="text" style="text-align: right;" class="form-control" placeholder="total" readonly>
            </div>
          </div>
        </div>
        

  </div>
</div>

<div class="form-group example-twitter-oss" align="right">
   <input type="button" name="submit" id="submit" class="btn btn-info" value="Submit" />
  </div>
<!-- <div class="container">
    
    <div class="form-group">
         <form name="add_name" id="formD" method="POST" action="" enctype="multipart/form-data">
   
            <div class="table-responsive">  
                <table class="table table-bordered" id="table_amount">  
                        <th>Charges Name</th>
                        <th>Unit</th>
                        <th>Price</th>
                        
                    <tr>  
                        <td><input type="text" name="" id="charges_name" placeholder="charges_name" class="form-control name_list" required="" /></td>
                        <td><input type="text" name="addmore[][unit]" id="unit" placeholder="unit" class="form-control name_list" required=""  /></td>
                          
                    </tr>  
                </table>  
                
                <input type="submit" name="submit" id="submit" class="btn btn-danger" value="Submit" />  
                
            </div>
   
         </form>  
    </div> 
</div> -->

</section>
    
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php $this->load->view('footer'); ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
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
</body>

<script type="text/javascript">
 //$(function(){
 $("#tgl_kirim").datepicker({
    format: 'dd/mm/yyyy'
 }); 

$("#etd").datepicker({
    format: 'dd/mm/yyyy'
 });

//////////////perhitungan-invoice////////////////
$(document).ready(function() {
  var i = 0;
  $("#unit-" + i).change(function() {
    upd_art(i)
  });
  $("#price-" + i).change(function() {
    upd_art(i)
  });
  $("#amount-" + i).change(function() {
      upd_art(i)
    });

  $('#add').click(function() {
    i++;
    $('#table_harga').append('<tr id="row' + i + '"><td><input type="text" id="charges_name" name="charges_name[]" placeholder="charges_name" class="form-control name_list" /></td><td><input type="number" value=0 id="unit-' + i + '" name="quantity[]" placeholder="quantity" class="form-control name_list" /></td> <td><input type="number" id="price-' + i + '" name="price[]" value=0  placeholder="price" class="form-control name_list" /></td> <td><input type="number" id="amount-' + i + '" name="amount[]" placeholder="amount" class="form-control name_list" readonly /></td> <td><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove">X</button></td></tr>');

    $("#unit-" + i).change(function() {
      upd_art(i)
    });
    $("#price-" + i).change(function() {
      upd_art(i)
    });
     $("#amount-" + i).change(function() {
      upd_art(i)
    });


  });


  $(document).on('click', '.btn_remove', function() {
    var button_id = $(this).attr("id");
    $('#row' + button_id + '').remove();

    upd_art(i);

  });

  $('#submit').click(function() {
    alert($('#add_name').serialize()); //alerts all values           
    $.ajax({
      url: "wwwdb.php",
      method: "POST",
      data: $('#add_name').serialize(),
      success: function(data) {
        $('#add_name')[0].reset();
      }
    });
  });

  function upd_art(i) {

    var unit = $('#unit-' + i).val();
    var price = $('#price-' + i).val();
    var totNumber = (unit * price);
    var tot = totNumber.toFixed(2);
    var Percentege = $('#persen').val(); 
    $('#amount-' + i).val(tot);

   //////
   var sum = 0;
   // Selector to select all input whose id starts with Amount
   $("input[id*='amount']").each(function(){

        sum += +$(this).val(); // Parsing as int and adding it to sum

   });

   $("#sub_total").val(sum); // Storing the values
   
   var vat = Percentege/100 * sum; //persen
   $('#vat').val(vat);

   var all_total = sum + vat;
   $('#total').val(all_total);
   /////
  }



  //  setInterval(upd_art, 1000);
});


</script>


</html>
