<link rel="stylesheet" href="style.css">

<?php  
    require 'connection.php';

    $id = $_GET['id'];

    $result = mysqli_query($conn, "SELECT * FROM mango WHERE id = $id");

    $mng = [];

    while($row = mysqli_fetch_assoc($result)){
        $mng[] = $row;
    }
    $mng = $mng[0];

    if(isset($_POST['submitForm1'])){
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $telp = $_POST['telp'];
        $email = $_POST['email'];

        $sql = "UPDATE mango SET nama = '$nama', telp = '$telp', email = '$email' WHERE id = $id";

        $result = mysqli_query($conn, $sql);

        if($result){
            echo "
            <script>
                alert('Data telah berhasil diubah');
                document.location.href = 'read.php';
            </script>";
        } else{
            echo "
            <script>
                alert('Data gagal diubah');
                document.locatin.href = 'read.php';
            </script>";
        }
    }
?>

<div class="header">
    <?php echo "Waktu sekarang " . date("h:i:sa"); ?>
    <h3>Menu mengubah data</h3>
    <a href="read.php">Kembali</a>
</div>

<div class="form1" id="idForm1">
    <form action="" method="POST">
        <input type="text" name="id" value="<?php echo $mng['id'] ?>" hidden>
		<label for="nama">Nama : </label>
        <input type="text" name="nama" placeholder="Nama" value="<?php echo $mng['nama'] ?>" required><br><br>

        <label for="telp">Telepon : </label>
        <input type="tel" name="telp" placeholder="Telepon" value="<?php echo $mng['telp'] ?>" required><br><br>

        <label for="email">Email : </label>
        <input type="email" name="email" placeholder="Email" value="<?php echo $mng['email'] ?>"><br><br>
		<input type="submit" name="submitForm1">
	</form>
</div>