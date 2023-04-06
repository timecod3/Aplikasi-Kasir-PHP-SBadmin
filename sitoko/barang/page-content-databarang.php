
<div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Barang</h1>
                    <a href="insert_data.php" class="btn btn-primary" type="button">Insert Data</a>
                    <hr>
                    
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr style="text-align:center;">
                                            <th>No.</th>
                                            <th>ID Barang</th>
                                            <th>Kategori</th>
                                            <th>Nama Barang</th>
                                            <th>Merk</th>
                                            <th>Stok</th>
                                            <th>Harga Beli</th>
                                            <th>Harga Jual</th>
                                            <th>Satuan</th>
                                            <th>Tanggal Input</th>  
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
                                                <td><?php echo $row['merk']; ?></td>
                                                <td><?php echo $row['stok']; ?></td>
                                                <td>Rp. <?php echo number_format($row['harga_beli']); ?></td>
                                                <td>Rp. <?php echo number_format($row['harga_jual']); ?></td>
                                                <td><?php echo $row['satuan']; ?></td>
                                                <td><?php echo $row['tgl_input']; ?></td>
                                                <td style="display:flex; gap:10px ">
                                                    <a href="edit_data.php?id=<?php echo $row['id']?>" class="btn btn-success btn-sm" type="button">Edit</a>
                                                    <br>
                                                    <a href="hapus_data.php?id=<?php echo $row['id']?>" class="btn btn-danger btn-sm" type="button">Hapus</a>
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
            