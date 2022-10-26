<link rel="stylesheet" href="style.css">

<?php
    include 'connection.php';

    if(isset($_POST['submitForm2'])){
        $nama_gambar = $_POST['nama_gambar'];
        $gambar = $_FILES['gambar']['name'];
        $x = explode('.',$gambar);
        $ekstensi = strtolower(end($x));
        $gambar_baru = "$nama_gambar.$ekstensi";
        $tmp = $_FILES['gambar']['tmp_name'];

    if(move_uploaded_file($tmp, 'img/'.$gambar_baru)){
        $result = mysqli_query($conn, "INSERT INTO mango (nama_gambar) VALUES ('$gambar_baru')");
        if($result){
            echo "
            <script>
            alert('Gambar berhasil di upload');
            document.location.href = 'read.php';
            </script>";
        } else{
            echo error_log($result);
        }
    } else{
        echo "
            <script>
            alert('Gagal mengupload gambar');
            document.location.href = 'form2.php';
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
	<form action="" method="post" enctype="multipart/form-data">
		<label for="">Nama : </label>
		<input type="text" name="nama_gambar"><br><br>
		<label for="">Upload gambar : </label>
		<input type="file" name="gambar"><br><br>
		<input type="submit" name="submitForm2">
	</form>
</div>