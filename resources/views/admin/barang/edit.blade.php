@extends('layouts.admin.admin')

@section('title')
    Ubah Barang {{ $data->nama }}
@endsection

@section('content')
    <div class="page-bar">
        <div class="page-title-breadcrumb">
            <div class=" pull-left">
                <div class="page-title">Barang</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="{{ route('index') }}">Home</a>&nbsp;<i
                        class="fa fa-angle-right"></i>
                </li>
                <li><a class="parent-item" href="{{ route('admin.barang') }}">Barang</a></li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card card-box">
                <div class="card-head">
                    <header>Ubah Barang {{ $data->nama }}</header>
                </div>
                <div class="card-body " id="bar-parent2">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <form action="{{ route('admin.barang.update', $data->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="mb-3">
                                    <label class="form-label" for="selectjenisBarang">Jenis Barang</label>
                                    <select class="form-control @error('id_jenis') is-invalid @enderror"
                                        name="id_jenis" aria-describedby="jenisBarangHelp" id="selectjenisBarang" required>
                                        <option value="">-- Pilih --</option>
                                        @foreach ($jenis_barang as $jns)
                                            <option value="{{ $jns->id }}" {{ $data->id_jenis == $jns->id ? 'selected' : '' }}>{{ $jns->nama }}</option>
                                        @endforeach
                                    </select>
                                    @error('id_jenis')
                                        <span id="jenisBarangHelp" class="invalid-feedback" role="alert">
                                            <small>{{ $message }}</small>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="inputBarang">Nama Barang</label>
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                        id="inputBarang" aria-describedby="BarangHelp"
                                        placeholder="Masukkan nama Barang" autocomplete="off"
                                        value="{{ $data->nama }}" name="nama" required>
                                    @error('nama')
                                        <span id="BarangHelp" class="invalid-feedback" role="alert">
                                            <small>{{ $message }}</small>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <div class="checkbox checkbox-icon-black">
                                        <input id="checkbox1" name="fisik" type="checkbox" value="1" @if($data->fisik == 1) checked @endif>
                                        <label for="checkbox1">
                                            Barang Fisik
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="inputKeterangan">Keterangan</label>
                                    <textarea class="form-control @error('keterangan') is-invalid @enderror" id="inputKeterangan" name="keterangan" rows="3">{{ $data->keterangan }}</textarea>
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
