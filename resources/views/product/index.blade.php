@extends('layouts.main')

@section('content')
    <!--begin::App Content Header-->
    <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6"><h3 class="mb-0">Товары</h3></div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="{{ route('main.index') }}">Главная</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Товары</li>
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
                        <div class="card-header">
                            <a href="{{ route('product.create') }}" class="btn btn-primary">Добавить</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap text-center align-middle">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Наименование</th>
                                    <th>Описание</th>
                                    <th>Контент</th>
                                    <th>Цена</th>
                                    <th>Кол-во</th>
                                    <th>Изображение</th>
                                    <th>Категория</th>
                                    <th>Теги</th>
                                    <th>Цвета</th>
                                    <th class="small-column"><i class="fa-solid fa-eye"></i></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $product)
                                    <tr>
                                        <td>{{ $product->id }}</td>
                                        <td><a href="{{ route('product.show', $product->id) }}">{{ $product->title }}</a></td>
                                        <td class="custom-column">{{ $product->description }}</td>
                                        <td class="custom-column">{{ Str::limit($product->content, 30) }}</td>
                                        <td>{{ $product->price }}</td>
                                        <td>{{ $product->count }}</td>
                                        <td><img src="{{ asset('storage/' . $product->preview_image) }}" alt="Preview Image" style="max-width: 150px; max-height: 150px;"></td>
                                        <td>
                                            @if($product->category)
                                                {{ $product->category->title }}
                                            @else
                                                Нет категории
                                            @endif
                                        </td>
                                        <td class="custom-column">
                                            @if($product->tags->isNotEmpty())
                                                @foreach($product->tags as $tag)
                                                    {{ $tag->title }}{!! $loop->last ? '' : ',<br>' !!}
                                                @endforeach
                                            @else
                                                Нет тегов
                                            @endif
                                        </td>
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
                                        <td class="small-column">
                                            @if($product->is_published)
                                                <i class="fa fa-check fa-lg" style="color: green;"></i>
                                            @else
                                                <i class="fa fa-times fa-lg" style="color: red;"></i>
                                            @endif
                                        </td>

                                    </tr>
                                @endforeach
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
