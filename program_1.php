<!DOCTYPE html>
<html>
<head>
    <title>Program Menghitung Hasil KHS</title>
</head>
<body>
    <h1>Program Menghitung Hasil KHS</h1>
    <form method="post" action="">
        <label for="tugas">Nilai Tugas:</label>
        <input type="number" name="tugas" id="tugas" required><br><br>
        <label for="uts">Nilai UTS:</label>
        <input type="number" name="uts" id="uts" required><br><br>
        <label for="uas">Nilai UAS:</label>
        <input type="number" name="uas" id="uas" required><br><br>
        <input type="submit" name="submit" value="Hitung">
    </form>

    <?php
    if(isset($_POST['submit'])){
        $tugas = $_POST['tugas'];
        $uts = $_POST['uts'];
        $uas = $_POST['uas'];

        $khs = ($tugas * 0.2) + ($uts * 0.3) + ($uas * 0.5);

        echo "<h2>Hasil KHS:</h2>";
        echo "Nilai KHS: " . $khs . "<br>";

        if($khs >= 90){
            echo "Kategori: A";
        }
        elseif($khs >= 80){
            echo "Kategori: B";
        }
        elseif($khs >= 60){
            echo "Kategori: C";
        }
        else{
            echo "Kategori: D";
        }
    }
    ?>
</body>
</html>
