@extends('layouts.master')
@section('content')
@if(Auth::user()->role !='Admin')
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
@endif

@if(Auth::user()->role !='Petugas')
@if(Auth::user()->role !='Siswa')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Pembayaran</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('pembayaran.index') }}">Kembali</a>
        </div>
    </div>
</div>

<br>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{route('pembayaran.update', $pembayaran->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Id Petugas</strong>
                <input class="form-control" type="text" name="id_petugas"  value="{{$pembayaran->id_petugas}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nisn</strong>
                <input class="form-control" type="text" name="nisn"  value="{{$pembayaran->nisn}}">
            </div>
        </div>
        {{-- <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nis</strong>
                <input class="form-control" type="number" name="nis" value="{{$pembayaran->nis}}">          
            </div>
        </div> --}}
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Bayar</strong>
                <input class="form-control" type="text" name="tgl_bayar"  value="{{$pembayaran->tgl_bayar}}">          
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Bulan  DiBayar</strong>
                <input class="form-control" type="text" name="bulan_dibayar"  value="{{$pembayaran->bulan_dibayar}}">          
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tahun Dibayar</strong>
                <input class="form-control" type="text" name="tahun_dibayar"  value="{{$pembayaran->tahun_dibayar}}">          
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Id Spp</strong>
                {{-- <input class="form-control" type="number" name="id_spp" placeholder="Isi id spp">           --}}
                <select name="id_spp" id="" class="form-control">
                    <option selected >{{$pembayaran->id_spp}}</option>
                    @foreach($spp as $row)
                        <option {{ $row->id_spp == old('id_spp', $pembayaran->id_spp)  ? 'selected' : '' }} value="{{$row->nominal}}">
                        {{ $row->nominal}}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jumlah Bayar</strong>
                <input class="form-control" type="text" name="jumlah_bayar"  value="{{$pembayaran->jumlah_bayar}}">          
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </div>

</form>
@endif
@endif
@endsection

@section('title')
edit kelas
@stop