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
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Главная</li>
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
                <form action="{{ route('product.update', $product->id) }}" method="post">
                    @csrf
                    @method('patch')

                    <div class="form-group mb-3">
                        <input type="text" value="{{ $product->title ?? old('title') }}" name="title" class="form-control" placeholder="Наименование">
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" value="{{ $product->description ?? old('description') }}" name="title" class="form-control" placeholder="Описание">
                    </div>
                    <div class="form-group mb-3">
                        <textarea name="content" class="form-control" placeholder="Контент" cols="30" rows="10">{{ $roduct->content ?? old('content') }}</textarea>
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" value="{{ $product->preview_image ?? old('preview_image') }}" name="title" class="form-control" placeholder="Изображение">
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" value="{{ $product->price ?? old('price') }}" name="title" class="form-control" placeholder="Цена">
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" value="{{ $product->count ?? old('count') }}" name="title" class="form-control" placeholder="Количество">
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" value="{{ $product->is_published ?? old('is_published') }}" name="title" class="form-control" placeholder="Публикация">
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
