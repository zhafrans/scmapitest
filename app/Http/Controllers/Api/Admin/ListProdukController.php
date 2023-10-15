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

class ListProdukController extends Controller
{
    public function listProduk($jenis_barang_id){

        $product = Barang::leftJoin('harga_barang', function($join) {
            $join->on('harga_barang.id_barang', '=', 'barang.id')
                 ->on('harga_barang.tanggal', '=', DB::raw('(SELECT MAX(tanggal) FROM harga_barang WHERE id_barang = barang.id)'));
        })
        ->leftJoin('jenis_barang', 'jenis_barang.id', '=', 'barang.id_jenis')
        ->select('barang.id', 'barang.nama', 'harga_barang.harga')
        ->where('jenis_barang.id', $jenis_barang_id)
        ->orderBy('barang.id', 'asc')
        ->get();

        if ($product) {
            return response()->json($product);
        } else {
            return response()->json(['message' => 'Produk tidak ditemukan'], 404);
        }
    }
}
