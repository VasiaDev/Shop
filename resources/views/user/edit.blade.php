@extends('layouts.main')

@section('content')
    <!--begin::App Content Header-->
    <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6"><h3 class="mb-0">Редактировать пользователя</h3></div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="{{ route('main.index') }}">Главная</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('user.index') }}">Пользователи</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('user.show', $user->id) }}">{{ $user->name }}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Редактирование</li>
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
                <form action="{{ route('user.update', $user->id) }}" method="post">
                    @csrf
                    @method('patch')

                    <div class="form-group">
                        <input type="text" value="{{ $user->name ?? old('name') }}" name="name" class="form-control" placeholder="Имя">
                    </div>
                    <div class="form-group">
                        <input type="text" value="{{ $user->surname ?? old('surname') }}" name="surname" class="form-control" placeholder="Фамилия">
                    </div>
                    <div class="form-group">
                        <input type="text" value="{{ $user->patronymic ?? old('patronymic') }}" name="patronymic" class="form-control" placeholder="Отчество">
                    </div>
                    <div class="form-group">
                        <input type="text" value="{{ $user->age ?? old('age') }}" name="age" class="form-control" placeholder="Возраст">
                    </div>
                    <div class="form-group">
                        <input type="text" value="{{ $user->address ?? old('address') }}" name="address" class="form-control" placeholder="Адрес">
                    </div>
                    <div class="form-group">
                        <select name="gender" class="custom-select form-control" id="exampleSelectBorder">
                            <option disabled selected>Пол</option>
                            <option {{ $user->gender == 1 || old('gender') == 1 ? ' selected' : '' }} value="1">Мужской</option>
                            <option {{ $user->gender == 2 || old('gender') == 2 ? ' selected' : '' }} value="2">Женский</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Редактировать">
                    </div>
                </form>
            </div>
            <!--end::Row-->
            <!--end::Container-->
        </div>
        <!--end::App Content-->
    </div>


@endsection
