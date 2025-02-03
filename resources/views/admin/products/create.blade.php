@extends('base.base_layout_admin_dashboard')

@section('title')
    افزودن محصول جدید
@endsection
@section('custom_css')
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.css" rel="stylesheet">

    <style>
        .btn_radius_5 {
            border-radius: 5px;
        }
        .p_r_l_padding{
            padding-left: 10px !important;
            padding-right: 10px !important;
        }
    </style>
@endsection
@section('custom_js')
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.js"></script>


    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });

        $(document).ready(function () {
            $('#summernote').summernote();
        });

        document.addEventListener("DOMContentLoaded", function () {

            new Dropzone("#dropzone-default");

            var el;
            window.TomSelect && (new TomSelect(el = document.getElementById('select-states'), {
                copyClassesToDropdown: false,
                dropdownParent: 'body',
                controlInput: '<input>',
                render: {
                    item: function (data, escape) {
                        if (data.customProperties) {
                            return '<div><span class="dropdown-item-indicator">' + data.customProperties + '</span>' + escape(data.text) + '</div>';
                        }
                        return '<div>' + escape(data.text) + '</div>';
                    },
                    option: function (data, escape) {
                        if (data.customProperties) {
                            return '<div><span class="dropdown-item-indicator">' + data.customProperties + '</span>' + escape(data.text) + '</div>';
                        }
                        return '<div>' + escape(data.text) + '</div>';
                    },
                },
            }));


            let options = {
                selector: '#tinymce-mytextarea',
                height: 300,
                menubar: false,
                statusbar: false,
                license_key: 'gpl',
                plugins: [
                    'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview', 'anchor',
                    'searchreplace', 'visualblocks', 'code', 'fullscreen',
                    'insertdatetime', 'media', 'table', 'code', 'help', 'wordcount'
                ],
                toolbar: 'undo redo | formatselect | ' +
                    'bold italic backcolor | alignleft aligncenter ' +
                    'alignright alignjustify | bullist numlist outdent indent | ' +
                    'removeformat',
                content_style: 'body { font-family: -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif; font-size: 14px; -webkit-font-smoothing: antialiased; }'
            }
            if (localStorage.getItem("tablerTheme") === 'dark') {
                options.skin = 'oxide-dark';
                options.content_css = 'dark';
            }
            tinyMCE.init(options);

            var wl;
            window.TomSelect && (new TomSelect(wl = document.getElementById('select-tags'), {
                copyClassesToDropdown: false,
                dropdownParent: 'body',
                controlInput: '<input>',
                render: {
                    item: function (data, escape) {
                        if (data.customProperties) {
                            return '<div><span class="dropdown-item-indicator">' + data.customProperties + '</span>' + escape(data.text) + '</div>';
                        }
                        return '<div>' + escape(data.text) + '</div>';
                    },
                    option: function (data, escape) {
                        if (data.customProperties) {
                            return '<div><span class="dropdown-item-indicator">' + data.customProperties + '</span>' + escape(data.text) + '</div>';
                        }
                        return '<div>' + escape(data.text) + '</div>';
                    },
                },
            }));

        })

        function formatNumber(input) {
            // حذف همه کاراکترهای غیر از عدد
            let value = input.value.replace(/\D/g, '');

            // جدا کردن اعداد به صورت سه‌رقمی
            value = value.replace(/\B(?=(\d{3})+(?!\d))/g, ',');

            // تنظیم مقدار جدید در input
            input.value = value;
        }

    </script>
@endsection

@section('dashboard_content')
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="card">
            <div class="card-body">
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
                                <a href="{{route('admin.products')}}"
                                   class="btn btn-sm p-2 btn_radius_5 btn-6 btn-outline-danger active line_height_25">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round"
                                         class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-back-up">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M9 14l-4 -4l4 -4"/>
                                        <path d="M5 10h11a4 4 0 1 1 0 8h-1"/>
                                    </svg>
                                    بازگشت به لیست محصولات
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container-xl">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="mb-3 alert alert-info">
                            <div class="form-label ">انتخاب نوع محصول</div>
                            <label class="form-check form-switch form-switch-2">
                                <input class="form-check-input" type="checkbox">
                                <span class="form-check-label">محصول مجازی</span>
                            </label>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 mt-2 mb-3">
                                    <h3 class="card-title">تصویر محصول</h3>
                                    <form class="dropzone dz-clickable" id="dropzone-default" action="./" autocomplete="off"
                                          novalidate="">
                                        <div class="dz-default dz-message">
                                            <button class="dz-button" type="button">تصویر محصول خود را انتخاب نمایید</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-12 mt-2 mb-3">
                                    <label class="form-check">
                                        <input class="form-check-input" type="checkbox">
                                        <span
                                            class="form-check-label">کاربر در هر سفارش بیشتر از یک بار نتواند خرید کند</span>
                                    </label>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-12 col-md-9">
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">نام محصول</label>
                                    <input type="text" class="form-control" name="title"
                                           placeholder="نام محصول را وارد نمایید">
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">نامک محصول (لاتین)</label>
                                    <input type="text" class="form-control" dir="ltr" name="slug"
                                           placeholder="شامل عدد ، حروف ، کاراکتر">
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">شناسه محصول (لاتین)</label>
                                    <input type="text" class="form-control" dir="ltr" name="slug"
                                           placeholder="شامل عدد ، حروف ، کاراکتر">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <div class="form-label">دسته بندی محصول</div>
                                    <select type="text" class="form-select tomselected ts-hidden-accessible"
                                            id="select-states" value="" multiple="multiple" tabindex="-1">
                                        <option value="AL">Alabama</option>
                                        <option value="DE">Delaware</option>
                                        <option value="FL">Florida</option>
                                        <option value="GA">Georgia</option>
                                        <option value="HI">Hawaii</option>
                                        <option value="ID">Idaho</option>
                                        <option value="IL">Illinois</option>
                                        <option value="IN">Indiana</option>
                                        <option value="IA">Iowa</option>
                                        <option value="KS">Kansas</option>
                                        <option value="KY">Kentucky</option>
                                        <option value="LA">Louisiana</option>
                                        <option value="ME">Maine</option>
                                        <option value="MD">Maryland</option>
                                        <option value="MA">Massachusetts</option>
                                        <option value="MI">Michigan</option>
                                        <option value="MN">Minnesota</option>
                                        <option value="MS">Mississippi</option>
                                        <option value="MO">Missouri</option>
                                        <option value="MT">Montana</option>
                                        <option value="NE">Nebraska</option>
                                        <option value="NV">Nevada</option>
                                        <option value="NH">New Hampshire</option>
                                        <option value="NJ">New Jersey</option>
                                        <option value="NM">New Mexico</option>
                                        <option value="NY">New York</option>
                                        <option value="NC">North Carolina</option>
                                        <option value="ND">North Dakota</option>
                                        <option value="OH">Ohio</option>
                                        <option value="OK">Oklahoma</option>
                                        <option value="OR">Oregon</option>
                                        <option value="PA">Pennsylvania</option>
                                        <option value="RI">Rhode Island</option>
                                        <option value="SD">South Dakota</option>
                                        <option value="TN">Tennessee</option>
                                        <option value="TX">Texas</option>
                                        <option value="UT">Utah</option>
                                        <option value="VT">Vermont</option>
                                        <option value="VA">Virginia</option>
                                        <option value="WA">Washington</option>
                                        <option value="WV">West Virginia</option>
                                        <option value="WI">Wisconsin</option>
                                        <option value="AZ" selected="">Arizona</option>
                                        <option value="SC" selected="">South Carolina</option>
                                        <option value="WY" selected="">Wyoming</option>
                                        <option value="AK">Alaska</option>
                                        <option value="CA">California</option>
                                        <option value="CT">Connecticut</option>
                                        <option value="DC">District of Columbia</option>
                                        <option value="CO">Colorado</option>
                                        <option value="AR">Arkansas</option>
                                    </select>
                                    <div class="ts-wrapper form-select multi has-items">
                                        <div class="ts-control">
                                            <div data-value="AR" class="item" data-ts-item="">Arkansas</div>
                                            <input tabindex="0" role="combobox" aria-haspopup="listbox"
                                                   aria-expanded="false"
                                                   aria-controls="select-states-ts-dropdown"
                                                   id="select-states-ts-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">موجودی</label>
                                    <input type="text" class="form-control" dir="ltr" name="slug"
                                           placeholder="تعداد موجودی انبار">
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">قیمت عادی (ریال)</label>
                                    <input type="text" class="form-control" dir="ltr" name="slug"
                                           placeholder="قیمت را به ریال وارد کنید"
                                           oninput="formatNumber(this)">
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">قیمت فروش ویژه (ریال)</label>
                                    <input type="text" class="form-control" dir="ltr" name="slug"
                                           placeholder="قیمت را به ریال وارد کنید"
                                           oninput="formatNumber(this)">
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="mb-3">
                                    <label class="form-label">وزن</label>
                                    <input type="text" class="form-control" dir="ltr" name="slug">
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="mb-3">
                                    <label class="form-label">طول</label>
                                    <input type="text" class="form-control" dir="ltr" name="slug">
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="mb-3">
                                    <label class="form-label">عرض</label>
                                    <input type="text" class="form-control" dir="ltr" name="slug">
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="mb-3">
                                    <label class="form-label">ارتفاع</label>
                                    <input type="text" class="form-control" dir="ltr" name="slug">
                                </div>
                            </div>
                            <div class="col-12 col-md-12">
                                <div id="summernote" class="mb-3">
                                    <label class="form-label">توضیحات محصول</label>
                                    <form method="post">
                                        <textarea aria-hidden="true" style="display: none;">Hello, &lt;b&gt;Tabler&lt;/b&gt;!</textarea>
                                    </form>
                                </div>
                            </div>
                            <div class="col-12 col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">برچسب ها</label>
                                    <select type="text" class="form-select tomselected ts-hidden-accessible"
                                            placeholder="Select tags" id="select-tags" value="" multiple="multiple"
                                            tabindex="-1">
                                        <option value="HTML">HTML</option>
                                        <option value="CSS">CSS</option>
                                        <option value="Bootstrap">Bootstrap</option>
                                        <option value="Python">Python</option>
                                        <option value="JavaScript">JavaScript</option>
                                        <option value="jQuery">jQuery</option>
                                        <option value="Ruby">Ruby</option>
                                    </select>
                                    <div class="ts-wrapper form-select multi has-items">
                                        <div class="ts-control">
                                            <div data-value="JavaScript" class="item" data-ts-item="">
                                                JavaScript
                                            </div>
                                            <div data-value="jQuery" class="item" data-ts-item="">jQuery</div>
                                            <div data-value="Ruby" class="item" data-ts-item="">Ruby</div>
                                            <input tabindex="0" role="combobox" aria-haspopup="listbox"
                                                   aria-expanded="false"
                                                   aria-controls="select-tags-ts-dropdown" id="select-tags-ts-control"
                                                   placeholder="Select tags">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">متای محصول</label>
                                    <input type="text" class="form-control" name="meta_description"
                                           placeholder="متای محصول را بنویسید">
                                </div>
                            </div>
                            <div class="text-left">
                                <a class="btn btn-6 btn-ghost-success active w-25 p_r_l_padding">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="icon icon-2">
                                        <path
                                            d="M4 6c0 1.657 3.582 3 8 3s8 -1.343 8 -3s-3.582 -3 -8 -3s-8 1.343 -8 3"></path>
                                        <path d="M4 6v6c0 1.657 3.582 3 8 3c.21 0 .42 -.003 .626 -.01"></path>
                                        <path d="M20 11.5v-5.5"></path>
                                        <path d="M4 12v6c0 1.657 3.582 3 8 3"></path>
                                        <path d="M19.001 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                        <path d="M19.001 15.5v1.5"></path>
                                        <path d="M19.001 21v1.5"></path>
                                        <path d="M22.032 17.25l-1.299 .75"></path>
                                        <path d="M17.27 20l-1.3 .75"></path>
                                        <path d="M15.97 17.25l1.3 .75"></path>
                                        <path d="M20.733 20l1.3 .75"></path>
                                    </svg>
                                    <span class="ml-4">
                                        ثبت محصول
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

