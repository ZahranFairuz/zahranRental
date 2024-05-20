<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rental Motor</title>
  <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
  <div class="container">
    <h2>Rental Motor Barokah</h2>
    <form action="" method="post">
      <label for="nama">Nama:</label>
      <input type="text" id="nama" name="nama" required>
      
      <label for="waktuRental">Lama Waktu Per hari:</label>
      <input type="number" id="waktuRental" name="waktuRental" required>

     
      <label for="jenis_motor">Jenis Motor:</label>
      <select name="jenis_motor" id="jenis_motor" required>
        <option hidden>Pilih Jenis Motor</option>
        <option value="Beat">Beat</option>
        <option value="Vario">Vario</option>
        <option value="Aerox">Aerox</option>
        <option value="Vespa">Vespa</option>
      </select>
      
      <button type="submit" name="submit">Kirim</button>
    </form>
    
    <?php
    if(isset($_POST['submit'])) {
      $nama = $_POST['nama'];
      $waktuRental = $_POST['waktuRental'];
      $jenis_motor = $_POST['jenis_motor'];

      $harga_motor = [
        "Beat" => 75000,
        "Vario" => 150000,
        "Aerox" => 200000,
        "Vespa" => 1000000
      ];

      $pajak = 10000;
      
      $total_harga = $harga_motor[$jenis_motor] * $waktuRental;

      $total_harga += $pajak;
      
      echo "<p>Nama : $nama</p>";
      echo "<p>Waktu Rental: $waktuRental hari</p>";
      echo "<p>Jenis Motor: $jenis_motor</p>";
      echo "<p>Harga Yang Harus di Bayar: Rp. " . number_format($total_harga, 2, ",", ".") . ". Dengan pajak 10 ribu sudah di tambahkan";
    }


    ?>
  </div>
</body>
</html>