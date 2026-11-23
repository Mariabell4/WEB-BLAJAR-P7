<?php
$errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $judul = trim($_POST['judul'] ?? '');
  $tahun = trim($_POST['tahun'] ?? '');
  if ($judul === '') $errors[] = 'Judul wajib diisi';
  if (!ctype_digit($tahun) || $tahun < 1900 || $tahun > date('Y')) $errors[] = 'Tahun harus angka 1900–' . date('Y');
  if (!$errors) echo "<p>Tersimpan: " . htmlspecialchars($judul) . "</p>";
}
foreach ($errors as $e) echo "<p style='color:red'>$e</p>";
?>
<form mezz"""""""""""""""                                             thod="post">
  <input name="judul" placeholder="Judul" value="<?= htmlspecialchars($_POST['judul'] ?? '') ?>">
  <input name="pengarang" placeholder="Pengarang" value="<?= htmlspecialchars($_POST['pengarang'] ?? '') ?>">
  <input name="tahun" placeholder="Tahun" value="<?= htmlspecialchars($_POST['tahun'] ?? '') ?>">
  <input name="email" placeholder="Email" value="<?= htmlspecialchars($_POST['email'] ?? '') ?>">
  <button>Simpan</button>
</form>
