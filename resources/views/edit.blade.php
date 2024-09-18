<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Sepatu</title>
</head>
<body>
    <h1>Edit Sepatu</h1>

    <form action="{{ route('sepatus.update', $sepatu->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
        <label for="merek">Merek:</label>
        <input type="text" name="merek" value="{{ $sepatu->merek }}" required>
        </div>

        <div>
        <label for="ukuran">Ukuran:</label>
        <input type="text" name="ukuran" value="{{ $sepatu->ukuran }}" required>
        </div>

        <div>
        <label for="harga">Harga:</label>
        <input type="number" name="harga" value="{{ $sepatu->harga }}" required min="0">
        </div>

        <div>
        <label for="stok">Stok:</label>
        <input type="number" name="stok" value="{{ $sepatu->stok }}" required min="0">
        </div>

        <div>
        <label for="deskripsi">Deskripsi:</label><br>
        <textarea name="deskripsi">{{ $sepatu->deskripsi }}</textarea>
        </div>

        <button type="submit">Update</button>
    </form>

</body>
</html>
