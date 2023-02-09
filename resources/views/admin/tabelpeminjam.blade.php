@extends('dashboard.base')

@section('content')

<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Crown
                            <i class="fas fa-crown"></i></h4>
						
					</div>
                      <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Data Peminjaman</div>
								</div>
								<div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-12">
                                            
                                            <form action="{{route('peminjam.store')}}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group">
												<label for="nama">Nama</label>
												<input name="nama" type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" >
												@error('nama')
                                                <div class="invalid-feedback">
                                                    <strong>{{$message}}</strong>
                                                 </div>
                                                 @enderror
											</div>
											<div class="form-group">
												<label for="judul_buku">Judul Buku</label>
												<select class="custom-select @error('judul_buku') is-invalid @enderror" name="judul_buku" id="judul_buku">
													<option value="">Pilih Judul Buku</option>
													@foreach($data_buku as $row)
													<option value="{{ $row->judul_buku }}" {{ old('judul_buku') == $row->id ? 'selected' : '' }}>{{ $row->judul_buku }}</option>
													@endforeach
												</select>
												@error('judul_buku')
												<div class="invalid-feedback">
													<strong>{{ $message }}</strong>
												</div>
												@enderror
											</div>
											<div class="form-group">
												<label for="genre_buku">Genre Buku</label>
												<select class="custom-select @error('genre_buku') is-invalid @enderror" name="genre_buku" id="genre_buku">
													<option value="">Pilih Genre Buku</option>
													@foreach($data_buku as $row)
													<option value="{{ $row->genre_buku }}" {{ old('genre_buku') == $row->id ? 'selected' : '' }}>{{ $row->genre_buku }}</option>
													@endforeach
												</select>
												@error('genre_buku')
												<div class="invalid-feedback">
													<strong>{{ $message }}</strong>
												</div>
												@enderror
											</div>
                                        
                                                <div class="form-group">
												<label for="tgl_pinjam">Tanggal Pinjam</label>
												<input name="tgl_pinjam" type="date" class="form-control @error('tgl_pinjam') is-invalid @enderror" id="tgl_pinjam" >
												@error('tgl_pinjam')
                                                <div class="invalid-feedback">
                                                    <strong>{{$message}}</strong>
                                                 </div>
                                                 @enderror
											</div>
                                                <div class="form-group">
												<label for="tgl_kembali">Tanggal Kembali</label>
												<input name="tgl_kembali" type="date" class="form-control @error('tgl_kembali') is-invalid @enderror" id="tgl_kembali" >
												@error('tgl_kembali')
                                                <div class="invalid-feedback">
                                                    <strong>{{$message}}</strong>
                                                 </div>
                                                 @enderror
											</div>
                                                <div class="form-group">
												<label for="status">Status</label>
												<input name="status" type="text" class="form-control @error('status') is-invalid @enderror" id="status" >
												@error('status')
                                                <div class="invalid-feedback">
                                                    <strong>{{$message}}</strong>
                                                 </div>
                                                 @enderror
											</div>
									    </div>
									</div>
								</div>
								<div class="card-action">
									<button class="btn btn-success" type="submit">Submit</button>
                                </form>
									<button class="btn btn-danger">Cancel</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
@endsection