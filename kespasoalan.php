<!DOCTYPE html>
<html lang="ms">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Kesatuan Sekerja KESPA</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      line-height: 1.6;
      margin: 0;
      padding: 0;
      background: #f9f9f9;
    }

    /* Modern Header with Nav */
    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #004466;
      color: white;
      padding: 1em 2em;
    }

    .navbar .logo {
      font-size: 1.3em;
      font-weight: bold;
    }

    .navbar nav a {
      color: white;
      text-decoration: none;
      margin-left: 20px;
      font-weight: bold;
      transition: color 0.3s ease;
    }

    .navbar nav a:hover {
      color: #ffa500;
    }

    /* Banner section */
		.banner {
		  background-image: url('gambar1.jpg'); /* replace with correct path */
		  background-size: cover; /* covers full width */
		  background-repeat: no-repeat;
		  background-position: center;
		  height: 700px; /* match actual image height */
		  width: 100%;
		  display: flex;
		  flex-direction: column;
		  justify-content: center;
		  align-items: center;
		  color: white;
		  text-align: center;
		  position: relative;
		}

		/* Text shadows for visibility */
		.banner h1 {
		  font-size: 2.5em;
		  text-shadow: 2px 2px 4px rgba(0,0,0,0.8);
		  margin: 0;
		}

		.banner p {
		  font-size: 1.2em;
		  text-shadow: 2px 2px 6px rgba(0,0,0,0.6);
		  margin-top: 0.5em;
		}


    section {
      padding: 2em;
      background: white;
    }

    .divider {
      border-top: 2px solid #ccc;
      margin: 2em 0;
    }

    .form-group {
      margin-bottom: 1em;
    }

    label, input, textarea {
      display: block;
      width: 100%;
    }

    input, textarea {
      padding: 0.5em;
    }

    button {
      padding: 0.5em 1em;
      background-color: #004466;
      color: #fff;
      border: none;
    }

    .media-container {
      display: flex;
      flex-wrap: wrap;
      gap: 1em;
    }

    .media-container img,
    .media-container video {
      max-width: 100%;
      width: 300px;
    }

    .gallery {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 1em;
    }

    .gallery img {
      width: 100%;
      height: 200px;
      object-fit: cover;
      border: 2px solid #ccc;
      border-radius: 8px;
    }

    footer {
      background: #004466;
      color: #fff;
      text-align: center;
      padding: 1em;
      margin-top: 2em;
    }
	
	/* Navbar container */
.navbar {
  background-color: #004466;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 8px 20px;
  position: relative;
}

.navbar .logo {
  height: 50px;
}

/* Hamburger button */
.hamburger {
  display: none;
  font-size: 26px;
  background: none;
  color: white;
  border: none;
  cursor: pointer;
}

/* Desktop nav */
.nav-menu {
  display: flex;
  align-items: center;
  gap: 18px;
  transition: max-height 0.3s ease;
}

/* Links & dropdown button */
.nav-link,
.dropbtn {
  background: none;
  color: white;
  text-decoration: none;
  font-size: 15px;
  font-weight: 500;
  padding: 8px 14px;
  border: none;
  cursor: pointer;
  border-radius: 6px;
  transition: background 0.3s ease;
}

.nav-link:hover,
.dropbtn:hover {
  background-color: rgba(255,255,255,0.2);
}

/* Dropdown */
.dropdown {
  position: relative;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #006699;
  min-width: 220px;
  box-shadow: 0 8px 16px rgba(0,0,0,0.2);
  border-radius: 6px;
  overflow: hidden;
  margin-top: 6px;
  z-index: 1000;
  animation: fadeIn 0.2s ease forwards;
}

.dropdown-content a {
  color: white;
  padding: 12px 16px;
  display: block;
  text-decoration: none;
  font-size: 15px;
  transition: background 0.3s;
}

.dropdown-content a:hover {
  background-color: #004466;
}

/* Show dropdown on hover (desktop only) */
@media (min-width: 769px) {
  .dropdown:hover .dropdown-content {
    display: block;
  }
}

@keyframes fadeIn {
  from {opacity:0; transform: translateY(-5px);}
  to {opacity:1; transform: translateY(0);}
}

/* Mobile */
@media (max-width: 768px) {
  .hamburger {
    display: block;
  }

  .nav-menu {
    position: absolute;
    top: 60px;
    right: 0;
    background-color: #004466;
    flex-direction: column;
    width: 100%;
    max-height: 0;
    overflow: hidden;
    padding: 0;
  }

  .nav-menu.show {
    max-height: 600px;
    transition: max-height 0.4s ease;
  }

  .dropdown-content {
    position: static;
    min-width: 100%;
    box-shadow: none;
    margin-top: 0;
  }

  /* We disable hover behavior on mobile */
  .dropdown:hover .dropdown-content {
    display: none;
  }

  .dropdown.open .dropdown-content {
    display: block;
  }
}

/*footer section*/

.footer-top {
  background-color: #002233; /* dark background */
  color: #fff;
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
  padding: 30px 20px;
  gap: 20px;
  margin: 0; /* ensure no gap above or below */
  border: none; /* remove any border */
}

.footer-top .footer-col {
  flex: 1 1 250px;
  min-width: 250px;
}

.footer-top h3 {
  margin-bottom: 15px;
  font-size: 18px;
  border-bottom: 2px solid #006699;
  display: inline-block;
  padding-bottom: 5px;
}

.footer-top p {
  font-size: 14px;
  line-height: 1.6;
}

.footer-top ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

.footer-top ul li {
  margin-bottom: 8px;
}

.footer-top ul li a {
  color: #fff;
  text-decoration: none;
  font-size: 14px;
  transition: color 0.3s;
}

.footer-top ul li a:hover {
  color: #66ccff;
}

/* Social icons in a row */
.social-icons {
  display: flex;
  gap: 12px;
  align-items: center;
  margin-top: 10px;
}

.social-icons img {
  width: 32px; /* icon size */
  height: 32px;
  display: block;
  transition: transform 0.3s ease;
}

.social-icons a:hover img {
  transform: scale(1.2);
}

/* Responsive stacking on mobile */
@media (max-width: 768px) {
  .footer-top {
    flex-direction: column;
    text-align: center;
    align-items: center;
  }
  .footer-top .footer-col {
    min-width: 100%;
  }
  .social-icons {
    justify-content: center;
  }
}

/* Make sure footer below blends seamlessly */
footer {
  background-color: #002233; /* same dark background */
  color: #fff;
  text-align: center;
  padding: 10px;
  margin: 0;
  border: none;
}

/*back to top btn*/
#backToTop {
  position: fixed;
  bottom: 30px;
  right: 30px;
  z-index: 999;
  background-color: #006699;
  color: #fff;
  border: none;
  border-radius: 50%;
  width: 45px;
  height: 45px;
  font-size: 20px;
  cursor: pointer;
  display: none; /* hidden by default */
  align-items: center;
  justify-content: center;
  box-shadow: 0 4px 6px rgba(0,0,0,0.2);
  transition: background 0.3s, transform 0.3s;
}

#backToTop:hover {
  background-color: #004466;
  transform: scale(1.1);
}

  </style>
</head>
<body>

	<script>
function toggleMenu() {
  document.getElementById('navMenu').classList.toggle('show');
}

function toggleDropdown(event) {
  // Prevent link navigation
  event.preventDefault();

  // Close other dropdowns
  document.querySelectorAll('.dropdown').forEach(function(drop) {
    if (drop !== event.target.parentElement) {
      drop.classList.remove('open');
    }
  });

  // Toggle current dropdown
  event.target.parentElement.classList.toggle('open');
}
</script>


<!-- New Header -->
<header class="navbar">
  <img src="ilologo.jpg" alt="KESPA Logo" class="logo">

  <!-- Hamburger for mobile -->
  <button class="hamburger" onclick="toggleMenu()">☰</button>

  <nav class="nav-menu" id="navMenu">
    <div class="dropdown">
      <button class="dropbtn" onclick="toggleDropdown(event)">Menu Utama ▾</button>
      <div class="dropdown-content">
        <a href="kespadashboard.php">Halaman Utama</a>
        <a href="kespapengenalan.php">Pengenalan</a>
        <a href="kespasoalan.php">Soalan</a>
      </div>
    </div>
    <a href="kespaaduan.php" class="nav-link">Aduan</a>
    <a href="kespapendaftaran.php" class="nav-link">Pendaftaran</a>
  </nav>
</header>

	<section>
		<h1>Soalan Lazim</h1>
	</section>
	
	<section>
		<h2>KESPA</h2>
		<ul>
			<li>Jawapan</li>
		</ul>
	</section>
	
	<section>
		<h2>JTK & JPP</h2>
		<ul>
			<li>Jawapan</li>
		</ul>
	</section>
	
	<section>
		<h2>KIRAAN GAJI AKTA KESPA</h2>
		<ul>
			<li>Jawapan</li>
		</ul>
	</section>

<section class="footer-top">
  <div class="footer-col">
    <h3>Pautan Lain</h3>
    <ul>
      <li><a href="https://www.mohr.gov.my/" target="_blank">Kementerian Sumber Manusia</a></li>
      <li><a href="https://www.jtk.gov.my/" target="_blank">Jabatan Tenaga Kerja</a></li>
      <li><a href="https://www.perkeso.gov.my/" target="_blank">PERKESO</a></li>
    </ul>
  </div>

  <div class="footer-col">
    <h3>Alamat KESPA</h3>
    <p>
      Kesatuan Kebangsaan Pekerja-Pekerja<br>
      Pengawal Keselamatan Semenanjung Malaysia (KESPA)<br>
      No. 123, Jalan Utama,<br>
      43000 Kajang, Selangor, Malaysia.
    </p>
  </div>

  <div class="footer-col">
    <h3>Media Sosial</h3>
    <div class="social-icons">
      <a href="https://wa.me/60123456789" target="_blank" aria-label="WhatsApp">
        <img src="whatsapp-icon.png" alt="WhatsApp">
      </a>
      <a href="https://facebook.com/yourpage" target="_blank" aria-label="Facebook">
        <img src="facebook-icon.png" alt="Facebook">
      </a>
      <a href="https://instagram.com/yourpage" target="_blank" aria-label="Instagram">
        <img src="instagram-icon.png" alt="Instagram">
      </a>
    </div>
  </div>
</section>

<button id="backToTop" title="Kembali ke Atas">↑</button>
<script>
// Show or hide button on scroll
window.addEventListener('scroll', function() {
  const btn = document.getElementById('backToTop');
  if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
    btn.style.display = "flex"; // use flex to center the arrow
  } else {
    btn.style.display = "none";
  }
});

// Smooth scroll to top
document.getElementById('backToTop').addEventListener('click', function() {
  window.scrollTo({
    top: 0,
    behavior: 'smooth'
  });
});
</script>

<footer>
  <p>&copy; 2025 Kesatuan Sekerja KESPA. Semua Hak Terpelihara.</p>
</footer>

</body>
</html>
