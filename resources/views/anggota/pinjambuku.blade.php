@extends('dashboard.base')

@section('content')
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Crown
                    <i class="fas fa-crown"></i>
                </h4>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Peminjaman Buku</div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-lg-12">

                                    <form action="{{ route('tambah.pinjam.buku.anggota') }}" method="POST">
                                        @csrf
                        
                                        <div class="form-group">
                                            <label for="judul_buku">Judul Buku</label>
                                            <select class="custom-select @error('judul_buku') is-invalid @enderror"
                                                name="judul_buku" id="judul_buku">
                                                <option value="">Pilih Judul Buku</option>
                                                @foreach ($data_buku as $row)
                                                    <option value="{{ $row->judul_buku }}"
                                                        {{ old('data_buku') == $row->id ? 'selected' : '' }}>
                                                        {{ $row->judul_buku }}</option>
                                                @endforeach
                                            </select>
                                            @error('judul_buku')
                                                <div class="invalid-feedback">
                                                    <strong>{{ $message }}</strong>
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="tanggal_pinjam">Tanggal Peminjaman</label>
                                            <input name="tanggal_pinjam" type="date"
                                                class="form-control @error('tanggal_pinjam') is-invalid @enderror" id="tanggal_pinjam">
                                            @error('tanggal_pinjam')
                                                <div class="invalid-feedback">
                                                    <strong>{{ $message }}</strong>
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="tanggal_kembali">Tanggal Kembali</label>
                                            <input name="tanggal_kembali" type="date"
                                                class="form-control @error('tanggal_kembali') is-invalid @enderror" id="tanggal_kembali">
                                            @error('tanggal_kembali')
                                                <div class="invalid-feedback">
                                                    <strong>{{ $message }}</strong>
                                                </div>
                                            @enderror
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-action">
                            <button class="btn btn-success" type="submit">Submit</button>
                            </form>
                            <a href="{{ route('data.buku.anggota')}}" class="btn btn-danger">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
