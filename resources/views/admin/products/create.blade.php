@extends('base.base_layout_admin_dashboard')

@section('title')
    افزودن محصول جدید
@endsection
@section('custom_css')
    <style>

    </style>
@endsection
@section('custom_js')
    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });
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
                        افزودن محصول جدید
                    </h2>
                </div>
                <!-- Page title actions -->
                <div class="col-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <a href="{{route('admin.products')}}" class="btn btn-6 btn-outline-danger active line_height_25">
                            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"
                                  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"
                                  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-back-up">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M9 14l-4 -4l4 -4" />
                                <path d="M5 10h11a4 4 0 1 1 0 8h-1" />
                            </svg>
                            بازگشت به لیست محصولات
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

