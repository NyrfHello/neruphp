<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>6. Perulangan - triofonder.fun</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <a href="index.html" class="go-home-x" title="Kembali ke Homepage">X</a>
    <a href="javascript:void(0)" class="go-refresh" title="Muat Ulang Kode">↻</a>

    <div class="php-middle-wrapper">
        <div class="blue-php-box">
            <div class="box-header">
                <h2 class="box-title">6. Perulangan</h2>
                <button type="button" class="btn-toggle-code" onclick="toggleCode()">👁 Lihat Kode</button>
            </div>

            <div id="codeSection" class="code-view-box" style="display: none;">
                <div class="code-title-bar">Source Code (PHP)</div>
                <pre class="code-content"><code>&lt;?php
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

            <div class="php-inside-screen">
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
