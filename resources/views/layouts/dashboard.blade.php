<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Dashboard Vehicule</title>

        <!-- Style css Livewire -->
        @livewireStyles

         <!-- CDN adminlte-->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- adminlte -->
        <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>

        <!-- Tailwindcss -->
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="hold-transition sidebar-mini">
        <div class="wrapper">

            <!--view/components/Navbar -->     
            <x-navbar></x-navbar>

            <!-- view/components/Menu  --> 
            <x-menu></x-menu>


            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Main content -->
                <div class="content">
                <div class="container-fluid">
                
                    @yield('contenu')

                    <!-- /.row -->
                </div><!-- /.container-fluid -->
                </div>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            
           
            <!-- view/components/Sidebar -->
                <x-sidebar></x-sidebar>
            <!-- /.control-sidebar -->



            <!-- Scripts js Livewire -->
            @livewireScripts
               
            
        </div>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    
    </body>
</html>