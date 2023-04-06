<table class="table table-bordered table-hover">
    <br>
    <thead>
    <tr>
        <th></th>
        <th>Nama Barang</th>
        <th>Total Harga</th>
        <th>Jumlah Dibayar</th>
        <th>Kembali</th>
    </tr>
    </thead>
    <?php
    include "../koneksi.php";

    $no = 0;
    $query = mysqli_query($connection,"SELECT * FROM `transaksi`");

    while ($data = mysqli_fetch_array($query)) {
        $no++;

        ?>
        <tbody>
        <tr>
            <td><?php echo $no;?></td>
            <td><?php echo $data["nama_barang"];   ?></td>
            <td><?php echo $data["total_harga"];   ?></td>
            <td><?php echo $data["jumlah_dibayar"];   ?></td>
            <td><?php echo $data["kembali"];   ?></td>
        </tr>

        </tbody>
        <?php
    }
    ?>

    <tr>
        <tr>
            <td></td>
        </tr>
       <th></th>
       <th>Total</th>
       <td>Rp. 
            <?php
                include ('../koneksi.php');
                                    
                $looping = 0;
                $total = mysqli_query($connection, 'SELECT * FROM transaksi');

                while($row = mysqli_fetch_assoc($total)){
                $looping +=$row['total_harga'];
                }
                echo($looping);
            ?>
       </td>
    </tr>

</table>