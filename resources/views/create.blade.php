<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Sepatu</title>
</head>
<body>
    <h1>Tambah Sepatu</h1>

    <form action="{{ route('sepatu.store') }}" method="POST">
        @csrf
        <label for="merek">Merek:</label>
        <input type="text" name="merek" required><br><br>

        <label for="ukuran">Ukuran:</label>
        <input type="text" name="ukuran" required><br><br>

        <label for="harga">Harga:</label>
        <input type="number" name="harga" required min="0"><br><br>

        <label for="stok">Stok:</label>
        <input type="number" name="stok" required min="0"><br><br>

        <label for="deskripsi">Deskripsi:</label><br>
        <textarea name="deskripsi"></textarea><br><br>

        <button type="submit">Simpan</button>
    </form>

    <a href="{{ route('sepatus.index') }}">Kembali ke Daftar Sepatu</a>
</body>
</html>
