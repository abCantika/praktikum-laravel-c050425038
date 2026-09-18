<h1>Tambah Mata Kuliah</h1>
<form action="/matakuliah" method="POST">
    @csrf
    <label>Kode MK:</label><br>
    <input type="text" name="kode_mk" required><br><br>

    <label>Nama MK:</label><br>
    <input type="text" name="nama_mk" required><br><br>

    <label>SKS:</label><br>
    <input type="number" name="sks" required><br><br>

    <label>Semester:</label><br>
    <input type="number" name="semester" required><br><br>

    <button type="submit">Simpan</button>
</form>