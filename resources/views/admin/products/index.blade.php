@extends('base.base_layout_admin_dashboard')

@section('title')
    یافت شو | مدیریت محصولات
@endsection
@section('custom_css')
    <style>
        .btn_radius_5{
            border-radius: 5px;
        }
        .line_height_25 {
            line-height: 25px !important;
        }
    </style>
@endsection
@section('custom_js')
    <script>

    </script>
@endsection

@section('dashboard_content')
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        مدیریت محصولات
                    </div>
                    <h2 class="page-title">
                        لیست محصولات
                    </h2>
                </div>
                <!-- Page title actions -->
                <div class="col-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <a href="{{route('admin.product_create')}}" class="btn btn-sm p-1 btn_radius_5 btn-6 btn-outline-success active line_height_25">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="icon icon-2">
                                <path d="M12 5l0 14"/>
                                <path d="M5 12l14 0"/>
                            </svg>
                            افزودن محصول جدید
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-xl">
        <div class="card">
            <div class="card-body p-0">
                <div id="table-default" class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>
                                <button class="table-sort text-center" data-sort="">تصویر محصول</button>
                            </th>
                            <th>
                                <button class="table-sort text-center" data-sort="">نام محصول</button>
                            </th>
                            <th>
                                <button class="table-sort text-center" data-sort="">شناسه محصول</button>
                            </th>
                            <th>
                                <button class="table-sort text-center" data-sort="">فروشنده محصول</button>
                            </th>
                            <th>
                                <button class="table-sort text-center" data-sort="sort-type">نوع محصول</button>
                            </th>
                            <th>
                                <button class="table-sort text-center" data-sort="sort-price">قیمت (ریال)</button>
                            </th>
                            <th>
                                <button class="table-sort text-center" data-sort="sort-progress">عملیات</button>
                            </th>
                        </tr>
                        </thead>
                        <tbody class="table-tbody">
                        @foreach($products as $product)
                            <tr>
                                <td class="sort-name text-center">
                                    <img src="#">
                                </td>
                                <td>
                                    {{$product['title']}}
                                </td>
                                <td></td>
                                <td class="sort-city text-center">

                                </td>
                                <td class="sort-type text-center">
                                    {{$product['type']}}
                                </td>
                                <td class="sort-score text-center">
                                    {{@number_format($product['price'])}}
                                </td>
                                <td class="text-center">
                                    <a class="btn btn-sm btn-4 btn-primary p-2 mb-2 btn_radius_5">
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/edit -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                             class="icon icon-2">
                                            <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                                            <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
                                            <path d="M16 5l3 3"></path>
                                        </svg>
                                        ویرایش محصول
                                    </a>
                                    <a class="btn btn-sm btn-4 btn-danger p-2 mb-2 btn_radius_5">
                                            <!-- Download SVG icon from http://tabler.io/icons/icon/trash -->
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                 stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-2">
                                                <path d="M4 7l16 0"></path><path d="M10 11l0 6"></path>
                                                <path d="M14 11l0 6"></path><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                                <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                            </svg>
                                        حذف محصول
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                const list = new List('table-default', {
                    sortClass: 'table-sort',
                    listClass: 'table-tbody',
                    valueNames: ['sort-name', 'sort-type', 'sort-city', 'sort-score',
                        {attr: 'data-date', name: 'sort-date'},
                        {attr: 'data-progress', name: 'sort-progress'},
                        'sort-quantity'
                    ]
                });
            })
        </script>
    </div>
@endsection
