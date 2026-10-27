<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2. Variabel - triofonder.fun</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <a href="index.html" class="go-home-x" title="Kembali ke Homepage">X</a>
    <a href="javascript:void(0)" class="go-refresh" title="Muat Ulang Kode">↻</a>

    <div class="php-middle-wrapper">
        <div class="blue-php-box">
            <div class="box-header">
                <h2 class="box-title">2. Variabel</h2>
                <button type="button" class="btn-toggle-code" onclick="toggleCode()">👁 Lihat Kode</button>
            </div>

            <div id="codeSection" class="code-view-box" style="display: none;">
                <div class="code-title-bar">Source Code (PHP)</div>
                <pre class="code-content"><code>&lt;?php
$nama    = "Nell";
$umur    = 17;
$sekolah = "MIT";
$hobi    = "Ngegithub";
$tahun_lahir = 2026 - $umur;

echo "Cara 1 (titik): " . "Halo, " . $nama . " :&gt; &lt;br&gt;";
echo "Cara 2 (dalam tanda kutip): Halo, $nama! &gt;:p &lt;br&gt;&lt;br&gt;";

echo "Nama : $nama &lt;br&gt;";
echo "Umur : $umur tahun (Tahun lahir sekitar $tahun_lahir)&lt;br&gt;";
echo "Sekolah : $sekolah &lt;br&gt;";
echo "Hobi : $hobi &lt;br&gt;";

$makanan_favorit = "La Peace";
echo "Makanan Favorit : $makanan_favorit &lt;br&gt;";

$uang_jajan = 20000;
echo "Penghasilan Harian : $uang_jajan$ &lt;br&gt;";

$kekayaan = "1000000$";
echo "Kekayaan : $kekayaan :p &lt;br&gt;";
?&gt;</code></pre>
            </div>

            <div class="php-inside-screen">
                <?php 
                    $nama    = "Nell";
                    $umur    = 17;
                    $sekolah = "MIT";
                    $hobi    = "Ngegithub";
                    $tahun_lahir = 2026 - $umur;

                    echo "Cara 1 (titik): " . "Halo, " . $nama . " :> <br>";
                    echo "Cara 2 (dalam tanda kutip): Halo, $nama! >:p <br><br>";

                    echo "Nama : $nama <br>";
                    echo "Umur : $umur tahun (Tahun lahir sekitar $tahun_lahir)<br>";
                    echo "Sekolah : $sekolah <br>";
                    echo "Hobi : $hobi <br>";

                    $makanan_favorit = "La Peace";
                    echo "Makanan Favorit : $makanan_favorit <br>";

                    $uang_jajan = 20000;
                    echo "Penghasilan Harian : $uang_jajan$ <br>";

                    $kekayaan = "1000000$";
                    echo "Kekayaan : $kekayaan :p <br>";
                ?>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
