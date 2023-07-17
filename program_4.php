<!-- 
NAMA   : SANDRI ADNIN
NPM    : 202243570053
MATKUL : PEMROGRAMAN WEB LANJUT
-->

<?php

function getStatusGaji($gajiPokok, $uangLembur, $tunjangan, $utang) {
    $gajiTotal = $gajiPokok + $uangLembur + $tunjangan - $utang;

    if ($gajiTotal >= 10000000) {
        return "Karyawan Tetap";
    } elseif ($gajiTotal >= 5000000) {
        return "Karyawan Kontrak";
    } else {
        return "Karyawan Honor";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $gajiPokok = $_POST["gaji_pokok"];
    $uangLembur = $_POST["uang_lembur"];
    $tunjangan = $_POST["tunjangan"];
    $utang = $_POST["utang"];

    $statusGaji = getStatusGaji($gajiPokok, $uangLembur, $tunjangan, $utang);
} else {
    // Nilai default jika form belum di-submit
    $gajiPokok = "";
    $uangLembur = "";
    $tunjangan = "";
    $utang = "";
    $statusGaji = "";
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Status Gaji Karyawan</title>
</head>
<body>
    <h1>Status Gaji Karyawan</h1>

    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="gaji_pokok">Gaji Pokok:</label>
        <input type="number" name="gaji_pokok" value="<?php echo $gajiPokok; ?>" required><br>

        <label for="uang_lembur">Uang Lembur:</label>
        <input type="number" name="uang_lembur" value="<?php echo $uangLembur; ?>" required><br>

        <label for="tunjangan">Tunjangan:</label>
        <input type="number" name="tunjangan" value="<?php echo $tunjangan; ?>" required><br>

        <label for="utang">Utang:</label>
        <input type="number" name="utang" value="<?php echo $utang; ?>" required><br>

        <input type="submit" value="Cek Status">
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <p>Status Gaji: <?php echo $statusGaji; ?></p>
    <?php endif; ?>
</body>
</html>
