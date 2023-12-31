<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>SB Admin 2 - Tables</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/font,awesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet" />

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" />
  </head>

  <body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
      <!-- Sidebar -->
      <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
          <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
          </div>
          <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0" />

        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
          <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a
          >
        </li>

 
        <!-- Divider -->
        <hr class="sidebar-divider" />

       
        <!-- Nav Item - Tables -->
        <li class="nav-item active">
          <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a
          >
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block" />

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
      </ul>
      <!-- End of Sidebar -->

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
          <!-- Topbar -->
          <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
            <!-- Sidebar Toggle (Topbar) -->
            <form class="form-inline">
              <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
              </button>
            </form>

            <!-- Topbar Search -->
            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
              <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                <div class="input-group-append">
                  <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                  </button>
                </div>
              </div>
            </form>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">
              <!-- Nav Item - Search Dropdown (Visible Only XS) -->
              <li class="nav-item dropdown no-arrow d-sm-none">
                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-search fa-fw"></i>
                </a>
                <!-- Dropdown - Messages -->
                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                  <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                      <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                      <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                          <i class="fas fa-search fa-sm"></i>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </li>

              <!-- Nav Item - Messages -->
              <li class="nav-item dropdown no-arrow mx-1">
                <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-envelope fa-fw"></i>
                  <!-- Counter - Messages -->
                  <span class="badge badge-danger badge-counter">7</span>
                </a>
                <!-- Dropdown - Messages -->
                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                  <h6 class="dropdown-header">Message Center</h6>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="dropdown-list-image mr-3">
                      <img class="rounded-circle" src="img/undraw_profile_1.svg" alt="..." />
                      <div class="status-indicator bg-success"></div>
                    </div>
                    <div class="font-weight-bold">
                      <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                      <div class="small text-gray-500">Emily Fowler · 58m</div>
                    </div>
                  </a>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="dropdown-list-image mr-3">
                      <img class="rounded-circle" src="img/undraw_profile_2.svg" alt="..." />
                      <div class="status-indicator"></div>
                    </div>
                    <div>
                      <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                      <div class="small text-gray-500">Jae Chun · 1d</div>
                    </div>
                  </a>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="dropdown-list-image mr-3">
                      <img class="rounded-circle" src="img/undraw_profile_3.svg" alt="..." />
                      <div class="status-indicator bg-warning"></div>
                    </div>
                    <div>
                      <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                      <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                    </div>
                  </a>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="dropdown-list-image mr-3">
                      <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="..." />
                      <div class="status-indicator bg-success"></div>
                    </div>
                    <div>
                      <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                      <div class="small text-gray-500">Chicken the Dog · 2w</div>
                    </div>
                  </a>
                  <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                </div>
              </li>

              <div class="topbar-divider d-none d-sm-block"></div>

              <!-- Nav Item - User Information -->
              <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                  <img class="img-profile rounded-circle" src="img/undraw_profile.svg" />
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                  <a class="dropdown-item" href="#">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    Settings
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                    Activity Log
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                  </a>
                </div>
              </li>
            </ul>
          </nav>
          <!-- End of Topbar -->

          <!-- Begin Page Content -->
          <div class="container-fluid">
            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Tables</h1>
            <!--<p class="mb-4">
              DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.
            </p>-->

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                
                  <!-- button -->
                  
                  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal_tambah" data-whatever="@who">Tambah Data</button>
                  <div class="modal fade" id="modal_tambah" tabindex="-1" role="dialog" aria-labelledby="modal_tambah" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                         <h5 class="modal-title" id="modal_tambah">Laporan Sebaran Brosur</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form id="userForm" method="POST">

                            <p>Nama</br>
                                <select name='nama' id='nama' class="form-control">
                                    <option value='rafif'>Rafif</option>
                                    <option value='rino'>Rino</option>
                                    <option value='fio'>Fio</option>
                                    <option value='sonny'>Sonny</option>
                                    <option value='amin'>Amin</option>
                                    <option value='bayu'>Bayu</option>
                                    <option value='yusuf'>Yusuf</option>
                                    <option value='lukman'>Lukman</option>
                                    <option value='ricky'>Ricky</option>
                                    <option value='wahyu'>Wahyu</option>
                                    <option value='suari'>Suari</option>
                                    <option value='siswanto'>Siswanto</option>
                                    <option value='salin'>Salin</option>
                                    <option value='rozak'>Rozak</option>
                                </select>
                            </p>
                            
                            <p>Jenis Pekerjaan</br>
                                <select name='jobs' id='jobs' class="form-control">
                                <option value='sebar_brosur'>Sebar Brosur</option>
                                <option value='pasang_banner'>Pasang Banner</option>
                                <option value='pasang_spanduk'>Pasang Spanduk</option>
                            </select>
                            </p>

                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Tanggal Pekerjaan</label></br>
                                <input type="date" class="form-control" name="tanggal" id='tanggal'/>
                            </div>

                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Daerah Sebar Brosur</label>
                                <input type="teks" class="form-control" name="daerah1" id='daerah1' placeholder="Your answer" />
                            </div>

                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Daerah Sebar Brosur 2</label>
                                <input type="teks" class="form-control" name="daerah1" id='daerah2' placeholder="Your answer"/>
                            </div>

                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Daerah Sebar Brosur 3</label>
                                <input type="teks" class="form-control"name="daerah1" id='daerah3' placeholder="Your answer"/>
                            </div>

                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Daerah Sebar Brosur 4</label>
                                <input type="teks" class="form-control" name="daerah1" id='daerah4' placeholder="Your answer"/>
                            </div>

                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Daerah Sebar Brosur 5</label>
                                <input type="teks" class="form-control" name="daerah1" id='daerah5' placeholder="Your answer"/>
                            </div>

                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Kelurahan</label>
                                <input type="teks" class="form-control" name="kelurahan" id='kelurahan' placeholder="Your answer"/>
                            </div>

                            <p>Kota</br>
                                <select name= "kota" id='kota' class="form-control">
                                <option value='malang'>Malang</option>
                                <option value='pasuruan'>Pasuruan</option>
                                </select>
                            </p>

                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Jumlah brosur yang disebar / banner yang di pasang (manual)</br> Isi dengan angka saja misal : (100)</label>
                                <input type="teks" class="form-control" name="jumlah_disebar" id='jumlah_disebar' placeholder="Your answer" />
                            </div>

                              <label class="form-label" for="customFile">Foto Pekerjaan</label>
                              <input type="file" class="form-control" id="customFile" />
                              
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Respon WA</label>
                                <input type="teks" class="form-control" name="respon_wa" id='respon_wa' placeholder="Your answer"/>
                            </div>

                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">FAL</label>
                                <input type="text" class="form-control" name="fal" id='fal' placeholder="Your answer"/>
                            </div>
                            
                          </form>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </br><hr>
                  <h6 class="m-0 font-weight-bold text-primary">Tabel Data</h6>
                </div>

              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>Nama</th>
                        <th>Jenis Pekerjaan</th>
                        <th>Tanggal Pekerjaan</th>
                        <th>Daerah 1</th>
                        <th>Daerah 2</th>
                        <th>Daerah 3</th>
                        <th>Daerah 4</th>
                        <th>Daerah 5</th>
                        <th>Kelurahan</th>
                        <th>Kota</th>
                        <th>Jumlah Brosur</th>
                        <th>Respon WA</th>
                        <th>FAL</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php 
										  include('control/koneksi.php');
										// $acces_user_log = $_SESSION["username"];
										  $table = mysqli_query($conn,"SELECT * FROM laporan;");
                      if ($table === FALSE) {
                        die(mysqli_error($conn));
                      }
                     /* $data = mysqli_fetch_assoc($table);
                      return $data; */
                      while ($row = mysqli_fetch_assoc($table)){ 
										  $i=0;
										  $no=1;
										 
										  
										  ?>
										  <tr id="<?php echo $row['nama']; ?>">
											<td data-target="nama"> <?php echo $row['nama'];?></td>
                                            <td data-target="jenis_pekerjaan"> <?php echo $row['jenis_pekerjaan'];?></td>
                                            <td data-target="tgl_pekerjaan"> <?php echo $row['tgl_pekerjaan'];?></td>
                                            <td data-target="daerah"> <?php echo $row['daerah'];?></td>
                                            <td data-target="daerah2"> <?php echo $row['daerah2'];?></td>
                                            <td data-target="daerah3"> <?php echo $row['daerah3'];?></td>
                                            <td data-target="daerah4"> <?php echo $row['daerah4'];?></td>
                                            <td data-target="daerah5"> <?php echo $row['daerah5'];?></td>
                                            <td data-target="kelurahan"> <?php echo $row['kelurahan'];?></td>
                                            <td data-target="kota"> <?php echo $row['kota'];?></td>
                                            <td data-target="jumlah_brosur"> <?php echo $row['jumlah_brosur'];?></td>
                                            <td data-target="respon_wa"> <?php echo $row['respon_wa'];?></td>
                                            <td data-target="fal"> <?php echo $row['fal'];?></td>
										
											
											
										</div></td>
										  </tr>
										  <?php	
										  }
										  ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright &copy; Your Website 2020</span>
            </div>
          </div>
        </footer>
        <!-- End of Footer -->
      </div>
      <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

    <script>
      // INSERT 			
		$(document).on('click', '.insert', function(){
			
      var nama = $("#nama").val();
      var jobs = $("#jobs").val();
      var tanggal = $("#tanggal").val();
      var daerah1 = $("#daerah1").val();
      var daerah2 = $("#daerah2").val();
      var daerah3 = $("#daerah3").val();
      var daerah4 = $("#daerah4").val();
      var daerah5 = $("#daerah5").val();
      var kelurahan = $("#kelurahan").val();
      var kota = $("#kota").val();
      var respon_wa = $("#respon_wa").val();
      var fal = $("#fal").val();

//alert(nama); return;
 
if(nama == '' ){
  Swal.fire({
    icon: 'error',
    title: 'Oops...',
    text: 'Nama Belum Terisi!',				  
  }) 
  return
} 
 
 
 //alert(jobs); return;
 
 var value = { 
        nama_fal:nama_fal, 
       }; 

          $.ajax({

              type: "POST",
    async: false,
              url: "../control/koneksi.php",
              data: value,
              success : function(data) {
    //alert(data);
    /* Swal.fire(
        'Good job!',
        'You clicked the button!',
        'success'
      ).then(function(success){
        //if (data == 'succes') {
          //alert('a');
      window.location.reload(true);
        //}
    }) */
    }
          }); 
 
});
    </script>
    
    <script type="text/javascript" src="code.js"></script>
  </body>
</html>