<?php
	session_start();
	include 'db.php';
	if($_SESSION['status_login'] != true){
		echo '<script>window.location="login.php"</script>';
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Design Website</title>

    <!--font-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

	<!--content-->
	<div class="sectionp">
		<div class="containerp">
			<h3>Data Produk</h3>
			<div class="boxp">
				<p><a href="tambah-produk.php">Tambah Data</a></p>
				<table border="1" cellspacing="10" class="table">
					<thead>
						<tr>
							<th width="60px">No</th>
							<th>Nama Produk</th>
							<th>Harga</th>
							<th>Gambar</th>
							<th>Status</th>
							<th width="175px">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							$no = 1;
							$produk = mysqli_query($conn, "SELECT * FROM tb_product");
							if (mysqli_num_rows($produk) > 0) {
								// code...
						
							while ($row = mysqli_fetch_array($produk)) {

						?>
						<tr>
							<td><?php echo $no++ ?></td>
							<td><?php echo $row['product_name'] ?></td>
							<td>Rp. <?php echo number_format($row['product_price']) ?></td>
							<td><a href="produk/<?php echo $row['product_image'] ?>" target="_blank"><img src="produk/<?php echo $row['product_image'] ?>" width="50px"></a></td>
							<td><?php echo ($row['product_status'] == 0)? 'Tidak Aktif':'Aktif'; ?></td>
							<td>
								<a href="edit-produk.php?id=<?php echo $row['product_id'] ?>">Edit</a> || <a href="proses-hapus.php?idp=<?php echo $row['product_id'] ?>" onclick="return confirm('Yakin ingin hapus?')">Hapus</a>
							</td>
						</tr>
					<?php }}else{ ?>
						<tr>
							<td colspan="8"> Tidak ada Data</td>
						</tr>
					<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

</body>
</html>