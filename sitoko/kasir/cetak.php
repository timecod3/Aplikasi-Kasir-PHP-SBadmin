<html>
<head>
<title>Faktur Pembayaran</title>
<style>
 
#tabel
{
font-size:15px;
border-collapse:collapse;
}
#tabel  td
{
padding-left:5px;
border: 1px solid black;
}
</style>
</head>
<body style='font-family:tahoma; font-size:8pt;'>
<center><table style='width:350px; font-size:16pt; font-family:calibri; border-collapse: collapse;' border = '0'>
<td width='70%' align='CENTER' vertical-align:top'><span style='color:black;'>
<b>TOKO BUDI</b></br> Plaosan, Kec. Wates, Kabupaten Kediri, Jawa Timur 64174</span></br>
 
 
<span style='font-size:12pt'><?php $tanggal = date('d F Y'); echo $tanggal; ?></span></br>
</td>
</table>
<style>
hr { 
    display: block;
    margin-top: 0.5em;
    margin-bottom: 0.5em;
    margin-left: auto;
    margin-right: auto;
    border-style: inset;
    border-width: 1px;
} 
</style>
<table cellspacing='0' cellpadding='0' style='width:350px; font-size:12pt; font-family:calibri;  border-collapse: collapse;' border='0'>
 
<tr align='center'>
<td width='40%'>Nama Barang</td>
<td width='20%'>Jumlah</td>
<td width='13%'>Total</td><tr>
<td colspan='5'><hr></td></tr>
</tr>
<?php 
    include('../koneksi.php');
    $no = 1;
    $totalharga = 0;
    $query = mysqli_query($connection,"SELECT * FROM `keranjang`");
    
    while($row = mysqli_fetch_array($query)){
        $totalharga += $row['jumlah'] * $row['total']
        ?>
        <br>
        <td style='vertical-align:top; text-align:right; padding-right:60px'><?php echo $row['nama_barang']; ?></td>
        <td style='vertical-align:top; text-align:right; padding-right:40px'><?php echo $row['jumlah']; ?></td>
        <td style='text-align:right; vertical-align:top'><?php echo $row['total']; ?></td></tr>
    <?php
    }
    
?>

<tr>
<td colspan='5'><hr></td>
</tr>
<tr>
<td colspan = '4'><div style='text-align:right'>Total Semua: </div></td><td style='text-align:right; font-size:16pt;'><?php echo $totalharga; ?></td>
</tr>
<tr>

<?php 
    include('../koneksi.php');

    $query = mysqli_query($connection, "SELECT * FROM `transaksi` ORDER BY id  DESC ");
    $row = mysqli_fetch_assoc($query);

?>

<td colspan = '4'><div style='text-align:right; color:black'>Bayar : </div></td><td style='text-align:right; font-size:16pt; color:black'><?php echo $row['jumlah_dibayar']; ?></td>
</tr>
<tr>
<td colspan = '4'><div style='text-align:right; color:black'>Kembali : </div></td><td style='text-align:right; font-size:16pt; color:black'><?php echo $row['kembali']; ?></td>
</tr>

</table>
<table style='width:350; font-size:12pt;' cellspacing='2'><tr></br><td align='center'>****** TERIMAKASIH ******</br></td></tr></table></center></body>
</html>

<?php
// /* contoh text */ 
// $text = 'Ini adalah contoh teks untuk direct printing';     
// /* tulis dan buka koneksi ke printer */   
// $printer = printer_open("EPSON L120 Series");  //sesuaikan dengan nama printer anda
// /* write the text to the print job */ 
// printer_write($printer, $text);   
// /* close the connection */
// printer_close($printer);
?>