@extends('dashboard.base')

@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="card-header  d-flex justify-content-between align-items-center">
                    <h1 class="text-center">Data Buku</h1>
                </div>
                <div class="table-responsive">
                    @if (Session::get('Ok'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('Ok') }}
                        </div>
                    @endif
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th width="10%"> Judul Buku </th>
                                <th width="10%"> Tanggal Peminjaman </th>
                                <th width="10%"> Tanggal Kembali </th>
                            </tr>
                        </thead>
                        @foreach ($pinjam as $row)
                            <tbody>
                                <tr>
                                    <th>{{ $row->judul_buku }}</th>
                                    <th>{{ $row->tanggal_pinjam }}</th>
                                    <th>{{ $row->tanggal_kembali}}</th>
                                </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
