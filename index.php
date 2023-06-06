<?php
function hitungKalori($polaMakan) {
  $kaloriPerMakan = 2500;
  $jumlahKaloriPerHari = [];
  $jumlahKaloriPerMinggu = 0;

  foreach ($polaMakan as $jumlahMakan) {
    $kaloriHariIni = $jumlahMakan * $kaloriPerMakan;
    $jumlahKaloriPerHari[] = $kaloriHariIni;
    $jumlahKaloriPerMinggu += $kaloriHariIni;
  }

  return [$jumlahKaloriPerHari, $jumlahKaloriPerMinggu];
}

$polaMakan = [3, 2, 2, 3, 3, 2, 1]; // Jumlah makan per hari: Senin-Minggu
list($kaloriPerHari, $kaloriPerMinggu) = hitungKalori($polaMakan);

$istirahatPerHari = [5, 6, 8, 8, 5, 6, 4]; // Jam istirahat per hari: Senin-Minggu
$istirahatPerMinggu = array_sum($istirahatPerHari);

// Menampilkan jumlah kalori per hari
echo "Jumlah kalori per hari: <br>";
$hari = ["Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu"];
for ($i = 0; $i < count($kaloriPerHari); $i++) {
  echo $hari[$i] . ": " . $kaloriPerHari[$i] . " kalori <br>";
}

// Menampilkan jumlah kalori per minggu
echo "Jumlah kalori per minggu: " . $kaloriPerMinggu . " kalori <br>";

// Menampilkan jumlah waktu istirahat per hari
echo "<br> Jumlah waktu istirahat per hari: <br>";
for ($i = 0; $i < count($istirahatPerHari); $i++) {
  echo $hari[$i] . ": " . $istirahatPerHari[$i] . " jam <br>";
}

// Menampilkan jumlah waktu istirahat per minggu
echo "Jumlah waktu istirahat per minggu: " . $istirahatPerMinggu . " jam <br>";

// Menentukan kondisi sembuh atau sakit
if ($kaloriPerMinggu >= 17500 && $istirahatPerMinggu >= 56) {
  echo "<br>Fu sudah sembuh!";
} else {
  echo "<br>Fu masih sakit.";
}
?>
