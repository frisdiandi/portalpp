@extends('admin.app',[
  'activePage' => 'dashboard',
])
@section('content')
    <div class="main-panel">
            <div class="content">
                <div class="panel-header bg-primary-gradient">
                    <div class="page-inner py-5">
                      <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                        <div>
                          <h2 class="text-white pb-2 fw-bold">Dashboard</h2>
                          <h5 class="text-white op-7 mb-2">Portal Resmi  Pemerintahan Kota Padang Panjang</h5>
                        </div>
                        <div class="ml-md-auto py-2 py-md-0">
                          <a href="../../" target="_blank" class="btn btn-white btn-border btn-round mr-2">Visit Homepage</a>
                        </div>
                      </div>
                    </div>
                </div>

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Ganti Password</strong>
                            </div>
                             <div class="card-body">
                                @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                    <form class="form-horizontal" method="POST" action="/changepassword">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('current-password') ? ' has-error' : '' }}">
                            <label for="new-password" class="col-md-4 control-label">Password Lama</label>

                            <div class="col-md-6">
                                <input id="current-password" type="password" class="form-control" name="current-password" required>

                                @if ($errors->has('password-lama'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password-lama') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('new-password') ? ' has-error' : '' }}">
                            <label for="new-password" class="col-md-4 control-label">Password Baru</label>

                            <div class="col-md-6">
                                <input id="new-password" type="password" class="form-control" name="new-password" required>

                                @if ($errors->has('password-baru'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password-baru') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="new-password-confirm" class="col-md-4 control-label">Konfirmasi Password Baru</label>

                            <div class="col-md-6">
                                <input id="new-password-confirm" type="password" class="form-control" name="new-password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                   Simpan
                                </button>
                            </div>
                        </div>
                    </form>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <!-- Footer -->
@endsection
