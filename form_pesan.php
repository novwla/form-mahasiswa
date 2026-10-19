<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pesan Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <div class="card narrow-wrapper">

            <h1>Form Pesan Mahasiswa</h1>

            <form action="hasil_pesan.php" method="post">

                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" id="nama" name="nama" placeholder="Masukkan nama Anda" required>
                </div>

                <div class="form-group">
                    <label for="kelas">Kelas</label>
                    <input type="text" id="kelas" name="kelas" placeholder="Masukkan kelas Anda" required>
                </div>

                <div class="form-group">
                    <label for="pesan">Pesan / Kesan</label>
                    <textarea id="pesan" name="pesan" placeholder="Tuliskan pesan atau kesan Anda" required></textarea>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Kirim</button>
                    <a href="index.php" class="btn btn-secondary">Kembali</a>
                </div>

            </form>

        </div>
    </div>

</body>
</html>