<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link rel="stylesheet" type="text/css" href="{{ url('/assets/dist/css/styles.css') }}">
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body style="background-image: url('img/background.jpg'); background-repeat: no-repeat;" class="sb-nav-fixed">
        @include('layouts.navbar')
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                @include('layouts.sidebar')
            </div>
            <div id="layoutSidenav_content">
                <main>
                    @yield('content')
                </main>
                    @include('layouts.footer')
            </div>
        </div>
        @yield('script')
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{url('assets/dist/js/scripts.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{url('assets/dist/assets/demo/chart-area-demo.js')}}"></script>
        <script src="{{url('assets/dist/assets/demo/chart-bar-demo.js')}}"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="{{url('assets/dist/assets/demo/datatables-demo.js')}}"></script>
    </body>
</html>
