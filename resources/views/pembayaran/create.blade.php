@extends('layouts.master')
@section('content')
@if(Auth::user()->role !='Admin')
@if(Auth::user()->role !='Petugas')
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
@endif
@if(Auth::user()->role !='Siswa')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Tambah Pembayaran</h2>
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

    <form action="{{ route('pembayaran.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Id Petugas</strong>
                    <select name="id_petugas" id="" class="form-control">
                        <option selected>pilih Petugas</option>
                        @foreach($petugas as $row)
                        <option {{ $row->name == old('id_petugas') ? 'selected' : '' }} value="{{$row->name}}">
                        {{ $row->name }}
                        </option>
                        @endforeach
                    </select>   
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nisn</strong>
                {{-- <input class="form-control" type="number" name="id_spp" placeholder="Isi id spp">           --}}
                <select name="nisn" id="" class="form-control">
                    <option selected >pilih Nisn Siswa</option>
                    @foreach($siswa as $row)
                        <option {{ $row->nisn == old('nisn') ? 'selected' : '' }} value="{{$row->nisn}}">
                        {{ $row->nisn}}
                        </option>
                    @endforeach
                </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tanggal Bayar</strong>
                    <input class="form-control" type="number" name="tgl_bayar" placeholder="Isi tanggal">          
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Bulan Bayar</strong>
                    <input class="form-control" type="text" name="bulan_dibayar" placeholder="Isi bulan">          
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tahun Bayar</strong>
                    <input class="form-control" type="text" name="tahun_dibayar" placeholder="Isi tahun" >          
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Id Spp</strong>
                {{-- <input class="form-control" type="number" name="id_spp" placeholder="Isi id spp">           --}}
                <select name="id_spp" id="" class="form-control">
                    <option selected >pilih Spp</option>
                    @foreach($spp as $row)
                        <option {{ $row->nominal == old('id_spp') ? 'selected' : '' }} value="{{$row->nominal}}">
                        {{ $row->nominal}}
                        </option>
                    @endforeach
                </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tunggakan</strong>
                    <input class="form-control" type="text" name="tunggakan" placeholder="Isi tunggakan" >          
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jumlah Bayar</strong>
                    <input class="form-control" type="text" name="jumlah_bayar" placeholder="Isi jumlah Bayar">          
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>
@endsection
@endif
@section('title')
Create Bayar
@stop