@extends('layouts.app', ['class' => 'register-page', 'page' => __('Halaman Daftar'), 'contentClass' => 'register-page'])

@section('content')
<div class="col-md-10 text-center ml-auto mr-auto">
    <h3 class="mb-5">Daftar</h3>
</div>
<div class="col-lg-4 col-md-6 ml-auto mr-auto">
    <form class="form" method="post" action="{{ route('login') }}">
        @csrf
        <div class="card card-login card-white">
            <div class="card-body">
                <div class="input-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="tim-icons icon-single-02"></i>
                        </div>
                    </div>
                    <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Nama') }}">
                    @include('alerts.feedback', ['field' => 'name'])
                </div>
                <div class="input-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="tim-icons icon-email-85"></i>
                        </div>
                    </div>
                    <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}">
                    @include('alerts.feedback', ['field' => 'email'])
                </div>
                <div class="input-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="tim-icons icon-lock-circle"></i>
                        </div>
                    </div>
                    <input type="password" placeholder="{{ __('Sandi') }}" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}">
                    @include('alerts.feedback', ['field' => 'password'])
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="tim-icons icon-lock-circle"></i>
                        </div>
                    </div>
                    <input type="password" name="password_confirmation" class="form-control" placeholder="{{ __('Konfirmasi Sandi') }}">
                </div>
                <div class="form-check text-left">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox">
                        <span class="form-check-sign"></span>
                        {{ __('Saya setuju dengan') }}
                        <a href="#">{{ __('syarat dan ketentuan') }}</a>.
                    </label>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" href="" class="btn btn-primary btn-lg btn-block mb-3">{{ __('Kirim') }}</button>
            </div>
        </div>
    </form>
</div>
@endsection