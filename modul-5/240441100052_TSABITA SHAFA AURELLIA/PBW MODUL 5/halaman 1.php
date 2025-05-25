<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Profil Interaktif Mahasiswa</title>
  <style>
    body {
      background-color: #f3f4f6;
      color: #1f2937;
      font-family: Arial, sans-serif;
      min-height: 100vh;
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


    main {
      max-width: 900px;
      margin: 40px auto;
      padding: 0 24px;
    }

    section {
      background-color: white;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.05);
      padding: 24px;
      margin-bottom: 32px;
    }

    h2 {
      font-size: 20px;
      font-weight: bold;
      text-align: center;
      margin-bottom: 16px;
    }

    table {
      width: 100%;
      font-size: 14px;
      border-collapse: collapse;
    }

    td {
      padding: 12px 8px;
    }

    tr:nth-child(even) {
      background-color: #f9fafb;
    }

    tr:hover {
      background-color: #f1f5f9;
    }

    .font-bold {
      font-weight: bold;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      margin-bottom: 6px;
      font-weight: 600;
    }

    input[type="text"],
    textarea,
    select {
      width: 100%;
      padding: 10px;
      border: 1px solid #d1d5db;
      border-radius: 6px;
      font-size: 14px;
    }

    textarea {
      resize: vertical;
    }

    .checkbox-group,
    .radio-group {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
    }

    .checkbox-group label,
    .radio-group label {
      display: flex;
      align-items: center;
      gap: 4px;
    }

    .submit-btn {
      background-color: #2563eb;
      color: white;
      padding: 10px 24px;
      border: none;
      border-radius: 6px;
      font-weight: 600;
      cursor: pointer;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
      transition: 0.3s;
    }

    .submit-btn:hover {
      background-color:;
    }

    .result-box {
      background-color: #f1f5f9;
      padding: 16px;
      border: 1px solid #d1d5db;
      border-radius: 6px;
      margin-bottom: 16px;
    }

    .alert {
      padding: 12px;
      border-radius: 6px;
      margin-bottom: 16px;
      font-weight: 500;
    }

    .alert-error {
      background-color: #fee2e2;
      color: #b91c1c;
      border: 1px solid #fca5a5;
    }

    .alert-success {
      background-color: #d1fae5;
      color: #065f46;
      border: 1px solid #6ee7b7;
    }

    .alert-note {
      background-color: #eff6ff;
      color: #1d4ed8;
      border: 1px solid #93c5fd;
    }

    .text-sm {
      font-size: 14px;
      line-height: 1.6;
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

<!-- Konten -->
<main>
  <!-- Info Mahasiswa -->
  <section>
    <h2>Data Diri Mahasiswa</h2>
    <table>
      <tr><td class="font-bold">Nama</td><td>Tsabita Shafa Aurellia</td></tr>
      <tr><td class="font-bold">NIM</td><td>240441100052</td></tr>
      <tr><td class="font-bold">Tempat, Tanggal Lahir</td><td>Lamongan, 3 Februari 2006</td></tr>
      <tr><td class="font-bold">Email</td><td>aurelliatsabitashafa@gmail.com</td></tr>
      <tr><td class="font-bold">Nomor HP</td><td>081333400296</td></tr>
    </table>
  </section>  

  <!-- Formulir -->
  <section>
    <h2>Profil Interaktif Mahasiswa</h2>

    <?php
    $error = '';
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
        $bahasa = array_filter($_POST['bahasa']);
        $pengalaman = trim($_POST['pengalaman']);
        $software = isset($_POST['software']) ? $_POST['software'] : [];
        $os = isset($_POST['os']) ? $_POST['os'] : '';
        $tingkat = trim($_POST['tingkat']);

        if (empty($bahasa) || empty($pengalaman) || empty($os) || empty($tingkat)) {
            $error = "Semua input wajib diisi!";
        } else {
            echo '<div class="result-box">';
            echo '<h3>Hasil Input</h3>';
            echo '<table>';
            echo '<tr><td class="font-bold">Bahasa Pemrograman</td><td>' . implode(', ', $bahasa) . '</td></tr>';
            echo '<tr><td class="font-bold">Pengalaman Proyek</td><td>' . htmlspecialchars($pengalaman) . '</td></tr>';
            echo '<tr><td class="font-bold">Software</td><td>' . (count($software) > 0 ? implode(', ', $software) : '-') . '</td></tr>';
            echo '<tr><td class="font-bold">Sistem Operasi</td><td>' . htmlspecialchars($os) . '</td></tr>';
            echo '<tr><td class="font-bold">Tingkat PHP</td><td>' . htmlspecialchars($tingkat) . '</td></tr>';
            echo '</table></div>';

            echo '<div class="result-box alert-note">';
            echo '<p class="text-sm">Anda menguasai bahasa: <strong>' . implode(', ', $bahasa) . '</strong>. ';
            echo 'Pengalaman proyek: <em>' . htmlspecialchars($pengalaman) . '</em>. ';
            echo 'Software: ' . (count($software) > 0 ? implode(', ', $software) : 'Tidak ada') . '. ';
            echo 'Sistem Operasi: <strong>' . htmlspecialchars($os) . '</strong>. ';
            echo 'Tingkat PHP: <strong>' . htmlspecialchars($tingkat) . '</strong>.</p>';
            echo '</div>';

            if (count($bahasa) > 2) {
                echo '<div class="alert alert-success">Anda cukup berpengalaman dalam pemrograman!</div>';
            }
        }
    }

    if ($error != '') {
        echo '<div class="alert alert-error">' . $error . '</div>';
    }
    ?>

    <form method="POST" action="">
      <div class="form-group">
        <label>Bahasa Pemrograman yang Dikuasai (maks. 3)</label>
        <input type="text" name="bahasa[]" required placeholder="Bahasa 1">
        <input type="text" name="bahasa[]" placeholder="Bahasa 2" style="margin-top: 8px;">
        <input type="text" name="bahasa[]" placeholder="Bahasa 3" style="margin-top: 8px;">
      </div>

      <div class="form-group">
        <label>Penjelasan Pengalaman Proyek</label>
        <textarea name="pengalaman" rows="4" required placeholder="Ceritakan pengalaman proyek Anda..."></textarea>
      </div>

      <div class="form-group">
        <label>Software yang Sering Digunakan</label>
        <div class="checkbox-group">
          <label><input type="checkbox" name="software[]" value="VS Code"> VS Code</label>
          <label><input type="checkbox" name="software[]" value="XAMPP"> XAMPP</label>
          <label><input type="checkbox" name="software[]" value="Git"> Git</label>
          <label><input type="checkbox" name="software[]" value="Figma"> Figma</label>
        </div>
      </div>

      <div class="form-group">
        <label>Sistem Operasi yang Digunakan</label>
        <div class="radio-group">
          <label><input type="radio" name="os" value="Windows" required> Windows</label>
          <label><input type="radio" name="os" value="Linux" required> Linux</label>
          <label><input type="radio" name="os" value="Mac" required> Mac</label>
        </div>
      </div>

      <div class="form-group">
        <label>Tingkat Penguasaan PHP</label>
        <select name="tingkat" required>
          <option value="">--Pilih--</option>
          <option value="Pemula">Pemula</option>
          <option value="Menengah">Menengah</option>
          <option value="Mahir">Mahir</option>
        </select>
      </div>

      <div class="form-group" style="text-align: center;">
        <button type="submit" name="submit" class="submit-btn">Kirim</button>
      </div>
    </form>
  </section>
</main>

</body>
</html>
