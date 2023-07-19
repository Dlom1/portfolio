<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama = $_POST["nama"];
  $alamat = $_POST["alamat"];
  $status = $_POST["status"];

  // Lakukan proses penyimpanan data ke database atau file lainnya
  // Contoh: simpan data ke file CSV
  $data = array($nama, $alamat, $status);
  $file = fopen("data.csv", "a"); // 'a' untuk append data ke file yang sudah ada
  fputcsv($file, $data);
  fclose($file);

  // Redirect ke halaman lain atau tampilkan pesan berhasil
  echo "Terima kasih telah mendaftar dan melakukan pembayaran!";
}
?>
