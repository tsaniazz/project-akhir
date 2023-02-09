@extends('dashboard.base')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <div class="card-header  d-flex justify-content-between align-items-center">
                <h4>Data Peminjam</h4>
				<a href="{{route('peminjam.tambah')}}" class="btn btn-primary">+ Peminjam</a>
            </div>
            <div class="card-header  d-flex justify-content-between align-items-center">
            </div>
            <div class="table-responsive">
                @if(Session::get('Oke'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('Oke')}}
                </div>
                @endif
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th> Nama </th>
                            <th> Judul Buku </th>
                            <th> Genre Buku </th>
                            <th> Tanggal Pinjam </th>
                            <th> Tanggal Kembali </th>
                            <th> Status </th>
                            <th> Action </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($peminjam as $row)
                        <tr>
                            <td> {{ $row->nama}} </td>
                            <td> {{ $row->judul_buku}} </td>
                            <td> {{ $row->genre_buku}} </td>
                            <td> {{ $row->tgl_pinjam}} </td>
                            <td> {{ $row->tgl_kembali}} </td>
                            <td> {{ $row->status}} </td>
                           
                            <td>
                                <a href="{{route ('peminjam.edit', $row->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-pencil-ruler"></i></a>
                                <a href="{{route ('peminjam.destroy', $row->id) }}" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection 
