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
                            <th class="text-center">Редактировать</th>
                            <th class="text-center">Удалить</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr style="vertical-align: middle;">
                                <td class="text-center">{{ $user->id }}</td>
                                <td class="text-center">{{ $user->name }}</td>
                                <td class="text-center">{{ $user->email }}</td>
                                <td class="text-center"><a class="btn btn-success" href="{{ route( 'admin.user.edit', $user->id) }}">Редактировать</a></td>
                                <td class="text-center">
                                    <form action="{{ route( 'admin.user.delete', $user->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Удалить</button>
                                    </form>
                                </td>
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
