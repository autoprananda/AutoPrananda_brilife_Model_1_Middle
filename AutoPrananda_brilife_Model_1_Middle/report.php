<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Keluarga Berencana</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />    
    <!-- FontAwesome 4.3.0 -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />    
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />

    <style>
      .footer {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 40px;
        background-color: #0080FF;
        color: white;
        text-align: center;
        padding-top: 10px;
      }
    </style>
  </head>
  <body class="skin-blue">
    <div class="wrapper">
      
     <header class="main-header">
        <!-- Logo -->
        <a href="index.php" class="logo"><b>Keluarga Berencana</b></a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="dist/img/autoprananda.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
              <br><br>
              <a href="#" class="d-block">Auto Prananda</a>
            </div>
          </div>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="treeview">
              <a href="index.php">
              <span>Home</span>
              </a>
			  </li>
        <li class="treeview">
              <a href="listpropinsi.php">
                <span>List Provinsi</span>
              </a>
			  </li>
			  <li class="treeview">
              <a href="listkontrasepsi.php">
              <span>List Kontrasepsi</span>
              </a>
			  </li>
			  <li class="treeview">
              <a href="listpemakai.php">
              <span>List Pemakai Kontrasepsi</span>
              </a>
			  </li>
			  <li class="active treeview">
              <a href="report.php">
              <i class="fas fa-chart-bar"></i> <span>Report</span>
              </a>
			  </li>
        </section>
        <!-- /.sidebar -->
      </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

	
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <center>
                <br><br>
                <h4><b>BADAN KOORDINASI KELUARGA BERENCANA NASIONAL</b></h4>
                <h4><b>REKAPTULASI PEMAKAI ALAT KONTRASEPSI DI INDONESIA</b></h4>
                
              </center>
                

			
            <!-- /.box-header -->
			<br><br><br>
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
				<style>
				table, th, td {
				border: 1px solid black;
				border-collapse: collapse;
				}
				</style>
				<table style="width:100%">
                        <tr>
						<th rowspan = "2"><center>Provinsi</th>
						<th colspan="3"><center>Pemakai Alat Kontrasepsi</th>
						<th rowspan = "2"><center>Jumlah</th>
						</tr>
						<tr>
						
						<td><center><b>Kondom</b></td>
						<td><center><b>Pil</b></td>
						<td><center><b>IUD</b></td>
						
						</tr>
						
						</thead> 
					<?php

						$host="localhost";
						$username="root";
						$passwords="";
						$database="db_keluarga_berencana";

						$koneksi = mysqli_connect($host,$username,$passwords,$database) or die("tidak bisabter hubung ke database");
						$query="select distinct(list_provinsi.nama_provinsi) from list_pemakai_kontrasepsi
								inner join list_provinsi on list_pemakai_kontrasepsi.id_provinsi=list_provinsi.id_provinsi";
						$result=mysqli_query($koneksi,$query);


						if ($result)
						 {
						  while ($h = mysqli_fetch_array($result)) 
						  {
							extract($h);
							$query1="select sum(list_pemakai_kontrasepsi.jumlah_pemakai) as jumlah_pemakai from list_pemakai_kontrasepsi
											inner join list_provinsi on list_pemakai_kontrasepsi.id_provinsi=list_provinsi.id_provinsi
											INNER JOIN list_kontrasepsi ON list_pemakai_kontrasepsi.id_kontrasepsi = list_kontrasepsi.id_kontrasepsi
											where list_provinsi.nama_provinsi='$h[nama_provinsi]' and list_kontrasepsi.id_kontrasepsi=2";
							$res=mysqli_query($koneksi,$query1);
							while ($i = mysqli_fetch_array($res)) 
							{
							extract($i);
							$query2="select sum(list_pemakai_kontrasepsi.jumlah_pemakai) as jumlah_pemakai from list_pemakai_kontrasepsi
											inner join list_provinsi on list_pemakai_kontrasepsi.id_provinsi=list_provinsi.id_provinsi
											INNER JOIN list_kontrasepsi ON list_pemakai_kontrasepsi.id_kontrasepsi = list_kontrasepsi.id_kontrasepsi
											where list_provinsi.nama_provinsi='$h[nama_provinsi]' and list_kontrasepsi.id_kontrasepsi=1";
							$res2=mysqli_query($koneksi,$query2);
							while ($j = mysqli_fetch_array($res2)) 
							{
							extract($j);
							$query3="select sum(list_pemakai_kontrasepsi.jumlah_pemakai) as jumlah_pemakai from list_pemakai_kontrasepsi
											inner join list_provinsi on list_pemakai_kontrasepsi.id_provinsi=list_provinsi.id_provinsi
											INNER JOIN list_kontrasepsi ON list_pemakai_kontrasepsi.id_kontrasepsi = list_kontrasepsi.id_kontrasepsi
											where list_provinsi.nama_provinsi='$h[nama_provinsi]' and list_kontrasepsi.id_kontrasepsi=3";
							$res3=mysqli_query($koneksi,$query3);
							while ($k = mysqli_fetch_array($res3)) 
							{
							extract($k);
							$query4="select sum(list_pemakai_kontrasepsi.jumlah_pemakai) as jumlah_pemakai from list_pemakai_kontrasepsi
											inner join list_provinsi on list_pemakai_kontrasepsi.id_provinsi=list_provinsi.id_provinsi
											INNER JOIN list_kontrasepsi ON list_pemakai_kontrasepsi.id_kontrasepsi = list_kontrasepsi.id_kontrasepsi
											where list_provinsi.nama_provinsi='$h[nama_provinsi]'";
							$res4=mysqli_query($koneksi,$query4);
							while ($l = mysqli_fetch_array($res4)) 
							{
							extract($l);
													
							?>
										<tr>
										<td><?php echo"$h[nama_provinsi]"; ?></td>
										<td><center><?php echo"$i[jumlah_pemakai]"; ?></center></td>
										<td><center><?php echo"$j[jumlah_pemakai]"; ?></center></td>
										<td><center><?php echo"$k[jumlah_pemakai]"; ?></center></td>
										<td><center><?php echo"$l[jumlah_pemakai]"; ?></center></td>
										
										</tr>
									   <?php

								  }
								}
						 }
						 }}}
								  ?>	
								  
											
					</tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

		  </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<footer class="footer">
      <p>BADAN KOORDINASI KELUARGA BERENCANA NASIONAL. ©2020</p>
    </footer>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
 <!-- jQuery 2.1.3 -->
    <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- jQuery UI 1.11.2 -->
    <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>    
    <!-- Morris.js charts -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="plugins/morris/morris.min.js" type="text/javascript"></script>
    <!-- Sparkline -->
    <script src="plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <!-- jvectormap -->
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/knob/jquery.knob.js" type="text/javascript"></script>
    <!-- daterangepicker -->
    <script src="plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <!-- datepicker -->
    <script src="plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <!-- Slimscroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js" type="text/javascript"></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js" type="text/javascript"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js" type="text/javascript"></script>
  </body>
</html> 
