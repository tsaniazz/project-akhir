@extends('dashboard.base')

@section('content')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Anggota</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
        
        <form action="{{ route('anggota.store') }}" method="POST" enctype="multipart/form-data">
            @csrf 

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" value="{{old('nama')}}" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama">
                        @error('nama')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>                            
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" value="{{old('alamat')}}" class="form-control @error('alamat') is-invalid @enderror" id="alamat">
                        @error('alamat')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>                            
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="kodepos">Kode Pos</label>
                        <input type="number" name="kodepos" value="{{old('kodepos')}}" class="form-control @error('kodepos') is-invalid @enderror" id="kodepos">
                        @error('kodepos')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>                            
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="telp">No.Telp</label>
                        <input type="text" name="telp" value="{{old('telp')}}" class="form-control @error('telp') is-invalid @enderror" id="telp">
                        @error('telp')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>                            
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">Alamat Email</label>
                        <input type="text" name="email" value="{{old('email')}}" class="form-control @error('email') is-invalid @enderror" id="email">
                        @error('email')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>                            
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="status">Status</label>
                        <input type="text" name="status" value="{{old('status')}}" class="form-control @error('status') is-invalid @enderror" id="status">
                        @error('status')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>                            
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="img_user">Image user</label>
                        <div class="custom-file" id="img_user">
                            <label class="custom-file-label" for="inputGroupFile01">Pilih Gambar</label>
                            <input type="file" name="img_user" class="custom-file-input @error('img_user') is-invalid @enderror" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                            @error('img_user')
                            <div class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </div>                            
                            @enderror
                        </div>
                    </div>
                </div>
            </div>            
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        </div>
     </div>

@endsection