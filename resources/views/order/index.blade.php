@extends('layouts.main')

@section('content')
    <!--begin::App Content Header-->
    <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6"><h3 class="mb-0">Заказы</h3></div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="{{ route('main.index') }}">Главная</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Заказы</li>
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
{{--                        <div class="card-header">--}}
{{--                            <a href="{{ route('product.create') }}" class="btn btn-primary">Добавить</a>--}}
{{--                        </div>--}}
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap text-center align-middle">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Пользовательское_ID</th>
                                    <th>Товары</th>
                                    <th>Общая стоимость</th>
                                    <th>Статус оплаты</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($orders as $order)
                                    <tr>
                                        <td>{{ $order->id }}</td>
                                        <td>{{ $order->user->name ?? 'Пользователь не найден' }}</td>
                                        <td>
                                            @php
                                                try {
                                                    $raw = $order->products;

                                                    $cleanJson = preg_replace('/[\x00-\x1F\x80-\x9F]/u', '', $raw);

                                                    $decoded = json_decode($cleanJson, true);

                                                    if (is_string($decoded)) {
                                                        $products = json_decode($decoded, true);
                                                    } else {
                                                        $products = $decoded;
                                                    }

                                                    if (json_last_error() !== JSON_ERROR_NONE) {
                                                        $products = 'Ошибка JSON: ' . json_last_error_msg();
                                                    }
                                                } catch (\Throwable $e) {
                                                    $products = 'Ошибка: ' . $e->getMessage();
                                                }
                                            @endphp

                                            @if(is_array($products))
                                                <ul style="padding-left: 0; list-style: none;">
                                                    @foreach($products as $product)
                                                        <li style="margin-bottom: 10px; display: flex; align-items: center; gap: 10px;">
                                                            <img src="{{ $product['image_url'] }}" alt="product" width="50" height="50" style="object-fit: cover; border-radius: 5px;">
                                                            <span>
                                                                {{ $product['title'] }} — {{ (int) $product['qty'] }} шт. по {{ $product['price'] }} MDL
                                                            </span>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            @else
                                                <span style="color: red;">Невозможно распарсить</span>
                                            @endif
                                        </td>

                                        <td>{{ $order->total_price }}</td>
                                        <td>{{ $order->payment_status }}</td>
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
