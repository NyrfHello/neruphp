<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1. Halo Dunia - triofonder.fun</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <a href="index.html" class="go-home-x" title="Kembali ke Homepage">X</a>
    <a href="javascript:void(0)" class="go-refresh" title="Muat Ulang Kode">↻</a>

    <div class="php-middle-wrapper">
        <div class="blue-php-box">
            <div class="box-header">
                <h2 class="box-title">1. Halo Dunia</h2>
                <button type="button" class="btn-toggle-code" onclick="toggleCode()">👁 Lihat Kode</button>
            </div>

            <div id="codeSection" class="code-view-box" style="display: none;">
                <div class="code-title-bar">Source Code (PHP)</div>
                <pre class="code-content"><code>&lt;?php
$world = "Hello, World";
$nell = str_replace("World", "Nell", $world); 
echo $nell . "&lt;br&gt;";
echo "Halo, aku Nell! :D &lt;br&gt;";
echo "Cita-cita : Menjadi Software Engineer ^_^ &lt;br&gt;";

$hitung = 10 * 5;
echo "Hasil 10 * 5 = " . $hitung . "&lt;br&gt;";
?&gt;</code></pre>
            </div>

            <div class="php-inside-screen">
                <?php
                    $world = "Hello, World";
                    $nell = str_replace("World", "Nell", $world); 
                    echo $nell . "<br>";
                    echo "Halo, aku Nell! :D <br>";
                    echo "Cita-cita : Menjadi Software Engineer ^_^ <br>";

                    $hitung = 10 * 5;
                    echo "Hasil 10 * 5 = " . $hitung . "<br>";
                ?>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
