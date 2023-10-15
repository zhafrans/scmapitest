@extends('layouts.admin.admin')

@section('title')
    Ubah Cabang {{ $data->nama }}
@endsection

@section('content')
    <div class="page-bar">
        <div class="page-title-breadcrumb">
            <div class=" pull-left">
                <div class="page-title">Cabang</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="{{ route('index') }}">Home</a>&nbsp;<i
                        class="fa fa-angle-right"></i>
                </li>
                <li><a class="parent-item" href="{{ route('admin.cabang') }}">Cabang</a></li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card card-box">
                <div class="card-head">
                    <header>Ubah Cabang {{ $data->nama }}</header>
                </div>
                <div class="card-body " id="bar-parent2">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <form action="{{ route('admin.cabang.update', $data->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="mb-3">
                                    <select class="form-control @error('warehouse_id') is-invalid @enderror"
                                        name="warehouse_id" aria-describedby="warehouseHelp" id="selectWarehouse" required>
                                        <option value="">-- Pilih --</option>
                                        @foreach ($warehouse as $wh)
                                            <option value="{{ $wh->id }}" {{ $data->id_warehouse == $wh->id ? 'selected' : '' }}>{{ $wh->nama }}</option>
                                        @endforeach
                                    </select>
                                    @error('warehouse_id')
                                        <span id="warehouseHelp" class="invalid-feedback" role="alert">
                                            <small>{{ $message }}</small>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="inputCabang">Nama Cabang</label>
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                        id="inputCabang" aria-describedby="CabangHelp"
                                        placeholder="Masukkan nama Cabang" autocomplete="off"
                                        value="{{ $data->nama }}" name="nama" required>
                                    @error('nama')
                                        <span id="CabangHelp" class="invalid-feedback" role="alert">
                                            <small>{{ $message }}</small>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="inputAlamat">Alamat</label>
                                    <textarea class="form-control @error('alamat') is-invalid @enderror" id="inputAlamat" name="alamat" rows="3">{{ $data->alamat }}</textarea>                                    
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
