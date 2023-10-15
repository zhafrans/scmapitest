@extends('layouts.admin.admin')

@section('title')
    Buat BTS
@endsection

@section('content')
    <div class="page-bar">
        <div class="page-title-breadcrumb">
            <div class=" pull-left">
                <div class="page-title">BTS</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="{{ route('index') }}">Home</a>&nbsp;<i
                        class="fa fa-angle-right"></i>
                </li>
                <li><a class="parent-item" href="{{ route('admin.bts') }}">BTS</a></li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card card-box">
                <div class="card-head">
                    <header>Tambah BTS</header>
                </div>
                <div class="card-body " id="bar-parent2">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <form action="{{ route('admin.bts.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label" for="inputBts">Nama BTS</label>
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                        id="inputBts" aria-describedby="BtsHelp" placeholder="Masukkan nama bts"
                                        autocomplete="off" value="{{ old('nama') }}" name="nama" required>
                                    @error('nama')
                                        <span id="BtsHelp" class="invalid-feedback" role="alert">
                                            <small>{{ $message }}</small>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="inputAlamat">Alamat</label>
                                    <textarea class="form-control @error('alamat') is-invalid @enderror" id="inputAlamat" name="alamat" rows="3">{{ old('alamat') }}</textarea>                                    
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="inputLang">Lang</label>
                                    <input type="text" class="form-control @error('lang') is-invalid @enderror"
                                        id="inputLang" placeholder="Masukkan lang"
                                        autocomplete="off" value="{{ old('lang') }}" name="lang">                                    
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="inputLat">Lat</label>
                                    <input type="text" class="form-control @error('lat') is-invalid @enderror"
                                        id="inputLat" placeholder="Masukkan lat"
                                        autocomplete="off" value="{{ old('lat') }}" name="lat">                                    
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
