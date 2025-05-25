<?php
$artikel = [
  1 => [
    "judul" => "Belajar Mandiri Saat Kuliah",
    "tanggal" => "2023-09-15",
    "gambar" => "_Driving Digital Success Through Social Media Marketing_.jpeg",
    "refleksi" => "Belajar mandiri mengajarkan kita disiplin dan rasa tanggung jawab terhadap proses sendiri.",
    "referensi" => "https://www.education.com"
  ],
  2 => [
    "judul" => "Mengembangkan Website Pertama",
    "tanggal" => "2023-11-01",
    "gambar" => "download (1).jpeg",
    "refleksi" => "Pengalaman mengembangkan website pertama kali sangat menantang namun menyenangkan.",
    "referensi" => "https://developer.mozilla.org"
  ],
  3 => [
    "judul" => "Menikmati Proses Kuliah",
    "tanggal" => "2024-02-20",
    "gambar" => "Premium Vector _ Organic flat people on business training illustration.jpeg",
    "refleksi" => "Kuliah bukan hanya tentang nilai, tapi proses, relasi, dan pengalaman.",
    "referensi" => "https://www.studyusa.com/id/article/15-tips-cara-menikmati-kuliah-dan-mempersiapkan-karir-anda"
  ]
];

$kutipan = [
  "Kerja keras mengalahkan bakat saat bakat tidak bekerja keras.",
  "Sukses bukan milik orang pintar, tapi milik orang yang mau berusaha.",
  "Jangan menunggu waktu yang tepat, karena waktu tidak pernah benar-benar tepat.",
  "Langkah kecil hari ini bisa jadi lompatan besar di masa depan.",
  "Gagal adalah bumbu yang memberi rasa pada keberhasilan."
];

$id = $_GET['id'] ?? null;

if (!$id || !isset($artikel[$id])) {
  echo "<h2>Artikel tidak ditemukan</h2>";
  exit;
}

$data = $artikel[$id];
$motivasi = $kutipan[rand(0, count($kutipan) - 1)];
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title><?= $data['judul'] ?></title>
  <style>
    body {
      background-color: #f3f4f6;
      color: #333;
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    nav {
      background-color: #2563eb;
      color: white;
      padding: 16px;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }

    .nav-container {
      max-width: 1100px;
      margin: 0 auto;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .nav-title {
      font-size: 24px;
      font-weight: bold;
      letter-spacing: 1px;
    }

    .nav-links a {
      margin-left: 24px;
      color: white;
      text-decoration: none;
      font-size: 16px;
    }

    .nav-links a:hover {
      text-decoration: underline;
      color: #e9d5ff;
    }

    .container {
      max-width: 720px;
      background-color: white;
      margin: 40px auto;
      padding: 24px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    h1 {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .tanggal {
      font-size: 14px;
      color: #777;
      margin-bottom: 20px;
    }

    .gambar-artikel {
      width: 100%;
      height: 300px;
      object-fit: cover;
      border-radius: 8px;
      margin-bottom: 20px;
    }

    .refleksi {
      font-size: 16px;
      margin-bottom: 20px;
    }

    blockquote {
      border-left: 4px solid #2563eb;
      padding-left: 12px;
      font-style: italic;
      color: #2563eb;
      margin-bottom: 20px;
    }

    .referensi {
      font-size: 14px;
    }

    .referensi a {
      color: #2563eb;
      text-decoration: underline;
    }

    .tombol-kembali {
      display: inline-block;
      background-color: #2563eb;
      color: white;
      padding: 10px 20px;
      border-radius: 6px;
      text-decoration: none;
      margin-top: 20px;
      box-shadow: 0 2px 4px rgba(0,0,0,0.2);
    }

    .tombol-kembali:hover {
      background-color: #1e40af;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav>
  <div class="nav-container">
    <div class="nav-title">Profil Mahasiswa</div>
    <div class="nav-links">
      <a href="halaman 1.php">Profil</a>
      <a href="halaman 2.php">Timeline</a>
      <a href="daftar artikel.php">Blog</a>
    </div>
  </div>
</nav>

<!-- Konten Artikel -->
<div class="container">
  <h1><?= $data['judul'] ?></h1>
  <p class="tanggal"><?= date("d M Y", strtotime($data['tanggal'])) ?></p>

  <img src="<?= $data['gambar'] ?>" alt="Ilustrasi Artikel" class="gambar-artikel">

  <p class="refleksi"><?= $data['refleksi'] ?></p>

  <blockquote>"<?= $motivasi ?>"</blockquote>

  <?php if ($data['referensi']): ?>
    <p class="referensi">
      Referensi: <a href="<?= $data['referensi'] ?>" target="_blank"><?= $data['referensi'] ?></a>
    </p>
  <?php endif; ?>

  <a href="daftar artikel.php" class="tombol-kembali">← Kembali ke Daftar</a>
</div>

</body>
</html>
