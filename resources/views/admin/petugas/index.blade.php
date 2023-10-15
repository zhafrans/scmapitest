@extends('layouts.admin.admin')

@section('title')
    Daftar Petugas
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
            <li class="active"><a href="{{ route('admin.petugas') }}">Petugas</a></li>
        </ol>
    </div>        
</div>
@if ($message = Session::get('success'))
    <div class="alert alert-success fade show">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        {{ $message }}
    </div>
    @endif 
    <div class="row">
        <div class="col-md-12">
            <div class="card card-topline-red">
                <div class="card-head">
                    <header>Daftar Petugas</header>                    
                </div>
                <div class="card-body ">
                    <div class="row p-b-20">
                        <div class="col-md-6 col-sm-6 col-6">
                            <div class="btn-group">                                
                                <a href="{{ route('admin.petugas.create') }}" class="btn btn-info">
                                    Tambah Petugas <i class="fa fa-plus"></i>
                                </a>
                            </div>
                        </div>                        
                    </div>
                    <table class="table table-striped table-bordered table-hover order-column full-width"
                        id="example4">
                        <thead>
                            <tr>                                
                                <th style="width: 10%;">No</th>
                                    <th>Nama</th>                                    
                                    <th>Hak Akses</th>
                                    <th style="width: 15%;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>                            
                            @forelse ($data as $d)
                            <tr class="odd gradeX">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $d->username }}</td>                                        
                                <td>{{ $d->hak_akses }}</td>
                                <td>                                    
                                    <a href="{{ route('admin.petugas.delete', $d->id) }}"
                                        class="btn btn-danger btn-xs"
                                        onclick="return confirm('Apakah yakin ingin menghapus Petugas : {{ $d->username }} ?');"><i
                                            class="fa fa-trash"></i></a>                                                                                  
                                </td>
                            </tr>                            
                            @empty
                                <tr>
                                    <th colspan="4" class="text-center">Tidak ada data</th>
                                </tr>
                            @endforelse                
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>     
@endsection

@section('css-tambahan')    
    <!-- data tables -->
    <link href="assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />
@endsection

@section('js-tambahan')
    <!-- data tables -->
    <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js"></script>
    <script src="assets/js/pages/table/table_data.js"></script>
@endsection

