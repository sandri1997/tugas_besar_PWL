<!DOCTYPE html>
<html>
<head>
    <title>Program Undian Hadiah</title>
</head>
<body>
    <h1>Program Undian Hadiah</h1>

    <?php

    function getHadiah($totalHarga) {
        if ($totalHarga >= 1000000) {
            return "Handphone";
        } elseif ($totalHarga >= 500000) {
            return "Dompet";
        } elseif ($totalHarga >= 100000) {
            return "Payung";
        } else {
            return "Tidak mendapatkan apa-apa";
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $jumlahSampo = $_POST["jumlah_sampo"];
        $hargaSampo = $_POST["harga_sampo"];
        $jumlahSabun = $_POST["jumlah_sabun"];
        $hargaSabun = $_POST["harga_sabun"];
        $jumlahBedak = $_POST["jumlah_bedak"];
        $hargaBedak = $_POST["harga_bedak"];

        $totalHarga = ($jumlahSampo * $hargaSampo) + ($jumlahSabun * $hargaSabun) + ($jumlahBedak * $hargaBedak);

        $hadiah = getHadiah($totalHarga);
    }

    ?>

    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="jumlah_sampo">Jumlah Sampo:</label>
        <input type="number" name="jumlah_sampo" required><br>
        <label for="harga_sampo">Harga Sampo:</label>
        <input type="number" name="harga_sampo" required><br>

        <label for="jumlah_sabun">Jumlah Sabun:</label>
        <input type="number" name="jumlah_sabun" required><br>
        <label for="harga_sabun">Harga Sabun:</label>
        <input type="number" name="harga_sabun" required><br>

        <label for="jumlah_bedak">Jumlah Bedak:</label>
        <input type="number" name="jumlah_bedak" required><br>
        <label for="harga_bedak">Harga Bedak:</label>
        <input type="number" name="harga_bedak" required><br>

        <input type="submit" value="Hitung">
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <p>Total Harga: <?php echo $totalHarga; ?></p>
        <p>Hadiah: <?php echo $hadiah; ?></p>
    <?php endif; ?>
</body>
</html>
