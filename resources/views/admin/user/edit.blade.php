@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th class="text-center">ID</th>
                            <th class="text-center">Имя</th>
                            <th class="text-center">Почта</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr style="vertical-align: middle">
                            <td class="text-center">{{ $user->id }}</td>

                            <form name="edit-form" method="POST" action="{{ route( 'admin.user.update', $user->id) }}">
                                @csrf
                                @method('PATCH')
                                <td class="text-center">
                                    <input type="text"
                                           class="form-control bg-white"
                                           name="name"
                                           placeholder="Имя"
                                           value="{{ $user->name }}">
                                </td>
                                <td class="text-center">
                                    <input type="text"
                                           class="form-control bg-white"
                                           name="email"
                                           placeholder="Email"
                                           value="{{ $user->email }}">
                                </td>
                                <td class="text-center">
                                    <button type="submit" class="btn btn-primary">Сохранить</button>
                                </td>
                            </form>

                        </tr>
                        </tbody>
                    </table>
                    <div class="col-md-8 mt-5">
                        <a class="btn btn-success" href="{{ route( 'admin.user.index') }}">К списку
                            пользователей</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
