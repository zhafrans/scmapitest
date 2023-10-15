@extends('layouts.admin.admin')

@section('title')
    Buat Petugas
@endsection

@section('content')
    <div class="page-bar">
        <div class="page-title-breadcrumb">
            <div class=" pull-left">
                <div class="page-title">Petugas</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="{{ route('index') }}">Home</a>&nbsp;<i
                        class="fa fa-angle-right"></i>
                </li>
                <li><a class="parent-item" href="{{ route('admin.petugas') }}">Petugas</a></li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card card-box">
                <div class="card-head">
                    <header>Tambah Petugas</header>
                </div>
                <div class="card-body " id="bar-parent2">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <form action="{{ route('admin.petugas.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label" for="inputUsername">Username</label>
                                    <input type="text" id="inputUsername" class="form-control @error('username') is-invalid @enderror"
                                        aria-describedby="usernameHelp" placeholder="Masukkan Username" autocomplete="off"
                                        value="{{ old('username') }}" name="username" required>
                                    @error('username')
                                        <span id="usernameHelp" class="invalid-feedback" role="alert">
                                            <small>{{ $message }}</small>
                                        </span>
                                    @enderror
                                </div>                                                                       
                                <div class="mb-3">
                                    <label class="form-label">{{ __('Password') }}</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                                        name="password" placeholder="Masukkan Password" required autocomplete="new-password">
                        
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                        
                                <div class="mb-3">
                                    <label class="form-label">{{ __('Confirm Password') }}</label>
                                    <input id="password-confirm" type="password" placeholder="Masukkan Confirm Password" class="form-control" name="password_confirmation" required
                                        autocomplete="new-password">
                                </div>
        
                                <div class="mb-3">
                                    <label class="form-label" for="role">Pilih Hak Akses</label>
                                    <select class="form-control @error('role') is-invalid @enderror" name="role"
                                        aria-describedby="roleHelp" id="role" required>
                                        <option value="">-- Pilih --</option>
                                        <option value="admin">Admin</option>
                                        <option value="warehouse">Warehouse</option>
                                        <option value="cabang">Cabang</option>                                                                
                                    </select>
                                    @error('role')
                                        <span id="roleHelp" class="invalid-feedback" role="alert">
                                            <small>{{ $message }}</small>
                                        </span>
                                    @enderror
                                </div>                              
                                <button type="submit" class="btn btn-primary btn-color">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('css-tambahan')
@endsection

@section('js-tambahan')
@endsection
