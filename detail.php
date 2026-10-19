<?php
include "data.php";

// ambil data dari URL (method GET)
$nim = $_GET["nim"];
$nama = $_GET["nama"];
$jurusan = $_GET["jurusan"];
$email = $_GET["email"];
$nilai = $_GET["nilai"];

$grade = tentukanGrade($nilai);
$status = tentukanStatus($nilai);

if ($status == "Lulus") {
    $kelas = "status-lulus";
} else {
    $kelas = "status-tidak-lulus";
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <div class="card narrow-wrapper">

            <h1>Detail Mahasiswa</h1>

            <div class="detail-row"><strong>NIM:</strong> <?php echo $nim; ?></div>
            <div class="detail-row"><strong>Nama:</strong> <?php echo $nama; ?></div>
            <div class="detail-row"><strong>Jurusan:</strong> <?php echo $jurusan; ?></div>
            <div class="detail-row"><strong>Email:</strong> <?php echo $email; ?></div>
            <div class="detail-row"><strong>Nilai:</strong> <?php echo $nilai; ?></div>
            <div class="detail-row"><strong>Grade:</strong> <?php echo $grade; ?></div>
            <div class="detail-row">
                <strong>Status:</strong>
                <span class="<?php echo $kelas; ?>"><?php echo $status; ?></span>
            </div>

            <div class="form-actions">
                <a href="index.php" class="btn btn-primary">Kembali</a>
            </div>

        </div>
    </div>

</body>
</html>