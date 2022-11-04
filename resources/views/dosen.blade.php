@extends('layout.app')

@section('title', $title)

@section('content')
    <a href="/dosen/create" class="button is-success is-light is-small">Tambah Dosen</a>
    <form action="">
        <input type="text" name="q" placeholder="Cari dosen" class="input mt-5" autofocus>
    </form>

    <table class="table">
        <caption>Tabel Dosen</caption>
        <thead>
            <tr>
                <th>No.</th>
                <th>NIP</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dosen as $dosen)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $dosen->nip }}</td>
                    <td>{{ $dosen->nama }}</td>
                    <td>{{ $dosen->kelamin == 'L' ? 'Laki-Laki' : 'Perempuan' }}</td>
                    <td>{{ $dosen->alamat }}</td>
                    <td>{{ $dosen->sudah_menikah ? 'Sudah Menikah' : 'Belum Menikah' }}</td>
                    <td>
                        <a href="/dosen/{{ $dosen->id }}" class="button is-small is-warning">Edit</a>
                        <a href="/dosen/{{ $dosen->id }}/hapus" class="button is-small is-danger">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection


@push('styles')
    @vite(['resources/css/dosen.css'])
@endpush


@push('scripts')
    @vite(['resources/js/dosen.js'])
@endpush
