@extends('main')

@section('content')
    <div class="container">
        <div class="card m-5 bg-white">
            <div class="card-header d-flex justify-content-between">
                <h3>Data Jabatan</h3>
                <a href="/tambahJabatan" class="btn btn-primary">
                    Tambah Data
                </a>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Jabatan</th>
                            <th>Jumlah Gaji Pokok</th>
                            <th>Upah Lembur</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jabatans as $jabatan)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $jabatan->nama_jabatan }}</td>
                                <td>{{ $jabatan->jumlah_gaji_pokok }}</td>
                                <td>{{ $jabatan->upah_lembur     }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection