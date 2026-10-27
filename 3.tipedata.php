<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3. Tipe Data - triofonder.fun</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <a href="index.html" class="go-home-x" title="Kembali ke Homepage">X</a>
    <a href="javascript:void(0)" class="go-refresh" title="Muat Ulang Kode">↻</a>

    <div class="php-middle-wrapper">
        <div class="blue-php-box">
            <div class="box-header">
                <h2 class="box-title">3. Tipe Data</h2>
                <button type="button" class="btn-toggle-code" onclick="toggleCode()">👁 Lihat Kode</button>
            </div>

            <div id="codeSection" class="code-view-box" style="display: none;">
                <div class="code-title-bar">Source Code (PHP)</div>
                <pre class="code-content"><code>&lt;?php
$teks     = "Nerumart"; 
$jumlah   = 20;              
$harga    = 3500.50;          
$stok_ada = true;            
$produk   = ["Indomie", "Teh Pucuk", "Kopi"]; 

echo "String: $teks &lt;br&gt;";
echo "Integer: $jumlah &lt;br&gt;";
echo "Float: $harga &lt;br&gt;";
echo "Boolean: $stok_ada&lt;br&gt;";
echo "Array Produk: $produk[0], $produk[1], $produk[2] &lt;br&gt;&lt;br&gt;";

echo "Tebakan tipe data \"16\": string&lt;br&gt;";
echo "Hasil cek dengan var_dump(\"16\"): ";
var_dump("16");
echo "&lt;br&gt;&lt;br&gt;";

echo "Hasil var_dump(16) : ";
var_dump(16);
echo "&lt;br&gt;";
echo "Hasil var_dump(\"16\") : ";
var_dump("16");
echo "&lt;br&gt;";

$produk[] = "Roti Tawar";
echo "&lt;br&gt; Array setelah ditambah 1 produk baru: &lt;br&gt; $produk[0], $produk[1], $produk[2], $produk[3] &lt;br&gt;&lt;br&gt;";
?&gt;</code></pre>
            </div>

            <div class="php-inside-screen">
                <?php
                    $teks     = "Nerumart"; 
                    $jumlah   = 20;              
                    $harga    = 3500.50;          
                    $stok_ada = true;            
                    $produk   = ["Indomie", "Teh Pucuk", "Kopi"]; 

                    echo "String: $teks <br>";
                    echo "Integer: $jumlah <br>";
                    echo "Float: $harga <br>";
                    echo "Boolean: $stok_ada<br>";
                    echo "Array Produk: $produk[0], $produk[1], $produk[2] <br><br>";

                    echo "Tebakan tipe data \"16\": string<br>";
                    echo "Hasil cek dengan var_dump(\"16\"): ";
                    var_dump("16");
                    echo "<br><br>";

                    echo "Hasil var_dump(16) : ";
                    var_dump(16);
                    echo "<br>";
                    echo "Hasil var_dump(\"16\") : ";
                    var_dump("16");
                    echo "<br>";

                    $produk[] = "Roti Tawar";
                    echo "<br> Array setelah ditambah 1 produk baru: <br> $produk[0], $produk[1], $produk[2], $produk[3] <br><br>";
                ?>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
