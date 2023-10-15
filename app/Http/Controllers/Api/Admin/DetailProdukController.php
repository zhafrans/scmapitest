<?php

namespace App\Http\Controllers\Api\Admin;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\ListProduk;
use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\HargaBarang;
use App\Models\Outlet;
use App\Models\JenisBarang;

class DetailProdukController extends Controller
{
    public function getProdukByOutlet($id_outlet)
    {
        $barang = Barang::leftJoin('harga_barang', 'harga_barang.id_barang', '=', 'barang.id')
            ->whereColumn('harga_barang.id_jenis_outlet', 'outlet.id_jenis')
            ->leftJoin('outlet', 'outlet.id_jenis', '=', 'harga_barang.id_jenis_outlet')
            ->leftJoin('jenis_barang', 'jenis_barang.id', '=', 'barang.id_jenis')
            ->select('barang.id', 'barang.nama', 'harga_barang.harga', 'barang.keterangan')
            ->where('harga_barang.id_jenis_outlet', $id_outlet)
            ->orderByDesc('harga_barang.tanggal')
            ->first();

        if (!$barang) {
            return response()->json([
                'status' => false,
                'message' => 'Barang tidak ditemukan',
            ], 404);
        }

        $stok = DB::table('detail_barang')
            ->selectRaw('count(id_barang) as qty')
            ->where('id_barang', $barang->id)
            ->first();

        if ($stok->qty > 0) {
            return response()->json([
                'status' => true,
                'message' => 'Data Barang Ditemukan',
                'data' => [
                    'id' => $barang->id,
                    'nama' => $barang->nama,
                    'harga' => $barang->harga, 
                    //tambahkan jenis_barang = mengelompokan pada list produk agar sesuai jenis seperti voucher dll
                    'deskripsi' => $barang->keterangan,                
                    'stok' => $stok->qty,
                ],
            ], 200);
        } else {
            return response()->json([
                'status' => true,
                'message' => 'Stok barang habis',
                'data' => [
                    'id' => $barang->id,
                    'nama' => $barang->nama,
                    'harga' => $barang->harga,
                    'deskripsi' => $barang->keterangan,
                    'stok' => $stok->qty,
                ],
            ], 404);
        }
    }
}
