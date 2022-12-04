@extends('main')

@section('content')

    <div class="container">
        <div class="card bg-white m-5">
            <div class="card-header d-flex justify-content-between">
                <h3>Tambah Data Karyawan</h3>
                <a href="{{ URL::previous() }}" class="btn btn-primary">
                    Kembali
                </a>
            </div>
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat">
                    </div>
                    <div class="mb-3">
                        <label for="no_hp" class="form-label">No Telepon</label>
                        <input type="number" class="form-control" id="no_hp">
                    </div>
                    <div class="mb-3">
                        <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                        <input type="text" class="form-control" id="tempat_lahir">
                    </div>
                    <div class="mb-3">
                        <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tanggal_lahir">
                    </div>
                    <div class="mb-3">
                        <label for="tanggal_lahir" class="form-label">Jenis Kelamin</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Laki-Laki
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                                Perempuan
                            </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-control">
                            <option value="" selected disabled>SELECT</option>
                            <option value="">AKTIF</option>
                            <option value="">NONAKTIF</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="jumlah_anak" class="form-label">Jumlah Anak</label>
                        <input type="number" class="form-control" id="jumlah_anak" value="0">
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Passwors</label>
                        <input type="text" class="form-control" id="password">
                    </div>
                    <div class="mb-3">
                        <label for="jabatan" class="form-label">Jabatan</label>
                        <input type="text" class="form-control" id="jabatan">
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </div>

@endsection