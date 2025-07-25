<?php
// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $conn = new mysqli("localhost", "root", "", "kespadatabase");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $nama = $_POST['nama'];
    $noIC = $_POST['noIC'];
    $alamat = $_POST['alamat'];
    $noTel = $_POST['noTel'];
    $jantina = $_POST['jantina'];
    $email = $_POST['email'];
    $namaSyarikat = $_POST['namaSyarikat'];
    $submitDate = date('Y-m-d H:i:s');
    $image_path = null;

    // Upload image if provided
    if ($_FILES['paymentImage']['error'] === 0) {
        $targetDir = "uploads/";
        if (!is_dir($targetDir)) mkdir($targetDir);
        $filename = time() . "_" . basename($_FILES['paymentImage']['name']);
        $targetFile = $targetDir . $filename;
        move_uploaded_file($_FILES['paymentImage']['tmp_name'], $targetFile);
        $image_path = $targetFile;
    }

    // Insert into database
    $stmt = $conn->prepare("INSERT INTO ahli_kespa (submitDate, nama, noIC, alamat, noTel, jantina, email, namaSyarikat, image_path) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssss", $submitDate, $nama, $noIC, $alamat, $noTel, $jantina, $email, $namaSyarikat, $image_path);

    if ($stmt->execute()) {
        echo "<script>alert('Pendaftaran berjaya!');</script>";
    } else {
        echo "<script>alert('Ralat: " . $stmt->error . "');</script>";
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="ms">
<head>
  <meta charset="UTF-8">
  <title>Pendaftaran Ahli KESPA</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f0f2f5;
    }

    header, footer {
      background: #004466;
      color: white;
      text-align: center;
      padding: 1em;
    }

    section {
      padding: 2em;
    }

    .form-box {
      max-width: 600px;
      margin: 30px auto;
      background: white;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
    }

    h2 {
      color: #004466;
      text-align: center;
    }

    ul {
      margin-left: 1.5em;
    }

    .form-group {
      margin-bottom: 15px;
    }

    label {
      font-weight: bold;
      display: block;
      margin-bottom: 6px;
    }

    input[type="text"],
    input[type="email"],
    input[type="file"],
    textarea,
    select {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 6px;
    }

    button[type="submit"] {
      width: 100%;
      padding: 12px;
      background-color: #004466;
      color: white;
      border: none;
      border-radius: 8px;
      font-weight: bold;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    button[type="submit"]:hover {
      background-color: #006699;
    }

    .hidden {
      display: none;
    }
  </style>
</head>
<body>

<header>
  <h1>Kesatuan Kebangsaan Pekerja Pekerja Pengawal Keselamatan Semenanjung Malaysia (KESPA)</h1>
  <p>Melindungi Hak dan Kebajikan Pekerja</p>
  <p>"Berani Berubah Demi Masa Depan Yang Lebih Baik"</p>
</header>

<nav style="text-align:center; background-color:#1f6391; padding:10px;">
  <a href="kespadashboard.php" style="color:white; text-decoration:none; font-weight:bold;">&larr; Kembali ke Menu Utama</a>
</nav>

<section>
  <h1>SYARAT MENJADI AHLI KESPA</h1>
  <ul>
    <li>Pekerja – Pekerja Pengawal Keselamatan</li>
    <li>Bekas Pekerja Pengawal Keselamatan</li>
    <li>Berumur 18 tahun ke atas</li>
    <li>Semua bangsa yang berpenduduk tetap di Malaysia</li>
  </ul>

  <h1>YURAN KEAHLIAN</h1>
  <ul>
  <li> Yuran Daftar Ahli Baru : RM30</li>
  <li> Yuran Bulanan : RM10</li>
  </ul>
</section>

<div class="form-box">
  <h2>Borang Pendaftaran Keahlian</h2>

  <form method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label>Nama:</label>
      <input type="text" name="nama" required />
    </div>

    <div class="form-group">
      <label>No. IC:</label>
      <input type="text" name="noIC" required />
    </div>

    <div class="form-group">
      <label>Alamat:</label>
      <textarea name="alamat" required></textarea>
    </div>

    <div class="form-group">
      <label>No. Telefon:</label>
      <input type="text" name="noTel" required />
    </div>

    <div class="form-group">
      <label>Jantina:</label>
      <select name="jantina" required>
        <option value="">--Pilih--</option>
        <option value="Lelaki">Lelaki</option>
        <option value="Perempuan">Perempuan</option>
      </select>
    </div>

    <div class="form-group">
      <label>Email:</label>
      <input type="email" name="email" required />
    </div>

    <div class="form-group">
      <label>Nama Syarikat:</label>
      <input type="text" name="namaSyarikat" required />
    </div>

    <div class="form-group" style="text-align: center;">
  <label>Kaedah Pembayaran:</label>
  <img src="bukti_pembayaran.jpg" alt="Pembayaran" style="max-width: 100%; height: auto; border: 1px solid #ccc; border-radius: 8px; padding: 6px;">
  <label>No. Akaun:</label>
</div>

    <div class="form-group" id="imageUpload">
      <label>Muat Naik Bukti Pembayaran:</label>
      <input type="file" name="paymentImage" id="paymentImage" accept="image/*" required />
    </div>

    <button type="submit">Hantar</button>
  </form>
</div>

<footer>
  <p>&copy; 2025 Kesatuan Sekerja KESPA. Semua Hak Terpelihara.</p>
</footer>


</body>
</html>
