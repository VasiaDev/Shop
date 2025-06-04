@extends('layouts.main')

@section('content')
    <!--begin::App Content Header-->
    <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6"><h3 class="mb-0">Продукт</h3></div>
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
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex p-3">
                            <div class="me-3">
                                <a href="{{ route('product.edit', $product->id) }}" class="btn btn-primary">Редактировать</a>
                            </div>
                            <form action="{{ route('product.delete', $product->id) }}" method="post">
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
                                    <td>{{ $product->id }}</td>
                                </tr>
                                <tr>
                                    <td>Наименование</td>
                                    <td>{{ $product->title }}</td>
                                </tr>
                                <tr>
                                    <td>Описание</td>
                                    <td>{{ $product->description }}</td>
                                </tr>
                                <tr>
                                    <td>Контент</td>
                                    <td class="custom-column">{{ $product->content }}</td>
                                </tr>
                                <tr>
                                    <td>Цена</td>
                                    <td>{{ $product->price }}</td>
                                </tr>
                                <tr>
                                    <td>Количество</td>
                                    <td>{{ $product->count }}</td>
                                </tr>
                                <tr>
                                    <td>Изображение</td>
                                    <td><img src="{{ asset('storage/' . $product->preview_image) }}" alt="Preview Image" style="max-width: 300px; max-height: 300px;"></td>
                                </tr>
                                <tr>
                                    <td>Категория</td>
                                    <td>
                                        @if($product->category)
                                            {{ $product->category->title }}
                                        @else
                                            Нет категории
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>Теги</td>
                                    <td>
                                        @if($product->tags->isNotEmpty())
                                            @foreach($product->tags as $tag)
                                                {{ $tag->title }}{!! $loop->last ? '' : ',&nbsp;' !!}
                                            @endforeach
                                        @else
                                            Нет тегов
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>Цвета</td>
                                    <td>
                                        @if($product->colors->isNotEmpty())
                                            @foreach($product->colors as $color)
                                                <span style="display: inline-block; width: 16px; height: 16px; background-color: {{ $color->title }}; border: 1px solid #ccc; vertical-align: middle;"></span>
                                                {{ $loop->last ? '' : ', ' }}
                                            @endforeach
                                        @else
                                            Нет цветов
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>Публикация</td>
                                    <td>{{ $product->is_published }}</td>
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
