<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Timeline Pengalaman Kuliah</title>
  <style>
    body {
      background-color: #f3f4f6;
      color: #1f2937;
      font-family: sans-serif;
      margin: 0;
      padding: 0;
    }

    nav {
      background-color: #2563eb;
      color: white;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
      padding: 1rem 0;
    }

    .navbar-container {
      max-width: 960px;
      margin: 0 auto;
      padding: 0 1rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .navbar-title {
      font-size: 1.5rem;
      font-weight: bold;
    }

    .navbar-links a {
      margin-left: 1.5rem;
      color: white;
      text-decoration: none;
      transition: color 0.3s;
    }

    .navbar-links a:hover {
      text-decoration: underline;
      color: #ddd6fe;
    }

    .container {
      max-width: 720px;
      margin: 2rem auto;
      background-color: white;
      padding: 2rem;
      border-radius: 8px;
      box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    }

    h2 {
      text-align: center;
      font-size: 1.75rem;
      margin-bottom: 2rem;
    }

    .timeline {
      position: relative;
      border-left: 4px solid #2563eb;
      padding-left: 1.5rem;
    }

    .timeline-item {
      margin-bottom: 1.5rem;
      position: relative;
    }

    .timeline-item::before {
      content: '';
      position: absolute;
      left: -30px;
      top: 6px;
      width: 20px;
      height: 20px;
      background-color: #2563eb;
      border: 4px solid white;
      border-radius: 50%;
      z-index: 1;
    }

    .timeline-title {
      font-weight: bold;
      font-size: 1.125rem;
    }

    .timeline-desc {
      font-size: 0.875rem;
      color: #4b5563;
    }

    .button-group {
      text-align: center;
      margin-top: 2rem;
    }

    .button-group a {
      display: inline-block;
      background-color: #2563eb;
      color: white;
      padding: 0.5rem 1.25rem;
      border-radius: 6px;
      text-decoration: none;
      margin: 0 0.5rem;
      transition: background-color 0.3s;
    }

    .button-group a:hover {
      background-color: #1e40af;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav>
    <div class="navbar-container">
      <div class="navbar-title">Profil Mahasiswa</div>
      <div class="navbar-links">
        <a href="halaman 1.php">Profil</a>
        <a href="halaman 2.php">Timeline</a>
        <a href="daftar artikel.php">Blog</a>
      </div>
    </div>
  </nav>

  <!-- Container -->
  <div class="container">
    <h2>Timeline Pengalaman Kuliah</h2>
    <div class="timeline">
      <?php
        $pengalaman = [
          [
            "tahun" => "2024",
            "judul" => "Masuk Kuliah",
            "deskripsi" => "Mulai kuliah di jurusan Sistem Informasi. Bertemu teman baru dan adaptasi dengan lingkungan kampus."
          ],
          [
            "tahun" => "2025",
            "judul" => "Projek Web Pertama",
            "deskripsi" => "Mengerjakan proyek website tugas besar menggunakan python."
          ],
          [
            "tahun" => "2025",
            "judul" => "Projek Web kedua",
            "deskripsi" => "Mengerjakan proyek website tugas besar menggunakan HTML dan CSS."
          ],
          [
            "tahun" => "2025",
            "judul" => "Projek Web ketiga",
            "deskripsi" => "Mengerjakan proyek website tugas besar menggunakan PHP."
          ],
        ];

        foreach ($pengalaman as $item) {
          echo "<div class='timeline-item'>";
          echo "<div class='timeline-title'>{$item['tahun']} - {$item['judul']}</div>";
          echo "<div class='timeline-desc'>{$item['deskripsi']}</div>";
          echo "</div>";
        }
      ?>
    </div>

    <!-- Buttons -->
    <div class="button-group">
      <a href="halaman 1.php">Kembali ke Profil</a>
      <a href="daftar artikel.php">Ke Blog</a>
    </div>
  </div>

</body>
</html>
