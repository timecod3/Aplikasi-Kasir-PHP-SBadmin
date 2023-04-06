<?php
    include('../koneksi.php');
    $row = $_GET["id"];
    $query = "SELECT * FROM data_barang WHERE id = $row LIMIT 1";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_array($result);
    
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Aplikasi Kasir Sederhana</title>

    <!-- Custom fonts for this template -->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-cash-register"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SITOKO</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="../index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

           <!-- Nav Item - Pages Collapse Menu -->
           <li class="nav-item active">
                
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#datamaster"
                    aria-expanded="true" aria-controls="datamaster">
                    <i class="fas fa-database"></i>
                    <span>Data Master</span>
                </a>
                <div id="datamaster" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="data_barang.php">Data Barang</a>
                        <a class="collapse-item" href="kategori.php">Kategori</a>
                    </div>
                </div>
            </li>


           <!-- Nav Item - Pages Collapse Menu -->
           <li class="nav-item active">
                
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#transaksi"
                    aria-expanded="true" aria-controls="transaksi">
                    <i class="fas fa-donate"></i>
                    <span>Transaksi</span>
                </a>
                <div id="transaksi" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="../kasir/kasir.php">Kasir</a>
                        <a class="collapse-item" href="../laporan/laporan.php">Laporan</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Dashboard -->
             <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Pengaturan Toko</span>
                </a>
            </li>
            <hr class="sidebar-divider">

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

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-2">
                         <h1 class="h3 mb-0 text-black-800">TOKO BUDI</h1>
                    </div>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
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
                <div class="container-fluid">

                <!-- Page Heading -->
                <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Anda berada dihalaman Edit Data Barang</h1> 
                <hr>
                <div class="card-body">
                    <form action="edit.php" method="POST">
                        <div class="mb-3"><label for="id_barang">ID Barang</label><input class="form-control" value="<?php echo $row['id_barang'] ?>"  name="id_barang" type="text" placeholder="Masukan serial kode teks"></div>
                        <div class="mb-3">
                            <label for="kategori" value="<?php echo $row['kategori'] ?>">Kategori</label>
                            <select class="form-control"  value="<?php echo $row['kategori'] ?>" name="kategori" >
                                <option>Pakan Burung</option>
                                <option>Pakan Ayam</option>
                                <option>Pakan Sapi</option>
                                <option>Obat Burung</option>
                                <option>Obat Ayam</option>
                                <option>Obat Sapi</option>
                            </select>
                        </div>
                        <div class="mb-3"><label for="nama_barang">Nama</label><input class="form-control" value="<?php echo $row['nama_barang'] ?>" name="nama_barang" type="text" placeholder="Masukan Nama Barang"></div>
                        <div class="mb-3"><label for="merk">Merk</label><input class="form-control" value="<?php echo $row['merk'] ?>" name="merk" type="text" placeholder="Masukan Merek Barang"></div>
                        <div class="mb-3"><label for="stok">Stok</label><input class="form-control" value="<?php echo $row['stok'] ?>" name="stok" type="int" placeholder="Masukan Stok Barang"></div>
                        <div class="mb-3"><label for="harga_beli">Harga BELI</label><input class="form-control" value="<?php echo $row['harga_beli'] ?>" name="harga_beli" type="text" placeholder="Masukan Harga BELI Barang"></div>
                        <div class="mb-3"><label for="harga_jual">Harga JUAL</label><input class="form-control" name="harga_jual" value="<?php echo $row['harga_jual'] ?>" type="text" placeholder="Masukan Harga JUAL Barang"></div>
                    
                        <div class="mb-3">
                            <label for="satuan">Satuan</label><select class="form-control" value="<?php echo $row['satuan'] ?>" name="satuan">
                                <option>PCS</option>
                                <option>KG</option>
                                <option>L</option>
                            </select>
                        </div>.
                        <input name="id" type="hidden" value="<?php echo $_GET['id']?>"/>

                        <input type="hidden" name="tanggal" value="<?php echo date("d-m-y"); ?>">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    
                </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Yovie Ferdianto 2023</span>
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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/datatables-demo.js"></script>

</body>

</html>