@extends('layouts.main')

@section('content')
    <!--begin::App Content Header-->
    <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6"><h3 class="mb-0">Добавить цвет</h3></div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="{{ route('main.index') }}">Главная</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('color.index') }}">Цвета</a></li>
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
                <form action="{{ route('color.store') }}" method="post">
                    @csrf

                    <div class="form-group mb-3">
                        <label for="title">Цвет</label>
                        <div style="width: 50px; height: 50px; overflow: hidden; border-radius: 0;">
                            <input type="color" name="title" id="title" class="form-control p-0" style="width: 100%; height: 100%; border: none;">
                        </div>
                    </div>
                    <div class="form-group">
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
