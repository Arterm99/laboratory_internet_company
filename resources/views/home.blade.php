@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Уведомление') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('Вы авторизованы!') }}
                    </div>
                </div>
                <div class="col-md-8 mt-5">
                    <a class="btn btn-success" href="{{ route( 'admin.user.index') }}">К списку
                        пользователей</a>
                </div>
            </div>
        </div>
    </div>
@endsection
