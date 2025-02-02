@extends('base.base_layout_admin_dashboard')

@section('title')
    مدیریت محصولات
@endsection

@section('custom_js')
    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });
    </script>
@endsection

@section('dashboard_content')
    <div class="container-xl">
        <div class="card">
            <div class="card-body p-0">
                <div id="table-default" class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>
                                <button class="table-sort" data-sort="sort-name">تصویر محصول</button>
                            </th>
                            <th>
                                <button class="table-sort" data-sort="sort-city">نام محصول</button>
                            </th>
                            <th>
                                <button class="table-sort" data-sort="sort-type">نوع محصول</button>
                            </th>
                            <th>
                                <button class="table-sort" data-sort="sort-score">قیمت</button>
                            </th>


                            <th>
                                <button class="table-sort" data-sort="sort-progress">عملیات</button>
                            </th>
                        </tr>
                        </thead>
                        <tbody class="table-tbody">
                        @foreach($products as $product)
                            <tr>
                                <td class="sort-name"><img src="#"></td>
                                <td class="sort-city">{{$product['title']}}</td>
                                <td class="sort-type">{{$product['type']}}</td>
                                <td class="sort-score">{{@number_format($product['price'])}}</td>
                                <td>

                                </td>
                                <td class="sort-progress">
                                    <button class="btn btn-sm btn-primary">
                                        ویرایش محصول
                                    </button>
                                    <button class="btn btn-sm btn-danger">
                                        حذف محصول
                                    </button>
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

    <div id="summernote"></div>

@endsection
