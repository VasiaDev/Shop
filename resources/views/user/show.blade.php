@extends('layouts.main')

@section('content')
    <!--begin::App Content Header-->
    <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6"><h3 class="mb-0">Пользователь</h3></div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="{{ route('main.index') }}">Главная</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('user.index') }}">Пользователи</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $user->name }}</li>
                    </ol>
                </div>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content Header-->
    <!--begin::App Content-->
    <div class="app-content">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex p-3">
                            <div class="me-3">
                                <a href="{{ route('user.edit', $user->id) }}" class="btn btn-primary">Редактировать</a>
                            </div>
                            <form action="{{ route('user.delete', $user->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <input type="submit" class="btn btn-danger" value="Удалить">
                            </form>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <tbody>
                                <tr>
                                    <td>ID</td>
                                    <td>{{ $user->id }}</td>
                                </tr>
                                <tr>
                                    <td>Имя</td>
                                    <td>{{ $user->name }}</td>
                                </tr>
                                <tr>
                                    <td>Фамилия</td>
                                    <td>{{ $user->surname }}</td>
                                </tr>
                                <tr>
                                    <td>Отчество</td>
                                    <td>{{ $user->patronymic }}</td>
                                </tr>
                                <tr>
                                    <td>Емейл</td>
                                    <td>{{ $user->email }}</td>
                                </tr>
                                <tr>
                                    <td>Возраст</td>
                                    <td>{{ $user->age }}</td>
                                </tr>
                                <tr>
                                    <td>Пол</td>
                                    <td>{{ $user->genderTitle }}</td>
                                </tr>
                                <tr>
                                    <td>Адрес</td>
                                    <td>{{ $user->address }}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!--end::Row-->
            <!--end::Container-->
        </div>
        <!--end::App Content-->
    </div>

@endsection
