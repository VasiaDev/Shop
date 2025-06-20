@extends('layouts.main')

@section('content')
    <!--begin::App Content Header-->
    <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6"><h3 class="mb-0">Добавить пользователя</h3></div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="{{ route('main.index') }}">Главная</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('user.index') }}">Пользователи</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Добавление</li>
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
            <div class="row w-50">
                <form action="{{ route('user.store') }}" method="post">
                    @csrf

                    <div class="form-group mb-3">
                        <input type="text" value="{{ old('name') }}" name="name" class="form-control" placeholder="Имя">
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" value="{{ old('surname') }}" name="surname" class="form-control" placeholder="Фамилия">
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" value="{{ old('patronymic') }}" name="patronymic" class="form-control" placeholder="Отчество">
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" value="{{ old('age') }}" name="age" class="form-control" placeholder="Возраст">
                    </div>
                    <div class="form-group mb-3">
                        <select name="gender" class="custom-select form-control" id="exampleSelectBorder">
                            <option disabled selected>Пол</option>
                            <option {{ old('gender') == 1 ? ' selected' : '' }} value="1">Мужской</option>
                            <option {{ old('gender') == 2 ? ' selected' : '' }} value="2">Женский</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" value="{{ old('address') }}" name="address" class="form-control" placeholder="Адрес">
                    </div>
                    <div class="form-group mb-3">
                        <input type="email" value="{{ old('email') }}" name="email" class="form-control" placeholder="Емейл">
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" value="{{ old('password') }}" name="password" class="form-control" placeholder="Пароль">
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" value="{{ old('password_confirmation') }}" name="password_confirmation" class="form-control" placeholder="Подтверждение пароля">
                    </div>
                    <div class="form-group mb-3">
                        <input type="submit" class="btn btn-primary" value="Добавить">
                    </div>
                </form>
            </div>
            <!--end::Row-->
            <!--end::Container-->
        </div>
        <!--end::App Content-->
    </div>


@endsection
