<?php

function convertToReamur($celsius) {
    return $celsius * 3 / 5;
}

function convertToFahrenheit($celsius) {
    return $celsius * 9 / 5 + 32;
}

function getAirCondition($celsius) {
    if ($celsius > 35) {
        return "Udara sangat panas";
    } elseif ($celsius > 20) {
        return "Udara sedang";
    } else {
        return "Udara dingin";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $celsius = $_POST["celsius"];
    $reamur = convertToReamur($celsius);
    $fahrenheit = convertToFahrenheit($celsius);
    $airCondition = getAirCondition($celsius);
} else {
    // Nilai default jika form belum di-submit
    $celsius = "";
    $reamur = "";
    $fahrenheit = "";
    $airCondition = "";
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Konversi Suhu</title>
</head>
<body>
    <h1>Konversi Suhu</h1>

    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="celsius">Suhu Celsius:</label>
        <input type="number" name="celsius" value="<?php echo $celsius; ?>" required><br>

        <input type="submit" value="Konversi">
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <p>Suhu Reamur: <?php echo $reamur; ?></p>
        <p>Suhu Fahrenheit: <?php echo $fahrenheit; ?></p>
        <p>Kondisi Udara: <?php echo $airCondition; ?></p>
    <?php endif; ?>
</body>
</html>
