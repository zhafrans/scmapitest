@extends('layouts.admin.admin')

@section('title')
    Ubah Jenis Barang {{ $data->nama }}
@endsection

@section('content')
    <div class="page-bar">
        <div class="page-title-breadcrumb">
            <div class=" pull-left">
                <div class="page-title">Jenis Barang</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="{{ route('index') }}">Home</a>&nbsp;<i
                        class="fa fa-angle-right"></i>
                </li>
                <li><a class="parent-item">Barang</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li><a class="parent-item" href="{{ route('admin.jenis_barang') }}">Jenis Barang</a></li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card card-box">
                <div class="card-head">
                    <header>Ubah Jenis Barang {{ $data->nama }}</header>
                </div>
                <div class="card-body " id="bar-parent2">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <form action="{{ route('admin.jenis_barang.update', $data->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method("PATCH")
                                <div class="mb-3">
                                    <label class="form-label" for="inputProductType">Nama Jenis Barang</label>
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                        id="inputProductType" aria-describedby="productTypeHelp"
                                        placeholder="Masukkan nama jenis barang" autocomplete="off"
                                        value="{{ $data->nama }}" name="nama" required>
                                    @error('nama')
                                        <span id="productTypeHelp" class="invalid-feedback" role="alert">
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
