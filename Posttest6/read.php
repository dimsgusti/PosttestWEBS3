<link rel="stylesheet" href="style.css">

<?php
    require 'connection.php';

    $result = mysqli_query($conn, "SELECT * FROM mango");

    $mango = [];

    while($row = mysqli_fetch_assoc($result)){
        $mango[] = $row;
    }
?>

<div class="header">
    <?php echo "Waktu sekarang " . date("h:i:sa"); ?>
    <h3>Menu lihat data</h3>
    <a href="index.php">Kembali</a>
</div>

<div class="headerKecil">
    <h3>Data form</h3>
</div>

<div class="readForm">
    <table class="table">
        <thead class="thead">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Telepon</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; foreach($mango as $mng) : ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $mng["nama"]; ?></td>
                <td><?php echo $mng["telp"]; ?></td>
                <td><?php echo $mng["email"]; ?></td>
                <td>
                    <a href="update.php?id=<?php echo $mng["id"]; ?>" onclick="return confirm('Yakin ingin mengubah?');" role="button" name="update">Ubah</a>
                    <a href="delete.php?id=<?php echo $mng["id"]; ?>" onclick="return confirm('Yakin ingin menghapus?');" role="button">Hapus</a>
                </td>
            </tr>
            <?php $i++; endforeach; ?>
        </tbody>
    </table>
</div>

<div class="headerKecil2">
    <h3>Data gambar</h3>
</div>

<div class="readForm2">
    <table class="table">
        <thead class="thead">
            <tr>
                <th>No</th>
                <th>Nama gambar</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; foreach($mango as $mng) : ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $mng["nama_gambar"]; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
        </tbody>
    </table>
</div>