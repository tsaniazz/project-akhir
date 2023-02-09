@extends('dashboard.base')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <div class="card-header  d-flex justify-content-between align-items-center">
                <h4>Data Anggota</h4>
				<a href="{{route('anggota.tambah')}}" class="btn btn-primary">+ Anggota</a>
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
                            <th> Alamat </th>
                            <th> Kode pos </th>
                            <th> No.Telp</th>
                            <th> Email </th>
                            <th> Image </th>
                            <th> Status </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($anggota as $row)
                        <tr>
                            <td> {{ $row->nama}} </td>
                            <td> {{ $row->alamat}} </td>
                            <td> {{ $row->kodepos}} </td>
                            <td> {{ $row->telp}} </td>
                            <td> {{ $row->email}} </td>
                            <td> 
                                <img src="{{ asset('storage/'.$row->img_user) }}" alt="{{ $row->nama }}" class="img-fluid">
                            </td>
                            <td> {{ $row->status}} </td>
                           
                            <td>
                                <a href="{{route ('anggota.edit', $row->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-pencil-ruler"></i></a>
                                <a href="{{route ('anggota.destroy', $row->id) }}" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
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
