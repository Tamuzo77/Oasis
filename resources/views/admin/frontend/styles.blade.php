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