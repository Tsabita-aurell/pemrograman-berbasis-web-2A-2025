<?php
$artikel = [
  [
    "id" => 1,
    "judul" => "Belajar Mandiri Saat Kuliah",
    "tanggal" => "2023-09-15",
    "gambar" => "images/belajar.png",
    "refleksi" => "Belajar mandiri mengajarkan kita disiplin dan rasa tanggung jawab terhadap proses sendiri.",
    "kutipan" => "Pendidikan bukanlah persiapan untuk hidup; pendidikan adalah hidup itu sendiri.",
    "referensi" => "https://www.education.com"
  ],
  [
    "id" => 2,
    "judul" => "Mengembangkan Website Pertama",
    "tanggal" => "2023-11-01",
    "gambar" => "images/web.png",
    "refleksi" => "Pengalaman mengembangkan website pertama kali sangat menantang namun menyenangkan.",
    "kutipan" => "Jangan takut mencoba. Hal besar berawal dari langkah kecil.",
    "referensi" => "https://developer.mozilla.org"
  ],
  [
    "id" => 3,
    "judul" => "Menikmati Proses Kuliah",
    "tanggal" => "2024-02-20",
    "gambar" => "images/kuliah.png",
    "refleksi" => "Kuliah bukan hanya tentang nilai, tapi proses, relasi, dan pengalaman.",
    "kutipan" => "Sukses adalah perjalanan, bukan tujuan akhir.",
    "referensi" => "https://www.studyusa.com/id/article/15-tips-cara-menikmati-kuliah-dan-mempersiapkan-karir-anda"
  ],
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Daftar Artikel Blog</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      background-color: #f3f4f6;
      color: #333;
      font-family: Arial, sans-serif;
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
      margin: 40px auto;
      background-color: white;
      padding: 24px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    h1 {
      font-size: 24px;
      font-weight: bold;
      text-align: center;
      margin-bottom: 24px;
    }

    ul {
      list-style: none;
      padding: 0;
    }

    li {
      padding: 16px;
      border: 1px solid #ddd;
      border-radius: 6px;
      margin-bottom: 12px;
      background-color: white;
      transition: background-color 0.2s;
    }

    li:hover {
      background-color: #f9fafb;
    }

    li a {
      color: #2563eb;
      font-size: 18px;
      font-weight: bold;
      text-decoration: none;
    }

    li a:hover {
      text-decoration: underline;
    }

    .tanggal {
      font-size: 14px;
      color: #666;
      margin-top: 4px;
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

<!-- Konten Utama -->
<div class="container">
  <h1>Daftar Artikel Blog</h1>
  <ul>
    <?php foreach ($artikel as $a): ?>
      <li>
        <a href="detail_artikel.php?id=<?= $a['id'] ?>"><?= $a['judul'] ?></a>
        <div class="tanggal"><?= date("d M Y", strtotime($a['tanggal'])) ?></div>
      </li>
    <?php endforeach; ?>
  </ul>
</div>

</body>
</html>
