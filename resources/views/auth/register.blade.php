@extends('admin.app',[
  'activePage' => 'users', 
])
@section('content')
    <div class="main-panel">
      <div class="content">
        <div class="panel-header bg-primary-gradient">
                    <div class="page-inner py-5">
                      <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                        <div>
                          <h2 class="text-white pb-2 fw-bold">Dashboard</h2>
                          <h5 class="text-white op-7 mb-2">Portal Resmi Pemerintahan Kota Padang Panjang</h5>
                        </div>
                        <div class="ml-md-auto py-2 py-md-0">
                          <a href="../../" target="_blank" class="btn btn-white btn-border btn-round mr-2">Visit Homepage</a>
                        </div>
                      </div>
                  </div>
                </div>
<div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                      <div class="card-title">Tambah Data Users</div>
                            </div>
                            <div class="card-body card-block">
                                 <form method="POST" action="create" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>

                            <div class="col-md-6">
                                <input id="nama" type="text" class="form-control @error('name') is-invalid @enderror" name="nama">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label >

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control" name="username">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Level') }}</label>
                            <div class="col-md-6">
                                <select name="level" id="level" class="form-control" style="width:335px;">
                                        <option value="superadmin">Super Admin</option>
                                        <option value="admin">Admin</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                        </div>
                            </div>
                                </div>

 <script src="{{url('admin/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{url('admin/bootstrap/dist/js/bootstrap.min.js')}}"></script>
@endsection