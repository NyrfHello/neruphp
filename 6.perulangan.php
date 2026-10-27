<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>6. Perulangan - triofonder.fun</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <a href="index.html" class="xbutton" title="Back">X</a>
    <a href="javascript:void(0)" onclick="refreshcode()" id="refreshbutton" class="refreshbutton" title="Refresh">↻</a>

    <div class="middlebox">
        <div class="bluebox">
            <div class="boxhead">
                <h2 class="boxtitle">6. Perulangan</h2>
                <button type="button" id="codebutton" class="codebutton" onclick="togglecode()">👁 view code</button>
            </div>

            <div id="codebox" class="codebox" style="display: none;">
                <div class="codetitle">Source Code (PHP)</div>
                <pre class="codetext"><code>&lt;?php
for ($i = 1; $i &lt;= 10; $i++) {
    $hasil = 7 * $i;
    echo "7 x $i = $hasil &lt;br&gt;";
}
echo "&lt;br&gt;";

$n = 5;
while ($n &gt; 0) {
    echo "$n ";
    $n--;
}

echo "Mulai! :D &lt;br&gt;&lt;br&gt;";
$keranjang = ["Indomie", "Teh Pucuk", "Kopi", "Roti", "Susu Kotak"];
$no = 1;
foreach ($keranjang as $barang) {
    echo "$no. $barang &lt;br&gt;";
    $no++;
}
echo "&lt;br&gt;";

foreach (range(1, 10) as $angka) {
    echo "$angka ";
}
echo "&lt;br&gt;&lt;br&gt;";
?&gt;</code></pre>
            </div>

            <div id="whitescreen" class="whitescreen">
                <?php
                    for ($i = 1; $i <= 10; $i++) {
                        $hasil = 7 * $i;
                        echo "7 x $i = $hasil <br>";
                    }
                    echo "<br>";

                    $n = 5;
                    while ($n > 0) {
                        echo "$n ";
                        $n--;
                    }

                    echo "Mulai! :D <br><br>";
                    $keranjang = ["Indomie", "Teh Pucuk", "Kopi", "Roti", "Susu Kotak"];
                    $no = 1;
                    foreach ($keranjang as $barang) {
                        echo "$no. $barang <br>";
                        $no++;
                    }
                    echo "<br>";

                    foreach (range(1, 10) as $angka) {
                        echo "$angka ";
                    }
                    echo "<br><br>";
                ?>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>