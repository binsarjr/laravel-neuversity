@extends('layout.app')

@section('title', 'Tambah Dosen')
@section('content')
    <div class="columns">
        <div class="is-10">
            <a href="/dosen" class="button is-small is-danger is-light">Kembali</a>
            <form method="POST">
                @csrf
                <div class="field">
                    <label class="label">NIP</label>
                    <div class="control">
                        <input type="text" name="nip" class="input">
                    </div>
                </div>
                <div class="field">
                    <label class="label">nama</label>
                    <div class="control">
                        <input type="text" name="nama" class="input">
                    </div>
                </div>
                <div class="field">
                    <label class="label">kelamin</label>
                    <div class="control">
                        <select name="kelamin" class="select">
                            <option selected disabled>Pilih kelamin</option>
                            <option value="L">Laki-Laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="field">
                    <label class="label">Status Menikah</label>
                    <div class="control">
                        <select name="sudah_menikah" class="select">
                            <option selected disabled>Pilih Status Menikah</option>
                            <option value="1">Sudah Menikah</option>
                            <option value="0">Belum Menikah</option>
                        </select>
                    </div>
                </div>
                <div class="field">
                    <label class="label">alamat</label>
                    <div class="control">
                        <textarea name="alamat" class="textarea"></textarea>
                    </div>
                </div>
                <button class="button is-success is-light is-small">Tambah data</button>
            </form>
        </div>

    </div>
@endsection
