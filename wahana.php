<?php
echo "<h2>Pengecekan Wahana Roller Coaster</h2>";

$umur = 20; // Silakan ubah-ubah angka ini nanti
$tinggi_cm = 140; // Silakan ubah-ubah angka ini nanti

// Lengkapi syarat if menggunakan logika AND (&&)
if ($umur  >= 12 && $tinggi_cm  <= 145) {
    echo "<h3 style='color: green;'>Selamat, Anda Boleh Naik Wahana! (Umur: $umur tahun, Tinggi: $tinggi_cm cm)</h3>";
} else {
    echo "<h3 style='color: red;'>Maaf, Anda belum boleh naik wahana. (Umur: $umur tahun, Tinggi: $tinggi_cm cm)</h3>";
}
?>
