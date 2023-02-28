@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Data Histori Spp</h2>
            </div>
            <hr>
            {{-- <div class="pull-right" style="float: right;">
                <a class="btn btn-success" href="{{ route('pembayaran.create') }}">Tambah Pembayaran  <i class="fa-sharp fa-solid fa-add"></i></a>
            </div> --}}
        </div>
    </div>
    <br>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Histori Spp</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Id Petugas</th>
                            <th>Nisn</th>
                            <th>Tgl Bayar</th>
                            <th>Bulan Dibayar</th>
                            <th>Tahun Dibayar</th>
                            <th>Id Spp</th>
                            <th>Jumlah Bayar</th>
                            {{-- <th width="112px">Action</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($historis as $histori)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $histori->id_petugas }}</td>
                                <td>{{ $histori->nisn }}</td>
                                <td>{{ $histori->tgl_bayar}}</td>
                                <td>{{ $histori->bulan_dibayar }}</td>
                                <td>{{ $histori->tahun_dibayar }}</td>
                                <td>{{ $histori->id_spp }}</td>
                                <td>{{ $histori->jumlah_bayar }}</td>
                                {{-- <td>
                                    <form action="{{ route('histori.destroy',$histori->id) }}" method="POST">
                                        <a class="btn btn-primary" href="{{ route('histori.edit',$histori->id) }}">
                                            <i class="fa-solid fa-pen"> </i>
                                        </a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>
                                    </form>
                                </td> --}}
                            </tr>
                        @endforeach
                    </tbody> 
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
</script>
{{-- {!! $pages->links() !!} --}}
@endsection

@section('title')
Pembayaran
@stop