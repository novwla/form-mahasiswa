<?php
include "data.php";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <div class="card">

            <div class="top-row">
                <div>
                    <h1>Daftar Mahasiswa</h1>
                    <p>Mini Website PHP Dasar</p>
                </div>
                <a href="form_pesan.php" class="btn btn-primary">Isi Form Pesan</a>
            </div>

            <table class="data-table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Jurusan</th>
                        <th>Nilai</th>
                        <th>Grade</th>
                        <th>Status</th>
                        <th>Detail</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($daftarMahasiswa as $mhs) {
                        $grade = tentukanGrade($mhs["nilai"]);
                        $status = tentukanStatus($mhs["nilai"]);

                        if ($status == "Lulus") {
                            $kelas = "status-lulus";
                        } else {
                            $kelas = "status-tidak-lulus";
                        }
                    ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $mhs["nim"]; ?></td>
                        <td><?php echo $mhs["nama"]; ?></td>
                        <td><?php echo $mhs["jurusan"]; ?></td>
                        <td><?php echo $mhs["nilai"]; ?></td>
                        <td><?php echo $grade; ?></td>
                        <td class="<?php echo $kelas; ?>"><?php echo $status; ?></td>
                        <td>
                            <a href="detail.php?nim=<?php echo $mhs["nim"]; ?>&nama=<?php echo $mhs["nama"]; ?>&jurusan=<?php echo $mhs["jurusan"]; ?>&email=<?php echo $mhs["email"]; ?>&nilai=<?php echo $mhs["nilai"]; ?>" class="btn btn-primary">Lihat Detail</a>
                        </td>
                    </tr>
                    <?php
                        $no++;
                    }
                    ?>
                </tbody>
            </table>

        </div>
    </div>

</body>
</html>