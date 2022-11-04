@extends('layout.app')

@section('title', 'Edit Dosen')

@section('content')
    <div class="columns">
        <div class="is-10">
            <a href="/dosen" class="button is-small is-danger is-light">Kembali</a>
            <form method="POST">
                @csrf
                @method('PUT')
                <div class="field">
                    <label class="label">nip</label>
                    <div class="control">
                        <input class="input" type="text" name="nip" value="{{ $dosen->nip }}">
                    </div>
                </div>
                <div class="field">
                    <label class="label">nama</label>
                    <div class="control">
                        <input class="input" type="text" name="nama" value="{{ $dosen->nama }}">
                    </div>
                </div>
                <div class="field">
                    <label class="label">kelamin</label>
                    <div class="control">
                        <select class="select" name="kelamin">
                            <option value="L" {{ $dosen->kelamin === 'L' ? 'selected' : '' }}>Laki-Laki</option>
                            <option value="P" {{ $dosen->kelamin === 'P' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="field">
                    <label class="label">Status Menikah</label>
                    <div class="control">
                        <select class="select" name="sudah_menikah">
                            <option value="1" {{ $dosen->sudah_menikah ? 'selected' : '' }}>Sudah Menikah</option>
                            <option value="0" {{ !$dosen->sudah_menikah ? 'selected' : '' }}>Belum Menikah</option>
                        </select>
                    </div>
                </div>
                <div class="field">
                    <label class="label">alamat</label>
                    <div class="control">
                        <textarea class="textarea" name="alamat">{{ $dosen->alamat }}</textarea>
                    </div>
                </div>
                <button class="button is-success is-light is-small">update data</button>
            </form>
        </div>
    </div>

@endsection
