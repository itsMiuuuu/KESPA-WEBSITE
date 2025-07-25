<!DOCTYPE html>
<html lang="ms">

<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  }

  body {
    height: auto;
    overflow-x: hidden;
  }

  .header {
    background-color: #2980b9;
    padding: 12px 20px;
    color: white;
    display: flex;
    align-items: center;
    justify-content: space-between;
  }
  
  .main-toggle-btn {
  padding: 10px 25px;
  margin: 0 5px;
  border: none;
  border-radius: 25px;
  background-color: #3498db;
  color: white;
  font-weight: bold;
  cursor: pointer;
  transition: background 0.3s, transform 0.2s;
}

.main-toggle-btn:hover {
  background-color: #2c80b4;
  transform: scale(1.05);
}

.main-toggle-btn.active {
  background-color: #1f6391;
  box-shadow: 0 0 8px rgba(31, 99, 145, 0.6);
}

.main-section-box {
  padding: 25px;
  background: #fff;
  border-radius: 12px;
  box-shadow: 0 4px 20px rgba(0,0,0,0.1);
  max-width: 800px;
  margin: auto;
}

  .nav-buttons {
    display: flex;
    gap: 10px;
  }

  .nav-buttons button {
    padding: 8px 14px;
    border: none;
    background-color: #1f6391;
    color: white;
    border-radius: 6px;
    cursor: pointer;
    transition: background 0.3s;
  }

  .nav-buttons button:hover {
    background-color: #144766;
  }

  .sidebar {
    position: fixed;
    left: 0;
    top: 0;
    width: 220px;
    height: 100%;
    background-color: rgba(41, 128, 185, 0.85);
    backdrop-filter: blur(6px);
    color: white;
    padding: 20px;
    z-index: 1000;
    transform: translateX(0);
    transition: transform 0.3s ease;
  }

  .sidebar.collapsed {
    transform: translateX(-100%);
  }

  .sidebar h3 {
    margin-bottom: 20px;
  }

  .sidebar a {
    color: #ecf0f1;
    display: block;
    margin-bottom: 10px;
    text-decoration: none;
  }

  .sidebar button {
    margin-top: 20px;
    padding: 8px 14px;
    border: none;
    background-color: #c0392b;
    color: white;
    border-radius: 6px;
    cursor: pointer;
  }

  .sidebar button:hover {
    background-color: #a93226;
  }

  .main-content {
  padding: 20px;
  background-color: #f0f2f5;
  transition: margin-left 0.3s ease;
  padding-left: 240px; /* give room for sidebar */
  min-height: 100vh;
  display: flex;
  justify-content: center;
  align-items: flex-start;
}


  .toggle-sidebar {
    font-size: 20px;
    background: none;
    border: none;
    color: white;
    cursor: pointer;
  }

  .form-group {
    margin-bottom: 15px;
  }

  .form-group input,
  .form-group textarea,
  .form-group select {
    width: 100%;
    padding: 8px 10px;
    border: 1px solid #ccc;
    border-radius: 6px;
  }
</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kesatuan Sekerja KESPA</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; margin: 0; padding: 0; }
        header, nav, footer { background: #004466; color: #fff; padding: 1em; text-align: center; }
        nav a { color: white; margin: 0 15px; text-decoration: none; }
        section { padding: 2em; }
         .form-group {
    margin-bottom: 15px;
  }

  .form-group input,
  .form-group textarea,
  .form-group select {
    width: 100%;
    padding: 8px 10px;
    border: 1px solid #ccc;
    border-radius: 6px;
  }
        label, input, textarea { display: block; width: 100%; }
        input, textarea { padding: 0.5em; }
        button { padding: 0.5em 1em; background-color: #004466; color: #fff; border: none; }
        .media-container { display: flex; flex-wrap: wrap; gap: 1em; }
        .media-container img, .media-container video { max-width: 100%; width: 300px; }
    </style>
</head>
<body>

<header>
    <h1>Kesatuan Kebangsaan Pekerja Pekerja Pengawal Keselamatan Semenanjung Malaysia (KESPA)</h1>
    <p>Melindungi Hak dan Kebajikan Pekerja</p>
    <p>"Berani Berubah Demi Masa Depan Yang Lebih Baik"</p>
</header>

<nav>
    <a href="kespadashboard.php">Kembali ke Menu Utama</a>
</nav>

    <section id="aduan">
	
    <h2>Aduan</h2>
    <form>
        <div class="form-group">
            <label>Nama:</label>
            <input type="text" name="nama" required>
          </div>
          <div class="form-group">
            <label>No. Telefon :</label>
            <input type="text" name="noTelefon" required>
          </div>
          <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" required>
          </div>
          <div class="form-group">
            <label>Aduan :</label>
            <input type="text" name="aduan" required>
          </div>
		  
		  <button type="submit" name="submit_register" >Hantar</button>
		  
    </form>
</section>


<footer>
    <p>&copy; 2025 Kesatuan Sekerja KESPA. Semua Hak Terpelihara.</p>
</footer>
</body>
</html>