<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\User;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $users = User::pluck('name')->first();
        $jumlah_pasien = Pasien::count();

        if ($request->has('cari')) {
            $data_pasien = Pasien::where('nama_pasien', 'LIKE', '%' . $request->cari . '%')
                ->orderBy('id', 'desc')
                ->paginate(8);
        } else {
            $data_pasien = Pasien::orderBy('id', 'desc')->paginate(8);
        }

        return view('Pasien.index', [
            'data_pasien' => $data_pasien,
            'jumlah_pasien' => $jumlah_pasien,
            'users' => $users,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->validate([
            'nama_pasien' => 'string|max:255',
            'alamat' => 'string',
            'nomor_telepon' => 'string',
            'umur' => 'string',
        ]);
        Pasien::create($request->all());
        return redirect('/pasien')->with('sukses', 'Data Berhasil diinput');
    }
    public function edit($id)
    {
        $pasien = Pasien::find($id);
        return view('pasien/edit', [
            'pasien' => $pasien,
        ]);
    }

    public function update(Request $request, $id)
    {
        $Pasien = Pasien::find($id);
        $Pasien->update($request->all());
        return redirect('/pasien')->with('sukses', 'Data berhasil diupdate');
    }

    public function delete($id)
    {
        $Pasien = Pasien::find($id);
        $Pasien->delete($Pasien);
        return redirect('/pasien')->with('sukses', 'Data berhasil dihapus');
    }
}
