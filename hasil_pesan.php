<?php
// ambil data dari form (method POST)
$nama = $_POST["nama"];
$kelas = $_POST["kelas"];
$pesan = $_POST["pesan"];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pesan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <div class="card narrow-wrapper">

            <h1>Pesan Berhasil Dikirim</h1>

            <p style="margin-bottom: 1.2rem;">
                Terima kasih, <strong><?php echo $nama; ?></strong>!
            </p>

            <div class="detail-row"><strong>Nama:</strong> <?php echo $nama; ?></div>
            <div class="detail-row"><strong>Kelas:</strong> <?php echo $kelas; ?></div>
            <div class="detail-row"><strong>Pesan/Kesan:</strong> <?php echo $pesan; ?></div>

            <div class="form-actions">
                <a href="index.php" class="btn btn-primary">Kembali ke Data Mahasiswa</a>
            </div>

        </div>
    </div>

</body>
</html>