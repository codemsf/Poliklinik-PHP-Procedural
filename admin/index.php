<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">ADMIN POLIKLINIK</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> (calon tombol) SWITCH TO WEBSITE &nbsp; <a href="../" class="btn btn-danger square-btn-adjust">switch</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a href="index.php"><i class="fa fa-home"></i>Home</a>
                    </li>
                     <li>
                        <a href="index.php?halaman=dokter"><i class="fa fa-stethoscope"></i>Dokter</a>
                    </li>
                     <li>
                        <a href="index.php?halaman=pendaftar"><i class="fa fa-check-square"></i>Pendaftar</a>
                         <li>
                        <a href="index.php?halaman=pembayaran"><i class="fa fa-money"></i>Pembayaran</a>
                    </li>
                    </li>
                    <li>
                        <a href="index.php?halaman=obat"><i class="fa fa-medkit"></i>Obat</a>
                    </li>
                    <li>
                        <a href="index.php?halaman=pasien"><i class="fa fa-user"></i>Pasien</a>
                    </li>
                    <li>
                        <a href="index.php?halaman=resep"><i class="fa fa-file-text"></i>Resep</a>
                    </li>
                     <li>
                        <a href="index.php?halaman=poliklinik"><i class="fa fa-plus-square"></i>Poliklinik</a>
                    </li>
                    <li>
                        <a href="index.php?halaman=logout"><i class="fa fa-sign-out"></i>(calon tombol) Logout</a>
                    </li>
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
            <?php 
            if (isset($_GET['halaman'])) 
            {
               if ($_GET['halaman']=="dokter") 
               {
                include 'dokter.php';
               }
               if ($_GET['halaman']=="pendaftar") 
               {
                include 'pendaftar.php';
               }
               if ($_GET['halaman']=="obat") 
               {
                include 'listobat.php';
               }
               if ($_GET['halaman']=="pasien") 
               {
                include 'listpasien.php';
               }
               if ($_GET['halaman']=="pembayaran") 
               {
                include 'pembayaran.php';
               }
               if ($_GET['halaman']=="resep") 
               {
                include 'listresep.php';
               }
               if ($_GET['halaman']=="poliklinik") 
               {
                include 'poliklinik.php';
               }
               if ($_GET['halaman']=="logout") 
               {
                include 'logout.php';
               }
               if ($_GET['halaman']=="editdokter") 
               {
                include 'editdokter.php';
               }
               if ($_GET['halaman']=="editdaftar") 
               {
                include 'editdaftar.php';
               }
               if ($_GET['halaman']=="editbayar") 
               {
                include 'editbayar.php';
               }
                if ($_GET['halaman']=="editobat") 
               {
                include 'editobat.php';
               }
               if ($_GET['halaman']=="editpasien") 
               {
                include 'editpasien.php';
               }
                if ($_GET['halaman']=="editresep") 
               {
                include 'editresep.php';
               }
                if ($_GET['halaman']=="editpoli") 
               {
                include 'editpoli.php';
               }
                if ($_GET['halaman']=="dokter2") 
               {
                include 'dokter2.php';
               }
                if ($_GET['halaman']=="pendaftar2") 
               {
                include 'pendaftar2.php';
               }
               if ($_GET['halaman']=="pembayaran2") 
               {
                include 'pembayaran2.php';
               }
                if ($_GET['halaman']=="listresep2") 
               {
                include 'listresep2.php';
               }
             }
             else {
                 include 'home.php';
             } ?>
             </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
