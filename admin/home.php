<?php include 'koneksi.php'; ?>
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Dashboard Admin</h2>   
                        <h5>SELAMAT DATANG!</h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-red set-icon">
                    <i class="fa fa-stethoscope"></i>
                </span>
                <div class="text-box" >
                 <?php $ambil=$con->query("SELECT COUNT('') as jumlah FROM dokter");
                 while($pecah=$ambil->fetch_assoc()){ ?>
				<p class="main-text"><?php echo $pecah['jumlah']; ?></p><br>
				<?php	 }		 ?>
                    <p class="text-muted">DOKTER TERDAFTAR</p>
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-green set-icon">
                    <i class="fa fa-user"></i>
                </span>
                <div class="text-box" >
                   <?php $ambil2=$con->query("SELECT COUNT('') as jumlah FROM pasien");
                 while($pecah2=$ambil2->fetch_assoc()){ ?>
				<p class="main-text"><?php echo $pecah2['jumlah']; ?></p><br>
				<?php	 }		 ?>
                    <p class="text-muted">PASIEN TERDAFTAR</p>
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue set-icon">
                    <i class="fa fa-money"></i>
                </span>
                <div class="text-box" >
                     <?php $ambil3=$con->query("SELECT COUNT('') as jumlah FROM pembayaran");
                 while($pecah3=$ambil3->fetch_assoc()){ ?>
				<p class="main-text"><?php echo $pecah3['jumlah']; ?></p><br>
				<?php	 }		 ?>
                    <p class="text-muted">TRANSAKSI</p>
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-brown set-icon">
                    <i class="fa fa-plus-square"></i>
                </span>
                <div class="text-box" >
                    <?php $ambil4=$con->query("SELECT COUNT('') as jumlah FROM poliklinik");
                 while($pecah4=$ambil4->fetch_assoc()){ ?>
				<p class="main-text"><?php echo $pecah4['jumlah']; ?></p><br>
				<?php	 }		 ?>
                    <p class="text-muted">POLIKLINIK TERDAFTAR</p>
                </div>
             </div>
		     </div>
			</div>
                <div class="row"> 
                               <div class="col-md-9 col-sm-12 col-xs-12">                     
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Calon Statistik
                        </div>
                        <div class="panel-body">
                            <div id="morris-bar-chart"></div>
                        </div>
                    </div>            
                </div>
                
           </div>
                 <!-- /. ROW  -->
                <div class="row" >
                    <div class="col-md-9 col-sm-12 col-xs-12">
               
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Calon Daftar Pendaftar
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                             <th>User No.</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td>100090</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                            <td>100090</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                            <td>100090</td>
                                        </tr>
                                         <tr>
                                            <td>1</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td>100090</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                            <td>100090</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                            <td>100090</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                    </div>
                </div>
    </div>