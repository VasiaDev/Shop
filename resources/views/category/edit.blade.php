@extends('layouts.main')

@section('content')
    <!--begin::App Content Header-->
    <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6"><h3 class="mb-0">Редактировать категорию</h3></div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="{{ route('main.index') }}">Главная</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('category.index') }}">Категории</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('category.show', $category->id) }}">{{ $category->title }}</a></li>
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
            <div class="row w-50">
                <form action="{{ route('category.update', $category->id) }}" method="post">
                    @csrf
                    @method('patch')
                    <div class="form-group mb-3">
                        <input type="text" name="title" value="{{ $category->title }}" class="form-control" placeholder="Наименование">
                    </div>
                    <div class="form-group mb-3">
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
