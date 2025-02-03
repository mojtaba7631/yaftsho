@extends('base.base_layout_admin_dashboard')

@section('title')
    افزودن محصول جدید
@endsection
@section('custom_css')
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
    <script>
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
                                <div class="mb-3">
                                    <label class="form-label">توضیحات محصول</label>
                                    <form method="post">
                                        <textarea id="tinymce-mytextarea" aria-hidden="true" style="display: none;">Hello, &lt;b&gt;Tabler&lt;/b&gt;!</textarea>
                                        <div role="application" class="tox tox-tinymce" aria-disabled="false"
                                             style="visibility: hidden; height: 300px;">
                                            <div class="tox-editor-container">
                                                <div data-alloy-vertical-dir="toptobottom" class="tox-editor-header">
                                                    <div role="group" class="tox-toolbar-overlord"
                                                         aria-disabled="false">
                                                        <div role="group" class="tox-toolbar__primary">
                                                            <div title="" role="toolbar" data-alloy-tabstop="true"
                                                                 tabindex="-1" class="tox-toolbar__group">
                                                                <button aria-label="Undo" data-mce-name="undo"
                                                                        type="button" tabindex="-1"
                                                                        class="tox-tbtn tox-tbtn--disabled"
                                                                        aria-disabled="true" style="width: 34px;"><span
                                                                        class="tox-icon tox-tbtn__icon-wrap"><svg
                                                                            width="24" height="24" focusable="false"><path
                                                                                d="M6.4 8H12c3.7 0 6.2 2 6.8 5.1.6 2.7-.4 5.6-2.3 6.8a1 1 0 0 1-1-1.8c1.1-.6 1.8-2.7 1.4-4.6-.5-2.1-2.1-3.5-4.9-3.5H6.4l3.3 3.3a1 1 0 1 1-1.4 1.4l-5-5a1 1 0 0 1 0-1.4l5-5a1 1 0 0 1 1.4 1.4L6.4 8Z"
                                                                                fill-rule="nonzero"></path></svg></span>
                                                                </button>
                                                                <button aria-label="Redo" data-mce-name="redo"
                                                                        type="button" tabindex="-1"
                                                                        class="tox-tbtn tox-tbtn--disabled"
                                                                        aria-disabled="true" style="width: 34px;"><span
                                                                        class="tox-icon tox-tbtn__icon-wrap"><svg
                                                                            width="24" height="24" focusable="false"><path
                                                                                d="M17.6 10H12c-2.8 0-4.4 1.4-4.9 3.5-.4 2 .3 4 1.4 4.6a1 1 0 1 1-1 1.8c-2-1.2-2.9-4.1-2.3-6.8.6-3 3-5.1 6.8-5.1h5.6l-3.3-3.3a1 1 0 1 1 1.4-1.4l5 5a1 1 0 0 1 0 1.4l-5 5a1 1 0 0 1-1.4-1.4l3.3-3.3Z"
                                                                                fill-rule="nonzero"></path></svg></span>
                                                                </button>
                                                            </div>
                                                            <div title="" role="toolbar" data-alloy-tabstop="true"
                                                                 tabindex="-1" class="tox-toolbar__group">
                                                                <button aria-label="Bold" data-mce-name="bold"
                                                                        type="button" tabindex="-1" class="tox-tbtn"
                                                                        aria-disabled="false" aria-pressed="false"
                                                                        style="width: 34px;"><span
                                                                        class="tox-icon tox-tbtn__icon-wrap"><svg
                                                                            width="24" height="24" focusable="false"><path
                                                                                d="M7.8 19c-.3 0-.5 0-.6-.2l-.2-.5V5.7c0-.2 0-.4.2-.5l.6-.2h5c1.5 0 2.7.3 3.5 1 .7.6 1.1 1.4 1.1 2.5a3 3 0 0 1-.6 1.9c-.4.6-1 1-1.6 1.2.4.1.9.3 1.3.6s.8.7 1 1.2c.4.4.5 1 .5 1.6 0 1.3-.4 2.3-1.3 3-.8.7-2.1 1-3.8 1H7.8Zm5-8.3c.6 0 1.2-.1 1.6-.5.4-.3.6-.7.6-1.3 0-1.1-.8-1.7-2.3-1.7H9.3v3.5h3.4Zm.5 6c.7 0 1.3-.1 1.7-.4.4-.4.6-.9.6-1.5s-.2-1-.7-1.4c-.4-.3-1-.4-2-.4H9.4v3.8h4Z"
                                                                                fill-rule="evenodd"></path></svg></span>
                                                                </button>
                                                                <button aria-label="Italic" data-mce-name="italic"
                                                                        type="button" tabindex="-1" class="tox-tbtn"
                                                                        aria-disabled="false" aria-pressed="false"
                                                                        style="width: 34px;"><span
                                                                        class="tox-icon tox-tbtn__icon-wrap"><svg
                                                                            width="24" height="24" focusable="false"><path
                                                                                d="m16.7 4.7-.1.9h-.3c-.6 0-1 0-1.4.3-.3.3-.4.6-.5 1.1l-2.1 9.8v.6c0 .5.4.8 1.4.8h.2l-.2.8H8l.2-.8h.2c1.1 0 1.8-.5 2-1.5l2-9.8.1-.5c0-.6-.4-.8-1.4-.8h-.3l.2-.9h5.8Z"
                                                                                fill-rule="evenodd"></path></svg></span>
                                                                </button>
                                                                <div aria-pressed="false"
                                                                     aria-label="Background color Black"
                                                                     data-mce-name="backcolor" role="button"
                                                                     aria-haspopup="true" tabindex="-1"
                                                                     unselectable="on" class="tox-split-button"
                                                                     aria-disabled="false" aria-expanded="false"
                                                                     aria-describedby="aria_8932430691701738572808543"
                                                                     style="user-select: none;"><span
                                                                        role="presentation" class="tox-tbtn"
                                                                        aria-disabled="false" style="width: 34px;"><span
                                                                            class="tox-icon tox-tbtn__icon-wrap"><svg
                                                                                width="24" height="24"
                                                                                focusable="false"><g
                                                                                    fill-rule="evenodd"><path
                                                                                        class="tox-icon-highlight-bg-color__color"
                                                                                        d="M3 18h18v3H3z"
                                                                                        fill="#000000"></path><path
                                                                                        fill-rule="nonzero"
                                                                                        d="M7.7 16.7H3l3.3-3.3-.7-.8L10.2 8l4 4.1-4 4.2c-.2.2-.6.2-.8 0l-.6-.7-1.1 1.1zm5-7.5L11 7.4l3-2.9a2 2 0 0 1 2.6 0L18 6c.7.7.7 2 0 2.7l-2.9 2.9-1.8-1.8-.5-.6"></path></g></svg></span></span><span
                                                                        role="presentation"
                                                                        class="tox-tbtn tox-split-button__chevron"
                                                                        aria-disabled="false"><svg width="10"
                                                                                                   height="10"><path
                                                                                d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 0 1 0-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8Z"
                                                                                fill-rule="nonzero"></path></svg></span><span
                                                                        aria-hidden="true" style="display: none;"
                                                                        id="aria_8932430691701738572808543">To open the popup, press Shift+Enter</span>
                                                                </div>
                                                            </div>
                                                            <div title="" role="toolbar" data-alloy-tabstop="true"
                                                                 tabindex="-1" class="tox-toolbar__group">
                                                                <button aria-label="Align left"
                                                                        data-mce-name="alignleft" type="button"
                                                                        tabindex="-1" class="tox-tbtn"
                                                                        aria-disabled="false" aria-pressed="false"
                                                                        style="width: 34px;"><span
                                                                        class="tox-icon tox-tbtn__icon-wrap"><svg
                                                                            width="24" height="24" focusable="false"><path
                                                                                d="M5 5h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 1 1 0-2Zm0 4h8c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 1 1 0-2Zm0 8h8c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 0 1 0-2Zm0-4h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 0 1 0-2Z"
                                                                                fill-rule="evenodd"></path></svg></span>
                                                                </button>
                                                                <button aria-label="Align center"
                                                                        data-mce-name="aligncenter" type="button"
                                                                        tabindex="-1" class="tox-tbtn"
                                                                        aria-disabled="false" aria-pressed="false"
                                                                        style="width: 34px;"><span
                                                                        class="tox-icon tox-tbtn__icon-wrap"><svg
                                                                            width="24" height="24" focusable="false"><path
                                                                                d="M5 5h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 1 1 0-2Zm3 4h8c.6 0 1 .4 1 1s-.4 1-1 1H8a1 1 0 1 1 0-2Zm0 8h8c.6 0 1 .4 1 1s-.4 1-1 1H8a1 1 0 0 1 0-2Zm-3-4h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 0 1 0-2Z"
                                                                                fill-rule="evenodd"></path></svg></span>
                                                                </button>
                                                                <button aria-label="Align right"
                                                                        data-mce-name="alignright" type="button"
                                                                        tabindex="-1" class="tox-tbtn"
                                                                        aria-disabled="false" aria-pressed="false"
                                                                        style="width: 34px;"><span
                                                                        class="tox-icon tox-tbtn__icon-wrap"><svg
                                                                            width="24" height="24" focusable="false"><path
                                                                                d="M5 5h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 1 1 0-2Zm6 4h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 0 1 0-2Zm0 8h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 0 1 0-2Zm-6-4h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 0 1 0-2Z"
                                                                                fill-rule="evenodd"></path></svg></span>
                                                                </button>
                                                                <button aria-label="Justify"
                                                                        data-mce-name="alignjustify" type="button"
                                                                        tabindex="-1" class="tox-tbtn"
                                                                        aria-disabled="false" aria-pressed="false"
                                                                        style="width: 34px;"><span
                                                                        class="tox-icon tox-tbtn__icon-wrap"><svg
                                                                            width="24" height="24" focusable="false"><path
                                                                                d="M5 5h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 1 1 0-2Zm0 4h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 1 1 0-2Zm0 4h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 0 1 0-2Zm0 4h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 0 1 0-2Z"
                                                                                fill-rule="evenodd"></path></svg></span>
                                                                </button>
                                                            </div>
                                                            <div title="" role="toolbar" data-alloy-tabstop="true"
                                                                 tabindex="-1" class="tox-toolbar__group">
                                                                <div aria-pressed="false" aria-label="Bullet list"
                                                                     data-mce-name="bullist" role="button"
                                                                     aria-haspopup="true" tabindex="-1"
                                                                     unselectable="on" class="tox-split-button"
                                                                     aria-disabled="false" aria-expanded="false"
                                                                     aria-describedby="aria_978297081711738572808550"
                                                                     style="user-select: none;"><span
                                                                        role="presentation" class="tox-tbtn"
                                                                        aria-disabled="false" style="width: 34px;"><span
                                                                            class="tox-icon tox-tbtn__icon-wrap"><svg
                                                                                width="24" height="24"
                                                                                focusable="false"><path
                                                                                    d="M11 5h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 0 1 0-2Zm0 6h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 0 1 0-2Zm0 6h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 0 1 0-2ZM4.5 6c0-.4.1-.8.4-1 .3-.4.7-.5 1.1-.5.4 0 .8.1 1 .4.4.3.5.7.5 1.1 0 .4-.1.8-.4 1-.3.4-.7.5-1.1.5-.4 0-.8-.1-1-.4-.4-.3-.5-.7-.5-1.1Zm0 6c0-.4.1-.8.4-1 .3-.4.7-.5 1.1-.5.4 0 .8.1 1 .4.4.3.5.7.5 1.1 0 .4-.1.8-.4 1-.3.4-.7.5-1.1.5-.4 0-.8-.1-1-.4-.4-.3-.5-.7-.5-1.1Zm0 6c0-.4.1-.8.4-1 .3-.4.7-.5 1.1-.5.4 0 .8.1 1 .4.4.3.5.7.5 1.1 0 .4-.1.8-.4 1-.3.4-.7.5-1.1.5-.4 0-.8-.1-1-.4-.4-.3-.5-.7-.5-1.1Z"
                                                                                    fill-rule="evenodd"></path></svg></span></span><span
                                                                        role="presentation"
                                                                        class="tox-tbtn tox-split-button__chevron"
                                                                        aria-disabled="false"><svg width="10"
                                                                                                   height="10"><path
                                                                                d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 0 1 0-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8Z"
                                                                                fill-rule="nonzero"></path></svg></span><span
                                                                        aria-hidden="true" style="display: none;"
                                                                        id="aria_978297081711738572808550">To open the popup, press Shift+Enter</span>
                                                                </div>
                                                                <div aria-pressed="false" aria-label="Numbered list"
                                                                     data-mce-name="numlist" role="button"
                                                                     aria-haspopup="true" tabindex="-1"
                                                                     unselectable="on" class="tox-split-button"
                                                                     aria-disabled="false" aria-expanded="false"
                                                                     aria-describedby="aria_1380119521721738572808551"
                                                                     style="user-select: none;"><span
                                                                        role="presentation" class="tox-tbtn"
                                                                        aria-disabled="false" style="width: 34px;"><span
                                                                            class="tox-icon tox-tbtn__icon-wrap"><svg
                                                                                width="24" height="24"
                                                                                focusable="false"><path
                                                                                    d="M10 17h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 0 1 0-2Zm0-6h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 0 1 0-2Zm0-6h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 1 1 0-2ZM6 4v3.5c0 .3-.2.5-.5.5a.5.5 0 0 1-.5-.5V5h-.5a.5.5 0 0 1 0-1H6Zm-1 8.8.2.2h1.3c.3 0 .5.2.5.5s-.2.5-.5.5H4.9a1 1 0 0 1-.9-1V13c0-.4.3-.8.6-1l1.2-.4.2-.3a.2.2 0 0 0-.2-.2H4.5a.5.5 0 0 1-.5-.5c0-.3.2-.5.5-.5h1.6c.5 0 .9.4.9 1v.1c0 .4-.3.8-.6 1l-1.2.4-.2.3ZM7 17v2c0 .6-.4 1-1 1H4.5a.5.5 0 0 1 0-1h1.2c.2 0 .3-.1.3-.3 0-.2-.1-.3-.3-.3H4.4a.4.4 0 1 1 0-.8h1.3c.2 0 .3-.1.3-.3 0-.2-.1-.3-.3-.3H4.5a.5.5 0 1 1 0-1H6c.6 0 1 .4 1 1Z"
                                                                                    fill-rule="evenodd"></path></svg></span></span><span
                                                                        role="presentation"
                                                                        class="tox-tbtn tox-split-button__chevron"
                                                                        aria-disabled="false"><svg width="10"
                                                                                                   height="10"><path
                                                                                d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 0 1 0-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8Z"
                                                                                fill-rule="nonzero"></path></svg></span><span
                                                                        aria-hidden="true" style="display: none;"
                                                                        id="aria_1380119521721738572808551">To open the popup, press Shift+Enter</span>
                                                                </div>
                                                                <button aria-label="Decrease indent"
                                                                        data-mce-name="outdent" type="button"
                                                                        tabindex="-1"
                                                                        class="tox-tbtn tox-tbtn--disabled"
                                                                        aria-disabled="true" style="width: 34px;"><span
                                                                        class="tox-icon tox-tbtn__icon-wrap"><svg
                                                                            width="24" height="24" focusable="false"><path
                                                                                d="M7 5h12c.6 0 1 .4 1 1s-.4 1-1 1H7a1 1 0 1 1 0-2Zm5 4h7c.6 0 1 .4 1 1s-.4 1-1 1h-7a1 1 0 0 1 0-2Zm0 4h7c.6 0 1 .4 1 1s-.4 1-1 1h-7a1 1 0 0 1 0-2Zm-5 4h12a1 1 0 0 1 0 2H7a1 1 0 0 1 0-2Zm1.6-3.8a1 1 0 0 1-1.2 1.6l-3-2a1 1 0 0 1 0-1.6l3-2a1 1 0 0 1 1.2 1.6L6.8 12l1.8 1.2Z"
                                                                                fill-rule="evenodd"></path></svg></span>
                                                                </button>
                                                                <button aria-label="Increase indent"
                                                                        data-mce-name="indent" type="button"
                                                                        tabindex="-1" class="tox-tbtn"
                                                                        aria-disabled="false" style="width: 34px;"><span
                                                                        class="tox-icon tox-tbtn__icon-wrap"><svg
                                                                            width="24" height="24" focusable="false"><path
                                                                                d="M7 5h12c.6 0 1 .4 1 1s-.4 1-1 1H7a1 1 0 1 1 0-2Zm5 4h7c.6 0 1 .4 1 1s-.4 1-1 1h-7a1 1 0 0 1 0-2Zm0 4h7c.6 0 1 .4 1 1s-.4 1-1 1h-7a1 1 0 0 1 0-2Zm-5 4h12a1 1 0 0 1 0 2H7a1 1 0 0 1 0-2Zm-2.6-3.8L6.2 12l-1.8-1.2a1 1 0 0 1 1.2-1.6l3 2a1 1 0 0 1 0 1.6l-3 2a1 1 0 1 1-1.2-1.6Z"
                                                                                fill-rule="evenodd"></path></svg></span>
                                                                </button>
                                                            </div>
                                                            <div title="" role="toolbar" data-alloy-tabstop="true"
                                                                 tabindex="-1" class="tox-toolbar__group">
                                                                <button aria-label="Clear formatting"
                                                                        data-mce-name="removeformat" type="button"
                                                                        tabindex="-1" class="tox-tbtn"
                                                                        aria-disabled="false" style="width: 34px;"><span
                                                                        class="tox-icon tox-tbtn__icon-wrap"><svg
                                                                            width="24" height="24" focusable="false"><path
                                                                                d="M13.2 6a1 1 0 0 1 0 .2l-2.6 10a1 1 0 0 1-1 .8h-.2a.8.8 0 0 1-.8-1l2.6-10H8a1 1 0 1 1 0-2h9a1 1 0 0 1 0 2h-3.8ZM5 18h7a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Zm13 1.5L16.5 18 15 19.5a.7.7 0 0 1-1-1l1.5-1.5-1.5-1.5a.7.7 0 0 1 1-1l1.5 1.5 1.5-1.5a.7.7 0 0 1 1 1L17.5 17l1.5 1.5a.7.7 0 0 1-1 1Z"
                                                                                fill-rule="evenodd"></path></svg></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tox-anchorbar"></div>
                                                </div>
                                                <div class="tox-sidebar-wrap">
                                                    <div class="tox-edit-area">
                                                        <iframe id="tinymce-mytextarea_ifr" frameborder="0"
                                                                allowtransparency="true" title="Rich Text Area"
                                                                class="tox-edit-area__iframe"
                                                                srcdoc="<!DOCTYPE html><html><head><meta http-equiv=&quot;Content-Type&quot; content=&quot;text/html; charset=UTF-8&quot; /></head><body id=&quot;tinymce&quot; class=&quot;mce-content-body &quot; data-id=&quot;tinymce-mytextarea&quot; aria-label=&quot;Rich Text Area. Press ALT-0 for help.&quot;><br></body></html>"></iframe>
                                                    </div>
                                                    <div role="presentation" class="tox-sidebar">
                                                        <div data-alloy-tabstop="true" tabindex="-1"
                                                             class="tox-sidebar__slider tox-sidebar--sliding-closed"
                                                             style="width: 0px;">
                                                            <div class="tox-sidebar__pane-container"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tox-bottom-anchorbar"></div>
                                            </div>
                                            <div aria-hidden="true" class="tox-view-wrap" style="display: none;">
                                                <div class="tox-view-wrap__slot-container"></div>
                                            </div>
                                            <div aria-hidden="true" class="tox-throbber" style="display: none;"></div>
                                        </div>
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

