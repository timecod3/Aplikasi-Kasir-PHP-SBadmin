<!-- PENCARIAN DATA BARANG -->
	<?php
    include '../koneksi.php';


    if(isset($_POST['submit-barang'])){
    // dibawah ini kita tidak harus pakai $row['nama_barang'] karena sudah di panggil pakai name diabwah tadi 
    $nama_barang = $_POST['nama_barang'];
    $total = $_POST['harga_jual'];
   
    $query = "INSERT INTO `keranjang`(`id`, `nama_barang`, `jumlah`, `total`) VALUES ('','$nama_barang','1','$total')";

	// ini tidak boleh diahapus karena eksekusinya disini,kalau dihapus kita cuma bikin variablenya saja
    if($connection->query($query)){
     
    }else{
        echo "Data gagal Disimpan";
    }


    }

    if(isset($_POST['update-jumlah'])){
        
    $jumlah= $_POST['jumlah_barang'];
    $id = $_POST['id_barang'];
   
    $query = "UPDATE `keranjang` SET `Jumlah`='$jumlah' WHERE id='$id'";

    if($connection->query($query)){
        // header("location: ".$_SERVER['PHP_SELF']."");
    }else{
        echo "Data gagal Disimpan";
    }


    }

    $kembali = 0;
    if(isset($_POST['submit-bayar'])){
        
    $harga_barang= $_POST['harga_barang'];
    $jumlah_bayar= $_POST['jumlah_bayar'];
   $nama_barang = $_POST['nama_barang'];
   $kembali =   $jumlah_bayar - $harga_barang ;
    $query = "INSERT INTO `transaksi`(`id`, `nama_Barang`, `total_harga`, `jumlah_dibayar`,`kembali`) VALUES ('','$nama_barang','$harga_barang','$jumlah_bayar','$kembali')";
    if($connection->query($query)){
        // header("location: ".$_SERVER['PHP_SELF']."");
    }else{
        echo "Data gagal Disimpan";
    }

	


    }
	?>

	<div class="col-sm-12">
		<div class="container-fluid">
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Selamat Datang Di Kasir Online <i class="fas fa-smile"></i></h1>
        
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
						<div class="card-header bg-primary text-white">
							<h5><i class="fa fa-search"></i>Cari Barang</h5>
						</div>
                        <div class="card-body">
                            <div class="table-responsive">
							<!-- onsubmit="event.preventDefault(); this.submit();" -->
								
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr style="text-align:center;">
                                            <th>No.</th>
                                            <th>ID Barang</th>
                                            <th>Kategori</th>
                                            <th>Nama Barang</th>
                                            <th>Stok</th>
                                            <th>Harga Jual</th>
                                            <th>Aksi</th>                                 
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            include('../koneksi.php');
                                            $no = 1;
                                            $query = mysqli_query($connection,"SELECT * FROM `data_barang`");
                                            while($row = mysqli_fetch_array($query)){
                                            
                                            ?>
											
                                            <tr>
                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo $row['id_barang']; ?></td>
                                                <td><?php echo $row['kategori']; ?></td>
                                                <td><?php echo $row['nama_barang']; ?></td>
                                                <td><?php echo $row['stok']; ?></td>
                                                <td>Rp. <?php echo number_format($row['harga_jual']); ?></td>
                                                <td style="display:flex; gap:10px ">
											
											<!-- Kita bikin sebuah 2 inputan hidden yang dimana terdapat value dari data barang dan untuk pemanggilan pada saat submit kita kasih name submit-barang -->
											<form method="post">	
											<input type="hidden" value="<?php echo $row['nama_barang']?>" name="nama_barang">
											<input type="hidden" value="<?php echo $row['harga_jual']?>" name="harga_jual">
											<button type="submit" name="submit-barang" class="btn btn-success"><i class="fas fa-shopping-cart"></i></button>
                                        	</form>       
										</td>
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
           
<!-- KASIR PERHITUNGAN -->
	<div class="col-sm-12">
			<div class="card card-primary">
				<div class="card-header bg-primary text-white">
					<h5><i class="fa fa-shopping-cart"></i> KASIR KERANJANG
				</div>
				<div class="card-body">
					<div id="keranjang" class="table-responsive">
						<table class="table table-bordered">
							<tr>
								<td><b>Tanggal</b></td>
								<td><input type="text" readonly="readonly" class="form-control" value="<?php $tanggal = date('d F Y'); echo $tanggal; ?>" name="tgl"></td>
							</tr>
						</table>
						<table class="table table-bordered w-100" id="example1">
							<thead>
								<tr>
									<td> No</td>
									<td> Nama Barang</td>
									<td style="width:10%;"> Jumlah</td>
									<td style="width:20%;"> Total</td>
									<td> Aksi</td>
								</tr>
							</thead>
							<tbody>
								<tr>
								<?php
                                	include('../koneksi.php');
										$no = 1;
									// membuat sebuah variabel total harga berisi 0
										$totalharga = 0;
                                        $query = mysqli_query($connection,"SELECT * FROM `keranjang`");
										// variabel tersebut di isi dengan rumus matematika totalharga = totalharga + (jumlahbarang * totalbarang) dieksekusi sebanyak jumlah data keranjang
                                        while($row = mysqli_fetch_array($query)){
											$totalharga += $row['jumlah'] * $row['total']
                                            
                                        ?>
                                        <tr>
										<!-- mengupdate jumlah barang dengan mengubah inputan yang namenya jumlah_barang  -->
										<form method="post">
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $row['nama_barang']; ?></td>
                                            <td><input type="number" name="jumlah_barang" value="<?php echo $row['jumlah'];?>"></input</td>
                                            <td><?php echo $row['total']; ?></td>
											<td style="display:flex; gap:10px ">
											
                                                <input type="hidden" name="id_barang" value="<?php echo $row['id']?>" class="btn btn-warning btn-sm"  >
                                        		<button class="btn btn-warning" type="submit" name="update-jumlah">Update</button>
												<br>
                                                <a href="hapus_data.php?id=<?php echo $row['id']?>" class="btn btn-danger btn-sm" type="button">Hapus</a>
                                           
											</td>
				        
											</form>
                                        </tr>
                                               
                                        <?php
                                        }
                                        ?>
									
							</tbody>
						</table>
							<br/>
							<div id="kasirnya">
							<table class="table table-stripped">
							<!-- aksi ke table nota -->
							<?php
                                	
                                        $query = mysqli_query($connection,"SELECT * FROM `keranjang` ORDER BY id DESC");
                                        $row = mysqli_fetch_assoc($query);
										
											
                                            ?>
							<form method="POST">
								<!-- jika ada data didatabase keranjang maka isikan inputan nama barang dari keranjang  -->
									<tr>
									<td>Total Semua  </td>
									<td><input type="text" class="form-control" name="harga_barang" value="<?= $totalharga ?>"></td>
								<input name="nama_barang" type="hidden" value="<?php if(isset($row['nama_barang'])){echo $row['nama_barang'];} ?>">
									<td>Bayar  </td>
								<!-- jika ada data didatabase keranjang maka isikan inputan nama barang -->
									<td><input type="text" class="form-control" name="jumlah_bayar" value="<?php if(isset($jumlah_bayar)){echo $jumlah_bayar;} ?>" ></td>
									<td><button class="btn btn-primary" type="submit" name="submit-bayar"><i class="fa fa-shopping-cart"></i> Bayar</button>
									</td>
								</tr>
							</form>
							<!-- aksi ke table nota -->
							<tr>
								<td>Kembali</td>
								<td><input type="text" class="form-control" value="<?= $kembali ?>"></td>
								<td></td>
								<td>
									<a href="cetak.php" target="_blank">
									<button class="btn btn-secondary">
										<i class="fa fa-print"></i> Print Untuk Bukti Pembayaran
									</button></a>
								</td>
							
							</tr>
						</table>
						<form method="POST">
							<td><button class="btn btn-danger" type="submit" value="reset-keranjang" name="reset-keranjang"><i class="fa fa-trash"></i> Kosongkan Keranjang(Tekan lagi jika belum hilang)</button>
							<?php 
								if(isset($_POST['reset-keranjang'])){
									$query = "DELETE FROM `keranjang`";
									if($connection->query($query)){
										// header("location: ".$_SERVER['PHP_SELF']."");
									}else{
										echo "Data gagal Dihapus";
									}
								}
							?>
									
				
						</form>
						<br/>
						<br/>
					</div>
				</div>
			</div>
		</div>