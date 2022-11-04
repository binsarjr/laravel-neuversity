<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Tambah Dosen</h1>
    <a href="/dosen">Kembali</a>
    <form method="POST">
        @csrf
        <div>
            <label>nip</label>
            <input type="text" name="nip">
        </div>
        <div>
            <label>nama</label>
            <input type="text" name="nama">
        </div>
        <div>
            <label>kelamin</label>
            <select name="kelamin">
                <option selected disabled>Pilih kelamin</option>
                <option value="L">Laki-Laki</option>
                <option value="P">Perempuan</option>
            </select>
        </div>
        <div>
            <label>Status Menikah</label>
            <select name="sudah_menikah">
                <option selected disabled>Pilih Status Menikah</option>
                <option value="1">Sudah Menikah</option>
                <option value="0">Belum Menikah</option>
            </select>
        </div>
        <div>
            <label>alamat</label>
            <textarea name="alamat"></textarea>
        </div>
        <button>Tambah data</button>
    </form>
</body>

</html>
