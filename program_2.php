<!-- 
NAMA   : SANDRI ADNIN
NPM    : 202243570053
MATKUL : PEMROGRAMAN WEB LANJUT
-->

<!DOCTYPE html>
<html>
<head>
    <title>Program Menghitung Determinan</title>
</head>
<body>
    <h1>Program Menghitung Determinan</h1>

    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="a">Nilai a:</label>
        <input type="number" name="a" required><br>

        <label for="b">Nilai b:</label>
        <input type="number" name="b" required><br>

        <label for="c">Nilai c:</label>
        <input type="number" name="c" required><br>

        <input type="submit" value="Hitung">
    </form>
</body>
</html>
<br></br>
<?php
function calculateDeterminant($a, $b, $c) {
    $d = $b * $b - 4 * $a * $c;

    $location = "";
    if ($d > 0) {
        $location = "Kurva di Atas Garis";
    } else if ($d == 0) {
        $location = "Berada di Garis Kurva";
    } else {
        $location = "Di Bawah Garis Kurva";
    }

    return $d . " " . $location;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];

    $result = calculateDeterminant($a, $b, $c);

    echo "Hasil Determinant (D): " . $result;
}

?>


