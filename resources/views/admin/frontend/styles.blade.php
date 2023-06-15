<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-M8S4MT3EYG"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-M8S4MT3EYG');
</script>

<!-- Favicon icon-->
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin/assets/images/favicon/favicon.ico') }}">


<!-- Libs CSS -->
<link href="{{ asset('admin/assets/libs/bootstrap-icons/font/bootstrap-icons.css') }}" rel="stylesheet">
<link href="{{ asset('admin/assets/libs/%40mdi/font/css/materialdesignicons.min.css') }}" rel="stylesheet">
<link href="{{ asset('admin/assets/libs/simplebar/dist/simplebar.min.css') }}" rel="stylesheet">



<!-- Theme CSS -->
<link rel="stylesheet" href="{{ asset('admin/assets/css/theme.min.css') }}">

@if (request()->is('admin/actualites/categories'))
<link href="{{ asset('admin/assets/libs/prismjs/themes/prism-okaidia.min.css') }}" rel="stylesheet">
@endif


<link href="{{ asset('admin/assets/libs/dropzone/dist/dropzone.css') }}" rel="stylesheet">
<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />

<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>