@extends('layouts.admin.admin')

@section('title')
    Ubah Outlet {{ $data->nama }}
@endsection

@section('content')
    <div class="page-bar">
        <div class="page-title-breadcrumb">
            <div class=" pull-left">
                <div class="page-title">Outlet</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="{{ route('index') }}">Home</a>&nbsp;<i
                        class="fa fa-angle-right"></i>
                </li>
                <li><a class="parent-item" href="{{ route('admin.outlet') }}">Outlet</a></li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card card-box">
                <div class="card-head">
                    <header>Ubah Outlet {{ $data->nama }}</header>
                </div>
                <div class="card-body " id="bar-parent2">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <form action="{{ route('admin.outlet.update', $data->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="mb-3">
                                    <select class="form-control @error('bts_id') is-invalid @enderror"
                                        name="bts_id" aria-describedby="btsHelp" id="selectbts" required>
                                        <option value="">-- Pilih --</option>
                                        @foreach ($bts as $b)
                                            <option value="{{ $b->id }}" {{ $data->id_bts == $b->id ? 'selected' : '' }}>{{ $b->nama }}</option>
                                        @endforeach
                                    </select>
                                    @error('bts_id')
                                        <span id="btsHelp" class="invalid-feedback" role="alert">
                                            <small>{{ $message }}</small>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="inputOutlet">Nama Outlet</label>
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                        id="inputOutlet" aria-describedby="OutletHelp"
                                        placeholder="Masukkan nama Outlet" autocomplete="off"
                                        value="{{ $data->nama }}" name="nama" required>
                                    @error('nama')
                                        <span id="OutletHelp" class="invalid-feedback" role="alert">
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
