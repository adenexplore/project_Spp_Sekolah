<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Struk</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="{{ asset('assets2/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    {{-- <script src="https://cdn.tiny.cloud/1/i62phsrg4132j4da2r91942mcx3wfzykskhlfuoqa7khhqn5/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script> --}}
    <!-- Custom styles for this template-->
    <link href="{{ asset('assets2/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets2/vendor/datatables/dataTables.bootstrap4.min.css"') }}" rel="stylesheet">

</head>
<body>
    @if(Auth::user()->role !='Admin')
    <center>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- 404 Error Text -->
                    <div class="text-center" style="margin-top:200px;">
                        <div class="error mx-auto" data-text="404">404</div>
                        <p class="lead text-gray-800 mb-5">Page Not Found</p>
                        <p class="text-gray-500 mb-0">It looks like you found a glitch in the matrix...</p>
                        <a href="{{asset('dashboard')}}">&larr; Back to Dashboard</a>
                    </div>

                </div>
                <!-- /.container-fluid -->

    </center>
@endif
@if(Auth::user()->role !='Siswa')
@if(Auth::user()->role !='Petugas')
    <center><table align="center" cellpadding="5">
        <h3>Struk Spp </h3>
    @foreach ($laporans as $laporan)
        <tr>
        <td><b>ID Petugas</b></td>
        <td>&nbsp;&nbsp;&nbsp;</td>
        <td>:</td>
        <td>&nbsp;&nbsp;&nbsp;</td>
        <td>{{ $laporan->id_petugas }}</td>
    </tr>
    <tr>
        <td><b>Nisn</b></td>
        <td>&nbsp;&nbsp;&nbsp;</td>
        <td>:</td>
        <td>&nbsp;&nbsp;&nbsp;</td>
        <td>{{ $laporan->nisn }}</td>
    </tr>
    <tr>
        <td><b>Tanggal Bayar</b></td>
        <td>&nbsp;&nbsp;&nbsp;</td>
        <td>:</td>
        <td>&nbsp;&nbsp;&nbsp;</td>
        <td>{{ $laporan->tgl_bayar}}</td>
    </tr>
    <tr>
        <td><b>Bulan Bayar</b></td>
        <td>&nbsp;&nbsp;&nbsp;</td>
        <td>:</td>
        <td>&nbsp;&nbsp;&nbsp;</td>
        <td>{{ $laporan->bulan_dibayar}}</td>
    </tr>
    <tr>
        <td><b>Tahun Bayar</b></td>
        <td>&nbsp;&nbsp;&nbsp;</td>
        <td>:</td>
        <td>&nbsp;&nbsp;&nbsp;</td>
        <td>{{ $laporan->tahun_dibayar}}</td>
    </tr>
    <tr>
        <td><b>Id Spp</b></td>
        <td>&nbsp;&nbsp;&nbsp;</td>
        <td>:</td>
        <td>&nbsp;&nbsp;&nbsp;</td>
        <td>{{ $laporan->id_spp}}</td>
    </tr>
    <tr>
        <td><b>Jumlah Bayar</b></td>
        <td>&nbsp;&nbsp;&nbsp;</td>
        <td>:</td>
        <td>&nbsp;&nbsp;&nbsp;</td>
        <td>{{ $laporan->jumlah_bayar}}</td>
    </tr>
   
    @endforeach
</table>
</center>

<center>
<p>= = = = = = = = = = = = = = = = = = = = = =</p><br>	
<h3>TERIMA KASIH </h4><br>
</center>

<script type="text/javascript">
window.print();
</script>

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

@endif
@endif
</body>
</body>
</html>