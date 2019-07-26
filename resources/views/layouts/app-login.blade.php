<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Login | Virtual Chatpanel</title>

        <!--Bootstrap css -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
        <!--Datatables css -->            
        <link rel="stylesheet" type="text/css" href="{{asset('css/dataTables.bootstrap4.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{asset('css/buttons.bootstrap4.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{asset('css/rowReorder.bootstrap4.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{asset('css/colReorder.bootstrap4.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{asset('css/scroller.bootstrap4.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{asset('css/datatables_custom.css')}}">
        <!-- Sweetalert css -->            
        <link rel="stylesheet" type="text/css" href="{{asset('css/sweetalert2.min.css')}}">
        <!-- Custom Login CSS -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/loginCustom.css')}}">

    </head>
    <body>
        <div class="container-fluid">
            <div class="row no-gutter">
                <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
                <div class="for-login col-md-8 col-lg-6">
                    <div class="login d-flex align-items-center py-5">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-9 col-lg-8 mx-auto">
                                    <h3 class="login-heading mb-4 text-center">Start your chat!</h3>
                                    <!-- This Content only accept for Login and Register -->
                                    @yield('content')

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- global js -->
            <script src="{{ asset('js/jquery.slim.js') }}"></script>
            <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
            <script type="text/javascript" src="{{asset('js/datatables/jquery.dataTables.js')}}"></script>
            <script type="text/javascript" src="{{asset('js/datatables/dataTables.bootstrap4.js')}}"></script>
            <script type="text/javascript" src="{{asset('js/datatables/dataTables.rowReorder.js')}}"></script>
            <script type="text/javascript" src="{{asset('js/datatables/dataTables.scroller.js')}}"></script>
            <script type="text/javascript" src="{{asset('js/select2/select2.full.min.js')}}"></script>
            <script type="text/javascript" src="{{asset('js/sweetalert2/sweetalert2.min.js')}}"></script>
            <script type="text/javascript">
                $(document).ready(function () {
                    const imageUrl = '{{ asset("img/background-login.jpg") }}';
                    $('.bg-image').css('background-image', 'url(' + imageUrl + ')');
                });
            </script>
        <!-- end of global js -->
    </body>
</html>