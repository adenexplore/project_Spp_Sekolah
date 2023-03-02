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
            <h2>Tambah Siswa</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('siswa.index') }}">Kembali</a>
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

<form action="{{ route('siswa.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nisn</strong>
                <input class="form-control" type="text" name="nisn" placeholder="Isi Nisn Siswa">          
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nis</strong>
                <input class="form-control" type="number" name="nis" placeholder="Isi Nis Siswa">          
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama</strong>
                <input class="form-control" type="text" name="nama" placeholder="Isi Nama Siswa">          
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Alamat</strong>
                <textarea name="alamat" id="" cols="30" rows="10" class="form-control"></textarea>
                 {{-- <div  id="editor"> <textarea class="ckeditor" id="texteditor" name="alamat" ></textarea></div> --}}
                {{-- <input type="text" name="content_textinput" class="form-control" id="ckinput">          --}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>No Telp</strong>
                <input class="form-control" type="number" name="no_telp" placeholder="Isi No Telp">          
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tahun Angkatan</strong>
                {{-- <input class="form-control" type="number" name="id_spp" placeholder="Isi id spp">           --}}
                <select name="thn_angkatan" id="" class="form-control">
                    <option selected >pilih tahun angkatan</option>
                    @foreach($tahun as $row)
                        <option {{ $row->tahun == old('thn-angkatan') ? 'selected' : '' }} value="{{$row->tahun}}">
                        {{ $row->tahun}}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Id Spp</strong>
                {{-- <input class="form-control" type="number" name="id_spp" placeholder="Isi id spp">           --}}
                <select name="id_spp" id="" class="form-control">
                    <option selected >pilih nominal</option>
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
                <strong>Kelas </strong>
                <select name="id_kelas" id="" class="form-control">
                    <option selected >pilih kelas</option>
                    @foreach($kelas as $row)
                        <option {{ $row->nama_kelas == old('id_kelas') ? 'selected' : '' }} value="{{$row->nama_kelas}}">
                        {{ $row->nama_kelas }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        {{-- <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Id Kelas</strong>
                <input class="form-control" type="number" name="id_spp" placeholder="Isi id kelas">          
            </div>
        </div> --}}
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
@endsection
@endif
@endif
@section('title')
Siswa Create
@stop