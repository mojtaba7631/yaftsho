@extends('base.base_layout_admin_dashboard')

@section('title')
    مدیریت محصولات
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
                                <button class="table-sort" data-sort="sort-type">Type</button>
                            </th>
                            <th>
                                <button class="table-sort" data-sort="sort-score">Score</button>
                            </th>
                            <th>
                                <button class="table-sort" data-sort="sort-date">Date</button>
                            </th>
                            <th>
                                <button class="table-sort" data-sort="sort-quantity">Quantity</button>
                            </th>
                            <th>
                                <button class="table-sort" data-sort="sort-progress">عملیات</button>
                            </th>
                        </tr>
                        </thead>
                        <tbody class="table-tbody">
                        @foreach($products as $product)
                            <tr>
                                <td class="sort-name">Steel Vengeance</td>
                                <td class="sort-city">Cedar Point, United States</td>
                                <td class="sort-type">RMC Hybrid</td>
                                <td class="sort-score">100,0%</td>
                                <td class="sort-date" data-date="1730273409">October 30, 2024</td>
                                <td class="sort-quantity">74</td>
                                <td class="sort-progress" data-progress="30">
                                    <div class="row align-items-center">
                                        <div class="col-12 col-lg-auto">30%</div>
                                        <div class="col">
                                            <div class="progress progress-2" style="width: 5rem">
                                                <div class="progress-bar" style="width: 30%" role="progressbar"
                                                     aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"
                                                     aria-label="30% Complete">
                                                    <span class="visually-hidden">30% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
