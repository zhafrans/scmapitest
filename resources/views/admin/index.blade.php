@extends('layouts.admin.admin')

@section('title')
    Dashboard
@endsection

@section('content')
    <div class="page-bar">
        <div class="page-title-breadcrumb">
            <div class=" pull-left">
                <div class="page-title">Dashboard</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="{{ route('index') }}">Home</a>&nbsp;<i
                        class="fa fa-angle-right"></i>
                </li>
                <li class="active">Dashboard</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-sm-12 col-12">
            <div class="card bg-info">
                <div class="text-white py-3 px-4">
                    <h6 class="card-title text-white mb-0">Distribusi Cabang</h6>
                    <p>7582</p>
                    <div id="sparkline26"></div>
                    <small class="text-white">View Details</small>
                </div>
            </div>            
        </div>   
        <div class="col-md-6 col-sm-12 col-12">            
            <div class="card bg-success">
                <div class="text-white py-3 px-4">
                    <h6 class="card-title text-white mb-0">Distribusi Sales</h6>
                    <p>3669.25</p>
                    <div id="sparkline27"></div>
                    <small class="text-white">View Details</small>
                </div>
            </div>
        </div>
    </div>
    
@endsection

@section('js-tambahan')
<script src="assets/plugins/sparkline/jquery.sparkline.min.js"></script>
<script src="assets/js/pages/sparkline/sparkline-data.js"></script>
@endsection
