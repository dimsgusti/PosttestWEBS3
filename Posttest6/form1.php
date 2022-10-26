<link rel="stylesheet" href="style.css">

<?php
    require 'connection.php';

    if(isset($_POST['submitForm1'])){
        $nama = $_POST['nama'];
        $telp = $_POST['telp'];
        $email = $_POST['email'];
    
    $sql = "INSERT INTO mango (id, nama, telp, email) VALUES (' ', '$nama', '$telp', '$email')";

    $result = mysqli_query($conn, $sql);

    if($result){
        echo "
        <script>
            alert('Data telah berhasil ditambahkan');
            document.location.href = 'read.php';
        </script>";
    } else{
        echo "
        <script>
            alert('Data gagal ditambahkan');
            document.locatin.href = 'form1.php';
        </script>";
        }
    }
?>

<div class="header" id="headerForm1">
    <?php echo "Waktu sekarang " . date("h:i:sa"); ?>
    <h3>Menu menambahkan data</h3>
    <a href="index.php">Kembali</a>
</div>

<div class="form1">
	<form action="" method="POST">
		<table class="table1">
			<tr>
				<th>Nama</th>
				<td><input type="text" name="nama" required></td>
			</tr>
			<tr>
				<th>Telepon</th>
				<td><input type="tel" name="telp" placeholder="62" maxlength="15" required></td>
			</tr>
			<tr>
				<th>Email</th>
				<td><input type="email" name="email" required></td>
			</tr>
		</table>
		<input type="submit" name="submitForm1">
	</form>
</div>