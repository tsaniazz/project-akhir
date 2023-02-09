

@extends('dashboard.base')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <div class="card-header  d-flex justify-content-between align-items-center">
                <h4>Data Denda</h4>
				<a href="{{ route('denda.tambah') }}" class="btn btn-primary">+ Denda</a>
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
                            <th> Jumlah Hari </th>
                            <th> Jumlah Denda</th>
                            <th> action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($denda as $row)
                        <tr>
                            <td> {{ $row->nama}} </td>
                            <td> {{ $row->jumlah_hari}} </td>
                            <td> {{ $row->jumlah_denda}} </td>
                           
                            <td>
                                <a href="{{route ('denda.edit', $row->id) }}"  class="btn btn-warning btn-sm"><i class="fas fa-pencil-ruler"></i></a>
                                <a href="{{route ('denda.destroy', $row->id) }}" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
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
