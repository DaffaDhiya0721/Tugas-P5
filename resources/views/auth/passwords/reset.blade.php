@extends('layouts.app', ['class' => 'login-page', 'page' => __('Halaman Mengatur Ulang Sandi'), 'contentClass' => 'login-page'])

@section('content')
    <div class="col-lg-5 col-md-7 ml-auto mr-auto">
        <form class="form" method="post" action="{{ route('password.update') }}">
            @csrf
    
                <div class="card-header">
                    <h1 class="card-title">{{ __('Mengatur ulang kata sandi') }}</h1>
                </div>
                <div class="card-body">
                    @include('alerts.success')
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
                            <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('Sandi') }}">
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
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-lg btn-block mb-3">{{ __('Mengatur ulang kata sandi') }}</button>
                </div>
            </div>
        </form>
    </div>
@endsection
