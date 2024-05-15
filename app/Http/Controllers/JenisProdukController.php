<?php
// jenis prooduk dan produkakan dibuat menggunakan
// type penulisan Query Builder
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisProduk;
//use DB:
// library DB ini digunakan ketika menggunkan penulisan Query Builder
use Illuminate\Support\Facades\DB;

class JenisProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // fungsi ini biasanya digunakan untuk mengarahkan ke file index
        // vaeriabel jenis ini mendeklarasikan table yang diambil dari model
        // untuk kemudian variabel tersebut dikirimkan ke view
        $jenis = DB::table('jenis_produk')->get();
        return view ('admin.jenis.index', compact('jenis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
