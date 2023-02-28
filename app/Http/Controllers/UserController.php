<?php

namespace App\Http\Controllers;
use App\Exports\ExportUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
    
        return view('petugas.index', compact('users')) 
        ->with('i', (request()->input('user', 1) - 1) * 5);
    }

    public function create()
    {
        return view('petugas.create');

    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
        ]); 
        $validateData['password'] = bcrypt($validateData['password']);
        // dd($validateData['role']);
        // die;

        User::create($validateData);
    
        return redirect()->route('petugas.index')->with('success','Berhasil Menyimpan !');
    }

    public function show(User $user)
    {
        //
    }

    public function edit(User $user, $id)
    {
        $user = User::findOrFail($id);
        return view('petugas.edit',compact('user'));
    }

    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
        ]);
        $validateData['password'] = bcrypt($validateData['password']);
        
        $user = User::findOrFail($id);
        $user->update($validateData);
    
        return redirect()->route('petugas.index')->with('success','Berhasil Update !');
    }

    public function destroy(User $user, $id)
    {
        $user =  User::find($id);
        $user->delete();
        return redirect()->route('petugas.index')->with('success','Berhasil Hapus !');
    }

    // public function export() 
    // {
    //     return Excel::download(new ExportUser, 'users.xlsx');
    // }
}
