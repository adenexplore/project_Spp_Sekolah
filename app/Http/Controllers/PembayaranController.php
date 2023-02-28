<?php

namespace App\Http\Controllers;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\EmployeeExport;
use Illuminate\Http\Request;
use App\Models\Pembayaran;
use App\Models\User;
use App\Models\spp;
class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pembayarans = Pembayaran::orderBy('created_at', 'desc')->get();

        return view('pembayaran.index', compact('pembayarans'))
            ->with('i', (request()->input('kelas', 1) - 1) * 5);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $petugas = User::all();
        $spp = spp::all();
        return view('pembayaran.create', compact('petugas','spp'));
     }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            // dd($request->all());
        $request->validate([
            'id_petugas' => 'required',
            'nisn' => 'required',
            'tgl_bayar' => 'required',
            'bulan_dibayar' => 'required',
            'tahun_dibayar' => 'required',
            'id_spp' => 'required',
            'jumlah_bayar' => 'required',
        ]);
        
        Pembayaran::create($request->all());

        return redirect()->route('pembayaran.index')
            ->with('success', 'Berhasil Menyimpan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pembayaran $pembayaran)
    {
        // $petugas = User::all();
        // $spp = spp::find($id);
        $spp = Spp::all();
        return view('pembayaran.edit', compact('spp','pembayaran'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'id_petugas' => 'required',
            'nisn' => 'required',
            'tgl_bayar' => 'required',
            'bulan_dibayar' => 'required',
            'tahun_dibayar' => 'required',
            'id_spp' => 'required',
            'jumlah_bayar' => 'required',
        ]);

        Pembayaran::find($id)->update($request->all());
        return redirect()->route('pembayaran.index')
            ->with('success', 'Berhasil Di Edit !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function exportexcel()
    {
      return Excel::download(new EmployeeExport, 'pembayaran.xlsx');
    }
}
