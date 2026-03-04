<!DOCTYPE html>
<html>
<head>
    <title>Tambah Tugas</title>
    <link rel="stylesheet" href="css/tambahtugas.css">
</head>
<body>

<div class="container-form">
    <h1>Tambah Tugas Baru</h1>
    <p>Lengkapi detail di bawah ini untuk mengatur tugas Anda.</p>

    <form action="proses/prosestambahtugas.php" method="POST" class="form-card">

        <label>Nama Tugas</label>
        <input type="text" name="title" placeholder="Contoh: Belanja Bulanan" required>

        <label>Mode Tugas</label>
        <select name="mode" required>
            <option value="individu">Mode Individu (Pribadi)</option>
            <option value="household">Mode Rumah Tangga</option>
        </select>

        <label>Tanggal</label>
        <input type="date" name="due_date" required>

        <label>Waktu</label>
        <input type="time" name="due_time">

        <label>Deskripsi (Opsional)</label>
        <textarea name="description" rows="4" placeholder="Tambahkan detail tugas..."></textarea>

        <label>Kuadran Tugas</label>
        <select name="status" required>
            <option value="1">Kuadran 1 (Penting & Mendesak)</option>
            <option value="2">Kuadran 2 (Penting & Tidak Mendesak)</option>
            <option value="3">Kuadran 3 (Tidak Penting & Mendesak)</option>
            <option value="4">Kuadran 4 (Tidak Penting & Tidak Mendesak)</option>
        </select>

        <div class="form-buttons">
            <button type="submit" class="btn-primary">Simpan Tugas</button>
            <a href="dashboardpribadi.php" class="btn-secondary">Batal</a>
        </div>

    </form>
</div>

</body>
</html>