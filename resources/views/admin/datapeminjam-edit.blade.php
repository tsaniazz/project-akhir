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
                                            
                                            <form action="{{ route('peminjam.update', $peminjam->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="form-group">
												<label for="nama">Nama</label>
												<input name="nama" type="text" class="form-control" value="{{ $peminjam->nama }}" id="nama" >
												
											</div>
											<div class="form-group">
												<label for="judul_buku">Judul Buku</label>
                                                <input name="judul_buku" type="text" class="form-control"  value="{{ $peminjam->judul_buku }}" id="genre_buku" >
												
											</div>
											<div class="form-group">
												<label for="genre_buku">Genre Buku</label>
                                                <input name="genre_buku" type="text" class="form-control"  value="{{ $peminjam->genre_buku }}" id="genre_buku" >
												
											</div>
                                        
                                                <div class="form-group">
												<label for="tgl_pinjam">Tanggal Pinjam</label>
												<input name="tgl_pinjam" type="date" class="form-control" value="{{ $peminjam->tgl_pinjam }}" id="tgl_pinjam" >
												
											</div>
                                                <div class="form-group">
												<label for="tgl_kembali">Tanggal Kembali</label>
												<input name="tgl_kembali" type="date" class="form-control"  value="{{ $peminjam->tgl_kembali }}" id="tgl_kembali" >
												
											</div>
                                                <div class="form-group">
												<label for="status">Status</label>
												<input name="status" type="text" class="form-control" value="{{ $peminjam->status }}" id="status" >
												
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