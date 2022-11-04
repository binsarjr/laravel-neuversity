<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Edit Dosen</h1>
    <a href="/dosen">Kembali</a>
    <form method="POST">
        @csrf
        @method('PUT')
        <div>
            <label>nip</label>
            <input type="text" name="nip" value="{{ $dosen->nip }}">
        </div>
        <div>
            <label>nama</label>
            <input type="text" name="nama" value="{{ $dosen->nama }}">
        </div>
        <div>
            <label>kelamin</label>
            <select name="kelamin">
                <option value="L" {{ $dosen->kelamin === 'L' ? 'selected' : '' }}>Laki-Laki</option>
                <option value="P" {{ $dosen->kelamin === 'P' ? 'selected' : '' }}>Perempuan</option>
            </select>
        </div>
        <div>
            <label>Status Menikah</label>
            <select name="sudah_menikah">
                <option value="1" {{ $dosen->sudah_menikah ? 'selected' : '' }}>Sudah Menikah</option>
                <option value="0" {{ !$dosen->sudah_menikah ? 'selected' : '' }}>Belum Menikah</option>
            </select>
        </div>
        <div>
            <label>alamat</label>
            <textarea name="alamat">{{ $dosen->alamat }}</textarea>
        </div>
        <button>update data</button>
    </form>
</body>

</html>
