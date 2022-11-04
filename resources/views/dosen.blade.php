<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>{{ $title }}</h1>
    <a href="/dosen/create" class="">Tambah Dosen</a>
    <form action="">
        <input type="text" name="q" placeholder="Cari dosen">
    </form>

    <ul>
        @foreach ($dosen as $dosen)
            <li>
                <h2>{{ $dosen->nama }} - {{ $dosen->status_menikah }}</h2>
                <a href="/dosen/{{ $dosen->id }}">Edit</a>
                <a href="/dosen/{{ $dosen->id }}/hapus">Hapus</a>
            </li>
        @endforeach
    </ul>

</body>

</html>
