@extends('layouts.main')

@section('content')
    <!--begin::App Content Header-->
    <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6"><h3 class="mb-0">Добавить продукт</h3></div>
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
    <div class="content">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row w-50">
                <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group mb-3">
                        <input type="text" value="{{ old('title') }}" name="title" class="form-control" placeholder="Наименование">
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" value="{{ old('description') }}" name="description" class="form-control" placeholder="Описание">
                    </div>
                    <div class="form-group mb-3">
                        <textarea name="content" class="form-control" placeholder="Контент" cols="30" rows="10">{{ old('content') }}</textarea>
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" value="{{ old('price') }}" name="price" class="form-control" placeholder="Цена">
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" value="{{ old('count') }}" name="count" class="form-control" placeholder="Количество на складе">
                    </div>
                    <div class="input-group mt-3 w-75">
                        <label class="form-label">Добавить изображение</label>
                        <div class="input-group">
                            <input type="file" value="{{ old('preview_image') }}" class="form-control" id="inputGroupFile02" name="preview_image">
                            <label class="input-group-text" for="inputGroupFile02">Загрузить</label>
                        </div>
                        @error('preview_image')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="input-group mt-3 w-75">
                        <label class="form-label">Добавить изображение</label>
                        <div class="input-group">
                            <input type="file" value="{{ old('product_images[]') }}" class="form-control" id="inputGroupFile02" name="product_images[]">
                            <label class="input-group-text" for="inputGroupFile02">Загрузить</label>
                        </div>
                        @error('product_images[]')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="input-group mt-3 w-75">
                        <label class="form-label">Добавить изображение</label>
                        <div class="input-group">
                            <input type="file" value="{{ old('product_images[]') }}" class="form-control" id="inputGroupFile02" name="product_images[]">
                            <label class="input-group-text" for="inputGroupFile02">Загрузить</label>
                        </div>
                        @error('product_images[]')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="input-group mt-3 w-75">
                        <label class="form-label">Добавить изображение</label>
                        <div class="input-group">
                            <input type="file" value="{{ old('product_images[]') }}" class="form-control" id="inputGroupFile02" name="product_images[]">
                            <label class="input-group-text" for="inputGroupFile02">Загрузить</label>
                        </div>
                        @error('product_images[]')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mt-3 w-50">
                        <select name="category_id" class="form-select">
                            <option selected="selected" disabled>Выберите категорию</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label class="form-label">Выберите теги</label>
                        <div mbsc-page class="demo-multiple-select">
                            <div style="height:100%; width: 50%">
                                <label>
                                    <input mbsc-input id="tags-multiple-select-input" placeholder="Please select..." data-dropdown="true" data-input-style="outline" data-label-style="stacked" data-tags="true" />
                                </label>
                                <select id="tags-multiple-select" class="tags" name="tag_ids[]" multiple>
                                    @foreach($tags as $tag)
                                        <option value="{{ $tag->id }}">{{ $tag->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <label class="form-label">Выберите цвета</label>
                        <div mbsc-page class="demo-multiple-select">
                            <div style="height:100%; width: 50%">
                                <label>
                                    <input mbsc-input id="colors-multiple-select-input" placeholder="Please select..." data-dropdown="true" data-input-style="outline" data-label-style="stacked" data-tags="true" />
                                </label>
                                <select id="colors-multiple-select" class="colors" name="color_ids[]" multiple>
                                    @foreach($colors as $color)
                                        <option value="{{ $color->id }}">{{ $color->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-3 mb-3">
                        <input type="text" value="{{ old('is_published') }}" name="is_published" class="form-control" placeholder="Публикация">
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
