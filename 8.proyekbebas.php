<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>8. Proyek Bebas - triofonder.fun</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <a href="index.html" class="go-home-x" title="Kembali ke Homepage">X</a>
    <a href="javascript:void(0)" class="go-refresh" title="Muat Ulang Kode">↻</a>

    <div class="php-middle-wrapper">
        <div class="blue-php-box">
            <div class="box-header">
                <h2 class="box-title">8. Proyek Bebas</h2>
                <button type="button" class="btn-toggle-code" onclick="toggleCode()">👁 Lihat Kode</button>
            </div>

            <div id="codeSection" class="code-view-box" style="display: none;">
                <div class="code-title-bar">Source Code (PHP)</div>
                <pre class="code-content"><code>&lt;?php
$answer = random_int(1, 1000000);
$min = 1;
$max = 1000000;

echo "&lt;h3&gt;tebak angka '1 in 1 million' tapi system coba selesain :v&lt;/h3&gt;";
echo "Target Rahasia: &lt;b&gt;$answer&lt;/b&gt;&lt;br&gt;&lt;br&gt;";

$langkah = 0;
while (true) {
    $langkah++;
    $trying = random_int($min, $max); 
    echo("Langkah #$langkah (rentang $min - $max) system thinking... : &lt;b&gt;" . $trying . "&lt;/b&gt;&lt;br&gt;");
    $yoo = $trying;

    if ($yoo &lt; $answer) {
        echo "terlalu kecil sepertinya :/ &lt;br&gt;&lt;br&gt;";
        $min = $yoo + 1;
    } 
    elseif ($yoo &gt; $answer and $yoo &lt;= 1000000) {
        echo "sepertinya terlalu besar :c &lt;br&gt;&lt;br&gt;";
        $max = $yoo - 1;
    } 
    else {
        echo "&lt;h2&gt;SAYA BENAR! :D (Ditemukan dalam $langkah tebakan)&lt;/h2&gt;&lt;br&gt;";
        break;
    }
}
?&gt;</code></pre>
            </div>

            <div class="php-inside-screen">
                <?php
                    $answer = random_int(1, 1000000);
                    $min = 1;
                    $max = 1000000;

                    echo "<h3>tebak angka '1 in 1 million' tapi system coba selesain :v</h3>";
                    echo "Target Rahasia: <b>$answer</b><br><br>";

                    $langkah = 0;
                    while (true) {
                        $langkah++;
                        $trying = random_int($min, $max); 
                        echo("Langkah #$langkah (rentang $min - $max) system thinking... : <b>" . $trying . "</b><br>");
                        $yoo = $trying;

                        if ($yoo < $answer) {
                            echo "terlalu kecil sepertinya :/ <br><br>";
                            $min = $yoo + 1;
                        } 
                        elseif ($yoo > $answer and $yoo <= 1000000) {
                            echo "sepertinya terlalu besar :c <br><br>";
                            $max = $yoo - 1;
                        } 
                        else {
                            echo "<h2>SAYA BENAR! :D (Ditemukan dalam $langkah tebakan)</h2><br>";
                            break;
                        }
                    }
                ?>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
