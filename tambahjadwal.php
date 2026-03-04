<!DOCTYPE html>
<html>
<head>
    <title>Tambah Jadwal</title>
    <link rel="stylesheet" href="css/tambahjadwal.css">
</head>
<body>

<div class="container-form">
    <h1>Tambah Jadwal Baru</h1>
    <p>Lengkapi detail di bawah ini untuk mengatur jadwal Anda.</p>

    <form action="proses/prosestambahjadwal.php" method="POST" class="form-card">

        <label>Nama Jadwal</label>
        <input type="text" name="title" placeholder="Contoh: Rapat Keluarga" required>

        <label>Mode Jadwal</label>
        <select name="mode" required>
            <option value="individu">Mode Individu (Pribadi)</option>
            <option value="household">Mode Rumah Tangga</option>
        </select>

        <label>Tanggal</label>
        <input type="date" name="date" required>

        <label>Waktu</label>
        <input type="time" name="time">

        <div class="form-buttons">
            <button type="submit" class="btn-primary">Simpan Jadwal</button>
            <a href="dashboardpribadi.php" class="btn-secondary">Batal</a>
        </div>

    </form>
</div>

</body>
</html>