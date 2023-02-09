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
                                <th width="10%"> Genre Buku </th>
                                <th width="10%"> Status </th>
                                <th width="10%"> Action </th>
                            </tr>
                        </thead>
                        @foreach ($data_buku as $row)
                            <tbody>
                                <tr>
                                    <th>{{ $row->judul_buku }}</th>
                                    <th>{{ $row->genre_buku }}</th>
                                    <th>
                                        @if($row->status == 1)
                                        <span class="badge badge-success">Tersedia</span>
                                        @elseif($row->status == 2)
                                        <span class="badge badge-danger">Tidak Tersedia</span>
                                    @endif
                                    </th>
                                    <th>
                                        <a href="{{ route('pinjam.buku.anggota')}}" class="btn btn-warning btn-sm">Pinjam</a>
                                    </th>
                                </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
