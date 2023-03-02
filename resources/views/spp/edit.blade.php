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
            <h2>Edit Spp</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('spp.index') }}">Kembali</a>
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

<form action="{{route('spp.update', $spp->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tahun</strong>
                <select class="form-control" name="tahun" aria-label="Default select example" id="">
                    <option value=""> -- Pilih tahun -- </option>
                    <option value="2018" @if ($spp->tahun == '2018') selected @endif>2018</option>
                    <option value="2019" @if ($spp->tahun == '2019') selected @endif>2019</option>
                    <option value="2020" @if ($spp->tahun == '2020') selected @endif>2020</option>
                </select>  
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nominal</strong>
                <select class="form-control" name="nominal" aria-label="Default select example" id="">
                    <option value=""> -- Pilih nominal-- </option>
                    <option value="100.000.00"@if ($spp->nominal == '100.000.00') selected @endif>100.000.00</option>
                    <option value="200.000.00"@if ($spp->nominal == '200.000.00') selected @endif>200.000.00</option>
                    <option value="300.000.00 "@if ($spp->nominal == '300.000.00') selected @endif>300.000.00</option>
                </select>
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