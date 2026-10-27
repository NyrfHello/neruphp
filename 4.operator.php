<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4. Operator - triofonder.fun</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <a href="index.html" class="xbutton" title="Back">X</a>
    <a href="javascript:void(0)" onclick="refreshcode()" id="refreshbutton" class="refreshbutton" title="Refresh">↻</a>

    <div class="middlebox">
        <div class="bluebox">
            <div class="boxhead">
                <h2 class="boxtitle">4. Operator</h2>
                <button type="button" id="codebutton" class="codebutton" onclick="togglecode()">👁 view code</button>
            </div>

            <div id="codebox" class="codebox" style="display: none;">
                <div class="codetitle">Source Code (PHP)</div>
                <pre class="codetext"><code>&lt;?php
$nama_barang1 = "Indomie Goreng";
$harga_satu1  = 3500;
$jumlah_beli1 = 5; 
$subtotal1    = $harga_satu1 * $jumlah_beli1;

$nama_barang2 = "Teh Pucuk";
$harga_satu2  = 3000;
$jumlah_beli2 = 2; 
$subtotal2    = $harga_satu2 * $jumlah_beli2;

$total        = $subtotal1 + $subtotal2;
$uang_dibawa  = 30000;
$kembalian    = $uang_dibawa - $total;

echo "Barang 1 : " . $nama_barang1 . " (" . $jumlah_beli1 . " x Rp" . $harga_satu1 . ") = Rp" . $subtotal1 . "&lt;br&gt;";
echo "Barang 2 : " . $nama_barang2 . " (" . $jumlah_beli2 . " x Rp" . $harga_satu2 . ") = Rp" . $subtotal2 . "&lt;br&gt;";
echo "Total Bayar : Rp" . $total . "&lt;br&gt;";
echo "Uang Dibawa : Rp" . $uang_dibawa . "&lt;br&gt;";
echo "Kembalian   : Rp" . $kembalian . "&lt;br&gt;&lt;br&gt;";

$sisa_bagi = $total % 2;
if ($sisa_bagi == 0) {
    echo "Total bayar Rp$total adalah bilangan genap (karena $total % 2 = 0) :D &lt;br&gt;";
} else {
    echo "Total bayar Rp$total adalah bilangan ganjil (karena $total % 2 = $sisa_bagi) :P &lt;br&gt;";
}
?&gt;</code></pre>
            </div>

            <div id="whitescreen" class="whitescreen">
                <?php
                    $nama_barang1 = "Indomie Goreng";
                    $harga_satu1  = 3500;
                    $jumlah_beli1 = 5; 
                    $subtotal1    = $harga_satu1 * $jumlah_beli1;

                    $nama_barang2 = "Teh Pucuk";
                    $harga_satu2  = 3000;
                    $jumlah_beli2 = 2; 
                    $subtotal2    = $harga_satu2 * $jumlah_beli2;

                    $total        = $subtotal1 + $subtotal2;
                    $uang_dibawa  = 30000;
                    $kembalian    = $uang_dibawa - $total;

                    echo "Barang 1 : " . $nama_barang1 . " (" . $jumlah_beli1 . " x Rp" . $harga_satu1 . ") = Rp" . $subtotal1 . "<br>";
                    echo "Barang 2 : " . $nama_barang2 . " (" . $jumlah_beli2 . " x Rp" . $harga_satu2 . ") = Rp" . $subtotal2 . "<br>";
                    echo "Total Bayar : Rp" . $total . "<br>";
                    echo "Uang Dibawa : Rp" . $uang_dibawa . "<br>";
                    echo "Kembalian   : Rp" . $kembalian . "<br><br>";

                    $sisa_bagi = $total % 2;
                    if ($sisa_bagi == 0) {
                        echo "Total bayar Rp$total adalah bilangan genap (karena $total % 2 = 0) :D <br>";
                    } else {
                        echo "Total bayar Rp$total adalah bilangan ganjil (karena $total % 2 = $sisa_bagi) :P <br>";
                    }
                ?>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>