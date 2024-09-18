<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Sepatu</title>
</head>
<body>
    <h1>Daftar Sepatu</h1>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <a href="{{ route('sepatus.create') }}">Tambah Sepatu</a>

    <table border="1" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th>Merek</th>
                <th>Ukuran</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($sepatus as $sepatu)
            <tr>
                <td>{{ $sepatu->merek }}</td>
                <td>{{ $sepatu->ukuran }}</td>
                <td>{{ $sepatu->harga }}</td>
                <td>{{ $sepatu->stok }}</td>
                <td>{{ $sepatu->deskripsi }}</td>
                <td>
                    <a href="{{ route('sepatus.edit', $sepatu->id) }}">Edit</a>
                    <form action="{{ route('sepatus.destroy', $sepatu->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="7">Tidak ada data sepatu.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
