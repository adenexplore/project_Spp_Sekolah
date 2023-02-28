<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SPP- @yield('title')</title>

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="{{ asset('assets2/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    {{-- <script src="https://cdn.tiny.cloud/1/i62phsrg4132j4da2r91942mcx3wfzykskhlfuoqa7khhqn5/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script> --}}
    <!-- Custom styles for this template-->
    <link href="{{ asset('assets2/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets2/vendor/datatables/dataTables.bootstrap4.min.css"') }}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
                <div class="sidebar-brand-icon rotate-n-0">
                    <i class="fas fa-spa"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SPP</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="{{ request()->is(strtolower(Auth::user()->role)) ? 'active' : '' }} nav-item">
                <a class="nav-link" href="/dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard {{ Auth::user()->role }}</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Data
            </div>
            @if(Auth::user()->role !='Siswa')
            <li class="nav-item">
                <a class="nav-link collapsed" href="/pembayaran">
                    <i class="fa-solid fa-money-bill"></i>
                    <span>Transaksi Pembayaran</span>
                </a>
            </li>
            @if(Auth::user()->role !='Petugas')
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="/siswa">
                    <i class="fas fa-user"></i>
                    <span>Siswa</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="/petugas">
                    <i class="fa-solid fa-users"></i>
                    <span>Petugas</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="/spp">
                    <i class="fa-solid fa-file"></i>
                    <span>SPP</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="/kelas">
                    <i class="fa-solid fa-square-h"></i>
                    <span>Kelas</span>
                </a>
            </li>
           
            <li class="nav-item">
                <a class="nav-link collapsed" href="/laporan">
                    <i class="fa-solid fa-book"></i>
                    <span>Laporan Spp</span>
                </a>
            </li>
            @endif
            @endif
            <li class="nav-item">
                <a class="nav-link collapsed" href="/histori">
                    <i class="fa-solid fa-timeline"></i>
                    <span>Histori Pembayaran</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    <span>Logout</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>



        </ul>



        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="{{ route('logout') }}">Logout</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <br>
                <div class="container">
                    <section class="content">
                        @yield('content')
                    </section>
                </div>
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; SPP 2023</span>
                    </div>
                </div>
            </footer>
        </div>
    </div>


    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('assets2/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets2/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('assets2/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('assets2/js/sb-admin-2.min.js') }}"></script>
    <!-- Page level plugins -->
    <script src="{{ asset('assets2/vendor/chart.js/Chart.min.js') }}"></script>
    <!-- Datatables -->

    <!-- Page level custom scripts -->
    <script src="{{ asset('assets2/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('assets2/js/demo/chart-pie-demo.js') }}"></script>
    <script src="{{ asset('assets2/js/demo/datatables-demo.js') }}"></script>

    {{-- ck editor --}}
    <script type="text/javascript" src="{{ asset('assets2/ckeditor/ckeditor.js') }}"></script>


    {{-- inputan --}}
    <script src="{{ asset('assets2/js/input.js') }}"></script>

    <!-- Custom styles for this page -->
    <script src="{{ asset('assets2/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <link href="{{ asset('assets2/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>
    @yield('cjs')

    
</body>

</html>

