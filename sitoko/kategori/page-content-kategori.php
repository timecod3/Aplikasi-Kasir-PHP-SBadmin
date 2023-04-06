

<div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Kategori</h1>
                    <div class="mb-4 col-6">
                        <div class="row">
                            <form class="form-inline"  method="POST">
                                    <div class="form-group mx-sm-3 mb-2">
                                        <input type="text" class="form-control" name="tambah" placeholder="Masukan Kategori Baru">
                                        <input type="submit" name='submit' class="btn btn-primary mx-2" value="Tambah">
                                        <input type="hidden" name="tanggal" value="<?php echo date("d-F-y"); ?>">
                                    </div>
                            </form>    
                            <?php
                                if (isset($_POST['submit'])){
                                    $tambah = $_POST['tambah'];
                                    $tanggal = $_POST['tanggal'];
                                    $query = "INSERT INTO `kategori`(`id`, `judul`, `tgl_input`) VALUES ('','$tambah','$tanggal')";
                                    
                                    $row = mysqli_query($connection, $query);
                                }
                            ?>
                        </div>
                    </div>
                        
                 
                    
                    <hr>
                    
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr style="text-align:center;">
                                            <th>No.</th>
                                            <th>Kategori</th>
                                            <th>Tanggal Input</th>
                                            <th>Aksi</th>                                   
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $no = 1;
                                            $query = mysqli_query($connection,"SELECT * FROM `kategori`");
                                            while($row = mysqli_fetch_array($query)){
                                            
                                            ?>
                                            <tr>
                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo $row['judul']; ?></td>
                                                <td><?php echo $row['tgl_input']; ?></td>
                                                <td style="display:flex; gap:10px ">
                                                    <a href="edit_kategori.php?id=<?php echo $row['id']?>" class="btn btn-success btn-sm" type="button">Edit</a>
                                                    <br>
                                                    <a href="hapus_kategori.php?id=<?php echo $row['id']?>" class="btn btn-danger btn-sm" type="button">Hapus</a>
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