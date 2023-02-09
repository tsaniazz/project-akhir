@extends('dashboard.base')

@section('content')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Anggota</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
        
        <form action="{{ route('anggota.update', $anggota->id) }}" method="POST" enctype="multipart/form-data">
            @csrf 
            @method('PUT')
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" value="{{ $anggota->nama }} " id="nama">
        
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" class="form-control" value="{{ $anggota->alamat }} "id="alamat">
                       
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="kodepos">Kode Pos</label>
                        <input type="number" name="kodepos" class="form-control" value="{{ $anggota->kodepos }}" id="kodepos">
                       
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="telp">No.Telp</label>
                        <input type="text" name="telp" class="form-control" value="{{ $anggota->telp }}" id="telp">
                      
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">Alamat Email</label>
                        <input type="text" name="email" class="form-control" value="{{ $anggota->email }}" id="email">
                       
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="status">Status</label>
                        <input type="text" name="status"class="form-control" value="{{ $anggota->status }}" id="status">
                       
                    </div>
                </div>
            </div>

            

            <div class="row">
                {{-- <div class="col-md-6">
                    <div class="form-group">
                        <label for="img_user">Image user</label>
                        <div class="custom-file" id="img_user">
                            <label class="custom-file-label" for="inputGroupFile01">Pilih Gambar</label>
                            <input type="file" name="img_user" class="custom-file-input"  value="{{ $anggota->img_user }}"id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                           
                        </div>
                    </div>
                </div> --}}
            </div>  
            <div class="mb-3">
                <label for="img_user" class="form-label">img_user</label>
                <input name="img_user" value="{{ $anggota->img_user }}" class="form-control @error('img_user') is-invalid @enderror" type="file" id="img_user" placeholder="Pilih img_user">
                @error('img_user')
                <div class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </div>
                @enderror
         </div>
  
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        </div>
     </div>

@endsection