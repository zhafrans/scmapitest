@extends('layouts.admin.admin')

@section('title')
    Ganti Password
@endsection

@section('content')
    <h4 class="mT-10 mB-30 c-grey-900">Ganti Password</h4>    
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ $message }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if ($message = Session::get('warning'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{ $message }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="row">
        <div class="masonry-item col-md-12">
            <div class="bgc-white p-20 bd">

                <form action="{{ route('update.password') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="input_old_password">Password Lama</label>
                        <input type="password" id="input_old_password"
                            class="form-control @error('old_password') is-invalid @enderror"
                            aria-describedby="old_password_help" autocomplete="off" placeholder="Masukkan Password Lama"
                            name="old_password" required>
                        @error('old_password')
                            <span id="old_password_help" class="invalid-feedback" role="alert">
                                <small>{{ $message }}</small>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="input_new_password">Password Baru</label>
                        <input type="password" id="input_new_password"
                            class="form-control @error('new_password') is-invalid @enderror"
                            aria-describedby="new_password_help" autocomplete="off" placeholder="Masukkan Password Baru"
                            name="new_password" required>
                        @error('new_password')
                            <span id="new_password_help" class="invalid-feedback" role="alert">
                                <small>{{ $message }}</small>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="input_confirm_password">Konfirmasi Password Baru</label>
                        <input type="password" id="input_confirm_password"
                            class="form-control @error('confirm_password') is-invalid @enderror"
                            aria-describedby="confirm_password_help" autocomplete="off"
                            placeholder="Masukkan Konfirmasi Password Baru" name="password_confirmation" required>
                        @error('confirm_password')
                            <span id="confirm_password_help" class="invalid-feedback" role="alert">
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
@endsection
