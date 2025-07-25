
<?php
// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $conn = new mysqli("localhost", "root", "", "kespadatabase");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $namaAduan = $_POST['namaAduan'];
    $noTelAduan = $_POST['noTelAduan'];
    $emailAduan = $_POST['emailAduan'];
    $syarikatAduan = $_POST['syarikatAduan'];
    $alamatSyarikatAduan = $_POST['alamatSyarikatAduan'];
    $posPekerjaAduan = $_POST['posPekerjaAduan'];
    $negeriAduan = $_POST['negeriAduan'];
    $aduan = $_POST['aduan'];
    $buktiAduan = null;

    // Handle image upload
    if (isset($_FILES['buktiAduan']) && $_FILES['buktiAduan']['error'] === 0) {
        $targetDir = "bukti_aduan/";
        if (!is_dir($targetDir)) mkdir($targetDir);
        $filename = time() . "_" . basename($_FILES["buktiAduan"]["name"]);
        $targetFile = $targetDir . $filename;
        move_uploaded_file($_FILES["buktiAduan"]["tmp_name"], $targetFile);
        $buktiAduan = $targetFile;
    }

    // Insert data
    $stmt = $conn->prepare("INSERT INTO kespa_aduan (namaAduan, noTelAduan, emailAduan, syarikatAduan, alamatSyarikatAduan, posPekerjaAduan, negeriAduan, aduan, buktiAduan) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssss", $namaAduan, $noTelAduan, $emailAduan, $syarikatAduan, $alamatSyarikatAduan, $posPekerjaAduan, $negeriAduan, $aduan, $buktiAduan);

    if ($stmt->execute()) {
        echo "<script>alert('Aduan berjaya dihantar!');</script>";
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
  <title>Hantar Aduan - KESPA</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f0f2f5;
      margin: 0;
      padding: 0;
    }

    section {
      padding: 20px;
    }

    .form-card {
      max-width: 650px;
      margin: 30px auto;
      background: white;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
    }

    .form-card h2 {
      text-align: center;
      color: #004466;
      margin-bottom: 20px;
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

    textarea[name="aduan"] {
      height: 120px;
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

    footer {
      background-color: #004466;
      color: white;
      text-align: center;
      padding: 1em;
    }

    header {
      background-color: #004466;
      color: white;
      text-align: center;
      padding: 1em;
    }
  </style>
</head>
<body>

<header>
  <h1>Kesatuan Kebangsaan Pekerja Pekerja Pengawal Keselamatan Semenanjung Malaysia (KESPA)</h1>
  <p>"Berani Berubah Demi Masa Depan Yang Lebih Baik"</p>
</header>

<nav style="text-align:center; background-color:#1f6391; padding:10px;">
  <a href="kespadashboard.php" style="color:white; text-decoration:none; font-weight:bold;">&larr; Kembali ke Menu Utama</a>
</nav>

<section>
  <div class="form-card">
    <h2>Borang Aduan</h2>
    <form method="POST" enctype="multipart/form-data">
      <div class="form-group">
        <label>Nama:</label>
        <input type="text" name="namaAduan" required />
      </div>

      <div class="form-group">
        <label>No. Telefon:</label>
        <input type="text" name="noTelAduan" required />
      </div>

      <div class="form-group">
        <label>Email:</label>
        <input type="email" name="emailAduan" required />
      </div>

      <div class="form-group">
        <label>Nama Syarikat:</label>
        <input type="text" name="syarikatAduan" required />
      </div>

      <div class="form-group">
        <label>Alamat Syarikat:</label>
        <input type="text" name="alamatSyarikatAduan" required />
      </div>

      <div class="form-group">
        <label>Pos Pekerja:</label>
        <input type="text" name="posPekerjaAduan" required />
      </div>

      <div class="form-group">
        <label>Negeri:</label>
        <input type="text" name="negeriAduan" required />
      </div>

      <div class="form-group">
        <label>Aduan:</label>
        <textarea name="aduan" required></textarea>
      </div>

      <div class="form-group">
        <label>Muat Naik Bukti :</label>
        <input type="file" name="buktiAduan" accept="image/*" required />
      </div>

      <button type="submit">Hantar Aduan</button>
    </form>
  </div>
</section>

<footer>
  <p>&copy; 2025 Kesatuan Sekerja KESPA. Semua Hak Terpelihara.</p>
</footer>

</body>
</html>
