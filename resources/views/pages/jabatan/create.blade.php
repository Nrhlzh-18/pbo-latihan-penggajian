@extends('main')

@section('content')

    <div class="container">
        <div class="card bg-white m-5">
            <div class="card-header d-flex justify-content-between">
                <h3>Tambah Data Jabatan</h3>
                <a href="{{ URL::previous() }}" class="btn btn-primary">
                    Kembali
                </a>
            </div>
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Jabatan</label>
                        <input type="text" class="form-control" id="nama">
                    </div>
                    <div class="mb-3">
                        <label for="gaji_pokok" class="form-label">Jumlah Gaji Pokok</label>
                        <input type="number" class="form-control" id="gaji_pokok">
                    </div>
                    <div class="mb-3">
                        <label for="lembur" class="form-label">Upah Lembur</label>
                        <input type="number" class="form-control" id="lembur">
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </div>

@endsection