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
                                    <div class="card-title">Data Denda</div>
								</div>
								<div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-12">
                                            
                                            <form action="{{ route('denda.update', $denda->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')

                                                <div class="form-group">
                                                    <label for="nama">Nama</label>
                                                    <input name="nama" type="text" class="form-control" value="{{ $denda->nama}}" id="nama" >
                                                
                                                </div>

                                                <div class="form-group">
												<label for="jumlah_hari">Jumlah Hari</label>
												<input name="jumlah_hari" type="text" class="form-control" value="{{ $denda->jumlah_hari}}" id="jumlah_hari" >
												
											</div>
                                                <div class="form-group">
												<label for="jumlah_denda">Jumlah Denda </label>
												<input name="jumlah_denda" type="text" class="form-control"  value="{{ $denda->jumlah_denda}}" id="jumlah_denda" >
												
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