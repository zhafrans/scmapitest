<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Barang;
use App\Models\JenisBarang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = Barang::all();
        return view('admin.barang.index', compact('data'));
    }

    public function create()
    {
        $jenis_barang = JenisBarang::all();
        return view('admin.barang.create', compact('jenis_barang'));
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'nama' => 'required|unique:barang',
                'id_jenis' => 'required|numeric',
                'fisik' => ['in:1,0']
            ],
            [
                'nama.required' => 'Nama barang harus diisi',
                'nama.unique' => 'barang sudah ada',
                'id_jenis.required' => 'Jenis barang harus dipilih',
                'id_jenis.numeric' => 'Jenis barang harus dipilih',
            ]
        );
        Barang::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'id_jenis' => $request->id_jenis,            
            'fisik' => $request->has('fisik'),
            'keterangan' => $request->keterangan,
        ]);
        return redirect()->route('admin.barang')->with('success', 'barang telah ditambahkan');
    }

    public function edit($id)
    {
        $data = Barang::findorfail($id);
        $jenis_barang = JenisBarang::all();
        return view('admin.barang.edit', compact('data', 'jenis_barang'));
    }

    public function update(Request $request, $id)
    {
        $data = Barang::find($id);
        $request->validate(
            [
                'nama' => 'required',
                'id_jenis' => 'required|numeric',
                'fisik' => ['in:1,0']
            ],
            [
                'nama.required' => 'Nama barang harus diisi',
                'id_jenis.required' => 'Jenis barang harus dipilih',
                'id_jenis.numeric' => 'Jenis barang harus dipilih',
            ]
        );
        if ($data->nama != $request->nama) {
            $request->validate(
                [
                    'nama' => 'unique:barang',
                ],
                [
                    'nama.unique' => 'nama barang sudah ada',
                ]
            );
        }
        $data->update([           
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'id_jenis' => $request->id_jenis,            
            'fisik' => $request->has('fisik'),
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->route('admin.barang')->with('success', 'barang telah diubah');
    }

    public function destroy($id)
    {
        Barang::find($id)->delete();
        return redirect()->route('admin.barang')->with('success', 'barang telah dihapus');
    }
}
