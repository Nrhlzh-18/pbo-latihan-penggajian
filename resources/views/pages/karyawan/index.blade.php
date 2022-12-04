@extends('main')

@section('content')

    <div class="container">
        <div class="card bg-white m-5">
            <div class="card-header d-flex justify-content-between">
                <h3>Data Karyawan</h3>
                <a href="/tambahKaryawan" class="btn btn-primary">
                    Tambah Data
                </a>
            </div>
            <div class="card-body">
                <table class="table table-responsive">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>No Telepon</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($karyawans as $karyawan)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $karyawan->nama_karyawan }}</td>
                                <td>{{ $karyawan->alamat }}</td>
                                <td>{{ $karyawan->no_telepon }}</td>
                                <td>{{ $karyawan->tempat_lahir }}</td>
                                <td>{{ $karyawan->tanggal_lahir }}</td>
                                <td>{{ $karyawan->jenis_kelamin }}</td>
                                <td>{{ $karyawan->status }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection