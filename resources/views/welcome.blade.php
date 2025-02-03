@extends('base.base_layout_admin_dashboard')

@section('title')
    title
@endsection

@section('custom_css')
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.css" rel="stylesheet">
@endsection

@section('custom_js')
{{--    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>--}}
{{--    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>--}}
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });

        // $(document).ready(function (){
        //     let options = {
        //         selector: '#tinymce-mytextarea',
        //         height: 300,
        //         menubar: false,
        //         statusbar: false,
        //         license_key: 'gpl',
        //         plugins: [
        //             'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview', 'anchor',
        //             'searchreplace', 'visualblocks', 'code', 'fullscreen',
        //             'insertdatetime', 'media', 'table', 'code', 'help', 'wordcount'
        //         ],
        //         toolbar: 'undo redo | formatselect | ' +
        //             'bold italic backcolor | alignleft aligncenter ' +
        //             'alignright alignjustify | bullist numlist outdent indent | ' +
        //             'removeformat',
        //         content_style: 'body { font-family: -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif; font-size: 14px; -webkit-font-smoothing: antialiased; }'
        //     }
        //     if (localStorage.getItem("tablerTheme") === 'dark') {
        //         options.skin = 'oxide-dark';
        //         options.content_css = 'dark';
        //     }
        //     tinyMCE.init(options);
        //
        // })
    </script>

@endsection

@section('content')
   <div class="container">
       <div class="row">
           <div class="col-12">
               <div id="summernote">Hello Summernote</div>
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
       </div>
   </div>
@endsection
