<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5. Percabangan - triofonder.fun</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <a href="index.html" class="xbutton" title="Back">X</a>
    <a href="javascript:void(0)" onclick="refreshcode()" id="refreshbutton" class="refreshbutton" title="Refresh">↻</a>

    <div class="middlebox">
        <div class="bluebox">
            <div class="boxhead">
                <h2 class="boxtitle">5. Percabangan</h2>
                <button type="button" id="codebutton" class="codebutton" onclick="togglecode()">👁 view code</button>
            </div>

            <div id="codebox" class="codebox" style="display: none;">
                <div class="codetitle">Source Code (PHP)</div>
                <pre class="codetext"><code>&lt;?php
$nilai = random_int(50, 100);
if ($nilai &gt;= 90) {
    $predikat = "A (Luar biasa)";
} elseif ($nilai &gt;= 80) {
    $predikat = "B (Bagus)";
} elseif ($nilai &gt;= 70) {
    $predikat = "C (Cukup)";
} else {
    $predikat = "D (Perlu belajar lagi)";
}
echo "Jika Nilai = $nilai -&gt; Predikat: $predikat&lt;br&gt;&lt;br&gt;";

$total_belanja = random_int(75000, 250000); 

if ($total_belanja &gt; 150000) {
    $persen_diskon = 0.20;
    $keterangan = "Dapat diskon 20% (karena belanja di atas Rp150.000)";
} elseif ($total_belanja &gt;= 100000) {
    $persen_diskon = 0.15;
    $keterangan = "Dapat diskon 15% (karena belanja Rp100.000 - Rp150.000)";
} else {
    $persen_diskon = 0;
    $keterangan = "Tidak dapat diskon";
}

$diskon = $total_belanja * $persen_diskon;
$bayar  = $total_belanja - $diskon;

echo "Total : Rp$total_belanja &lt;br&gt;";
echo "Keterangan    : $keterangan &lt;br&gt;";
echo "Diskon (" . ($persen_diskon * 100) . "%) : Rp$diskon &lt;br&gt;";
echo "Terbayar  : Rp$bayar &lt;br&gt;&lt;br&gt;";

$hari = "Rabu";
switch ($hari) {
    case "Senin":
        $status = "Awal pekan, semangat!";
        break;
    case "Rabu":
        $status = "Pertengahan pekan, tetap fokus!";
        break;
    case "Jumat":
        $status = "Hampir libur!";
        break;
    default:
        $status = "Hari biasa.";
}
echo "Hari $hari: $status &lt;br&gt;";
?&gt;</code></pre>
            </div>

            <div id="whitescreen" class="whitescreen">
                <?php
                    $nilai = random_int(50, 100);
                    if ($nilai >= 90) {
                        $predikat = "A (Luar biasa)";
                    } elseif ($nilai >= 80) {
                        $predikat = "B (Bagus)";
                    } elseif ($nilai >= 70) {
                        $predikat = "C (Cukup)";
                    } else {
                        $predikat = "D (Perlu belajar lagi)";
                    }
                    echo "Jika Nilai = $nilai -> Predikat: $predikat<br><br>";

                    $total_belanja = random_int(75000, 250000); 

                    if ($total_belanja > 150000) {
                        $persen_diskon = 0.20;
                        $keterangan = "Dapat diskon 20% (karena belanja di atas Rp150.000)";
                    } elseif ($total_belanja >= 100000) {
                        $persen_diskon = 0.15;
                        $keterangan = "Dapat diskon 15% (karena belanja Rp100.000 - Rp150.000)";
                    } else {
                        $persen_diskon = 0;
                        $keterangan = "Tidak dapat diskon";
                    }

                    $diskon = $total_belanja * $persen_diskon;
                    $bayar  = $total_belanja - $diskon;

                    echo "Total : Rp$total_belanja <br>";
                    echo "Keterangan    : $keterangan <br>";
                    echo "Diskon (" . ($persen_diskon * 100) . "%) : Rp$diskon <br>";
                    echo "Terbayar  : Rp$bayar <br><br>";

                    $hari = "Rabu";
                    switch ($hari) {
                        case "Senin":
                            $status = "Awal pekan, semangat!";
                            break;
                        case "Rabu":
                            $status = "Pertengahan pekan, tetap fokus!";
                            break;
                        case "Jumat":
                            $status = "Hampir libur!";
                            break;
                        default:
                            $status = "Hari biasa.";
                    }
                    echo "Hari $hari: $status <br>";
                ?>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>