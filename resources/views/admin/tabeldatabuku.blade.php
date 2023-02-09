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
                                    <div class="card-title">Data Buku</div>
								</div>
								<div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-12">
                                            
                                            <form action="{{route('databuku.store')}}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group">
												<label for="judul_buku">Judul Buku</label>
												<input name="judul_buku" type="text" class="form-control @error('judul_buku') is-invalid @enderror" id="judul_buku" >
												@error('judul_buku')
                                                <div class="invalid-feedback">
                                                    <strong>{{$message}}</strong>
                                                 </div>
                                                 @enderror
											</div>
                                                <div class="form-group">
												<label for="genre_buku">Genre Buku</label>
												<input name="genre_buku" type="text" class="form-control @error('genre_buku') is-invalid @enderror" id="genre_buku" >
												@error('genre_buku')
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