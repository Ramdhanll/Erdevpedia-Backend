<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction;
class TransactionController extends Controller
{
    public function get(Request $request, $id){
        $product = Transaction::with(['details.product'])->find($id); // ambil data transaction details dengan produk juga

        if($product){
            return ResponseFormatter::success($product,'Data Transaksi Berhasil Diambil');
        } else {
            return ResponseFormatter::error(null,'Data Transaksi Tidak Ada', 404);
        }
    }
}
