@extends('layouts.admin.admin')

@section('title')
    Buat Jenis Outlet
@endsection

@section('content')
    <div class="page-bar">
        <div class="page-title-breadcrumb">
            <div class=" pull-left">
                <div class="page-title">Jenis Outlet</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="{{ route('index') }}">Home</a>&nbsp;<i
                        class="fa fa-angle-right"></i>
                </li>
                <li><a class="parent-item">Outlet</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li><a class="parent-item" href="{{ route('admin.jenis_outlet') }}">Jenis Outlet</a></li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card card-box">
                <div class="card-head">
                    <header>Tambah Jenis Outlet</header>
                </div>
                <div class="card-body " id="bar-parent2">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <form action="{{ route('admin.jenis_outlet.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label" for="inputOutletductType">Nama Jenis Outlet</label>
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                        id="inputOutletductType" aria-describedby="OutletTypeHelp"
                                        placeholder="Masukkan nama jenis outlet" autocomplete="off"
                                        value="{{ old('nama') }}" name="nama" required>
                                    @error('nama')
                                        <span id="OutletTypeHelp" class="invalid-feedback" role="alert">
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
