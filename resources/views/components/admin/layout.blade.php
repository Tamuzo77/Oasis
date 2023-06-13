@props(['title'])
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from dashui.codescandy.com/dashuipro/pages/dashboard-analytics.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Jun 2023 13:33:32 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Codescandy">

    @include('admin.frontend.styles')
    <title>Admin | {{ $title ?? 'Titre oublié !' }}</title>
</head>

<body>
    <main id="main-wrapper" class="main-wrapper">
        @include('admin.partials._navbar')
        <!-- navbar vertical -->

        <!-- Sidebar -->
        @include('admin.partials._sidebar')




        <!-- page content -->
        <div id="app-content">

            <div class="app-content-area">


                <div class="container-fluid">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </main>



    @include('admin.frontend.scripts')
</body>


<!-- Mirrored from dashui.codescandy.com/dashuipro/pages/dashboard-analytics.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Jun 2023 13:33:41 GMT -->

</html>
