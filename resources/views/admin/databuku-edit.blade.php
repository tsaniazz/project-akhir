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
                                            
                                            <form action="{{ route('databuku.update', $data_buku->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="form-group">
												<label for="judul_buku">Judul Buku</label>
												<input name="judul_buku" type="text" class="form-control" value="{{ $data_buku->judul_buku}}" id="judul_buku" >
												
											</div>
                                                <div class="form-group">
												<label for="genre_buku">Genre Buku</label>
												<input name="genre_buku" type="text" class="form-control" value="{{ $data_buku->genre_buku}}" id="genre_buku" >
									
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