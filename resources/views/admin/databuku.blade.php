

@extends('dashboard.base')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <div class="card-header  d-flex justify-content-between align-items-center">
                <h4>Data Buku</h4>
				<a href="{{route('databuku.tambah')}}" class="btn btn-primary">+ Buku</a>
            </div>
            <div class="card-header  d-flex justify-content-between align-items-center">
            </div>
            <div class="table-responsive">
                @if(Session::get('Oke'))
                <div class="alert alert-warning" role="alert">
                    {{Session::get('Oke')}}
                </div>
                @endif
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th> Judul Buku </th>
                            <th> Nama Genre </th>
                            
                            <th> Action </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data_buku as $row)
                        <tr>
                            <td> {{ $row->judul_buku}} </td>
                            <td> {{ $row->genre_buku}} </td>
                           
                            <td>
                                <a href="{{route ('databuku.edit', $row->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-pencil-ruler"></i></a>
                                <a href="{{route ('databuku.destroy', $row->id) }}" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
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
