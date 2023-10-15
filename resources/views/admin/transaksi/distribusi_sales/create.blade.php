@extends('layouts.admin.admin')

@section('title')
    Buat Transaksi Distribusi Ke Sales
@endsection

@section('content')
    <div class="page-bar">
        <div class="page-title-breadcrumb">
            <div class=" pull-left">
                <div class="page-title">Buat Transaksi Distribusi Ke Sales</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="{{ route('index') }}">Home</a>&nbsp;<i
                        class="fa fa-angle-right"></i>
                </li>
                <li><a class="parent-item" href="{{ route('admin.transaksi.distribusi_sales') }}">Buat Transaksi Distribusi Ke Sales</a></li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card card-box">
                <div class="card-head">
                    <header>Tambah Transaksi</header>
                </div>
                <div class="card-body " id="bar-parent2">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <form action="{{ route('admin.transaksi.distribusi_sales.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label" for="inputPetugas">Nama Petugas</label>
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                        id="inputPetugas" aria-describedby="PetugasHelp" placeholder="Masukkan nama petugas"
                                        autocomplete="off" value="{{ old('nama') }}" name="nama" required>
                                    @error('nama')
                                        <span id="PetugasHelp" class="invalid-feedback" role="alert">
                                            <small>{{ $message }}</small>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="pilihWarehouse">Pilih Cabang</label>
                                    <select class="form-control @error('warehouse_id') is-invalid @enderror"
                                        name="warehouse_id" aria-describedby="warehouseHelp" id="selectWarehouse" required>
                                        <option value="">-- Pilih --</option>
                                        
                                    </select>
                                    @error('warehouse_id')
                                        <span id="warehouseHelp" class="invalid-feedback" role="alert">
                                            <small>{{ $message }}</small>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="pilihCabang">Pilih Sales</label>
                                    <select class="form-control @error('cabang_id') is-invalid @enderror"
                                        name="cabang_id" aria-describedby="cabangHelp" id="selectcabang" required>
                                        <option value="">-- Pilih --</option>
                                        
                                    </select>
                                    @error('cabang_id')
                                        <span id="cabangHelp" class="invalid-feedback" role="alert">
                                            <small>{{ $message }}</small>
                                        </span>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary btn-color">Simpan</button>
                                <button type="button" class="btn btn-success btn-color">Tambah Barang</button>
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
