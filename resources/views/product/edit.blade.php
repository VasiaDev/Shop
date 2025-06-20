@extends('layouts.main')

@section('content')
    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6"><h3 class="mb-0">Редактировать товар</h3></div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="{{ route('main.index') }}">Главная</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('product.index') }}">Товары</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('product.show', $product->id) }}">{{ $product->title }}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Редактирование</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="app-content">
        <div class="container-fluid">
            <div class="row w-50">
                <form action="{{ route('product.update', $product->id) }}" method="post">
                    @csrf
                    @method('patch')
                    <div class="form-group mb-3">
                        <input type="text" value="{{ $product->title ?? old('title') }}" name="title" class="form-control" placeholder="Наименование">
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" value="{{ $product->description ?? old('description') }}" name="description" class="form-control" placeholder="Описание">
                    </div>
                    <div class="form-group mb-3">
                        <textarea name="content" class="form-control" placeholder="Контент" cols="30" rows="10">{{ $product->content ?? old('content') }}</textarea>
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" value="{{ $product->price ?? old('price') }}" name="price" class="form-control" placeholder="Цена">
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" value="{{ $product->count ?? old('count') }}" name="count" class="form-control" placeholder="Количество">
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" value="{{ $product->preview_image ?? old('preview_image') }}" name="preview_image" class="form-control" placeholder="Изображение">
                    </div>
                    <div class="form-group mt-3 w-50">
                        <select name="category_id" class="form-select">
                            <option selected disabled>Выберите категорию</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}>
                                    {{ $category->title }}
                                </option>
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
                                        <option value="{{ $tag->id }}" {{ $product->tags->contains('id', $tag->id) ? 'selected' : '' }}>{{ $tag->title }}</option>
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
                                        <option value="{{ $color->id }}" {{ $product->colors->contains('id', $color->id) ? 'selected' : '' }}>{{ $color->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-3 mb-3">
                        <input type="text" value="{{ $product->is_published ?? old('is_published') }}" name="is_published" class="form-control" placeholder="Публикация">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Редактировать">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
