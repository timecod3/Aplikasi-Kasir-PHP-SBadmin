<div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>


                    <!-- Content Row -->

                    <div class="row">

                        <!--STATUS cardS -->
                            <div class="col-md-3 mb-3">
                                <div class="card">
                                    <div class="card-header bg-primary text-white">
                                        <h6 class="pt-2"><i class="fas fa-cubes"></i> Nama Barang</h6>
                                    </div>
                                    <div class="card-body">
                                        <center>
                                            <h1>       
                                                <?php 
                                                    include "koneksi.php";

                                                    $data_barang = mysqli_query($connection, 'SELECT * FROM data_barang');
                                                    $muncul_barang = mysqli_num_rows($data_barang);
                                                    echo($muncul_barang);
                                                ?>
                                            </h1>
                                        </center>
                                    </div>
                                    <div class="card-footer">
                                        <a href='barang/data_barang.php'>Tabel
                                            Barang <i class='fa fa-angle-double-right'></i></a>
                                    </div>
                                </div>
                                <!--/grey-card -->
                            </div><!-- /col-md-3-->
                            <!-- STATUS cardS -->
                            <div class="col-md-3 mb-3">
                                <div class="card">
                                    <div class="card-header bg-primary text-white">
                                        <h6 class="pt-2"><i class="fas fa-chart-bar"></i> Stok Barang</h6>
                                    </div>
                                    <div class="card-body">
                                        <center>
                                            <h1>  
                                                <?php 
                                                    include "koneksi.php";
                                                    
                                                    $looping = 0;
                                                        
                                                    $data_stok = mysqli_query($connection, 'SELECT * FROM data_barang');
                                                    while($row =  mysqli_fetch_assoc($data_barang)){
                                                        $looping += $row['stok'];
                                                    }
                                                    echo($looping);
                                                ?>
                                            </h1>
                                        </center>
                                    </div>
                                    <div class="card-footer">
                                        <a href='barang/data_barang.php'>Tabel
                                            Barang <i class='fa fa-angle-double-right'></i></a>
                                    </div>
                                </div>
                                <!--/grey-card -->
                            </div><!-- /col-md-3-->
                            <!-- STATUS cardS -->
                            <div class="col-md-3 mb-3">
                                <div class="card">
                                    <div class="card-header bg-primary text-white">
                                        <h6 class="pt-2"><i class="fas fa-upload"></i> Telah Terjual</h6>
                                    </div>
                                    <div class="card-body">
                                        <center>
                                            <h1>
                                            <?php 
                                                    include "koneksi.php";

                                                    $transaksi = mysqli_query($connection, 'SELECT * FROM transaksi');
                                                    $muncul_barang = mysqli_num_rows($transaksi);
                                                    echo($muncul_barang);
                                                ?>
                                            </h1>
                                        </center>
                                    </div>
                                    <div class="card-footer">
                                        <a href='laporan/laporan.php'>Tabel
                                            laporan <i class='fa fa-angle-double-right'></i></a>
                                    </div>
                                </div>
                                <!--/grey-card -->
                            </div><!-- /col-md-3-->
                            <div class="col-md-3 mb-3">
                                <div class="card">
                                    <div class="card-header bg-primary text-white">
                                        <h6 class="pt-2"><i class="fa fa-bookmark"></i> Kategori Barang</h6>
                                    </div>
                                    <div class="card-body">
                                        <center>
                                            <h1>
                                                <?php 
                                                    include "koneksi.php";

                                                    $kategori = mysqli_query($connection, 'SELECT * FROM kategori');
                                                    $muncul_barang = mysqli_num_rows($kategori);
                                                    echo($muncul_barang);
                                                ?>
                                            </h1>
                                        </center>
                                    </div>
                                    <div class="card-footer">
                                        <a href='kategori/kategori.php'>Tabel
                                            Kategori <i class='fa fa-angle-double-right'></i></a>
                                    </div>
                                </div>
                                <!--/grey-card -->
                            </div><!-- /col-md-3-->
                        </div>    </div>
                            <!-- /.container-fluid -->
                    </div>

</div>
                