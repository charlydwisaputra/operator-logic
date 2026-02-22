<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cek kelulusan siswa</title>
</head>

<body>

    <h2>Cek Kelulusan Siswa</h2>

    <form method="post">
        Nilai rata-rata ujian: <br>
        <input type="number" name="nilai"><br><br>

        Kehadiran (%): <br>
        <input type="number" name="kehadiran"><br><br>

        <input type="submit" name="proses" value="Cek">
    </form>

    <?php
    if (isset($_POST['proses'])) {

        $nilai = $_POST['nilai'];
        $kehadiran = $_POST['kehadiran'];

        // operator AND
        if ($nilai >= 75 && $kehadiran >= 80) {
            echo "<p>Hasil: LULUS</p>";
        }

        // operator XOR
        elseif (($nilai >= 75) xor ($kehadiran >= 80)) {
            echo "<p>Hasil: Lulus dengan XOR</p>";
        }

        // operator OR
        elseif ($nilai >= 75 || $kehadiran >= 80) {
            echo "<p>Hasil: Dipertimbangkan</p>";
        }

        // operator NOT
        elseif (!($kehadiran >= 80)) {
            echo "<p>Hasil: Tidak Lulus (Kehadiran kurang)</p>";
        } else {
            echo "<p>Hasil: Tidak Lulus</p>";
        }
    }
    ?>

</body>

</html>