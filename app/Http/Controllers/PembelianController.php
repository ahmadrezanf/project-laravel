<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Pembelian;
use Illuminate\Http\Request;

class PembelianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $pembelian = DB::table('v_pembelian_barangx')->get();
       return view ('pembelian/index',compact('pembelian')); //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view ('pembelian/create');
        $barang = DB::table('xtb_barang')-> get();
        $pengguna = DB::table('xtb_userx')-> get();
        $suplier = DB::table('xtb_suplier')-> get();
        return view('pembelian/create', compact('pengguna','barang','suplier'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    try {
        DB::table('tbl_beli_barang')->insert([
            'nofak_beli'   => $request->nofak_beli,  
            'tgl_beli'     => $request->tgl_beli,
            'kode_barang'  => $request->kode_barang,
            'jumlah_beli'  => $request->jumlah_beli,
            'harga_beli'   => $request->harga_beli,
            'harga_jual'   => $request->harga_jual,
            'user_id'      => $request->user_id,
            'id_suplier'   => $request->id_suplier,   
        ]);

        return redirect('pembelian')->with('status', 'Pembelian berhasil ditambahkan.');
    } catch (\Illuminate\Database\QueryException $ex) {  
        return redirect('pembelian')->with('status', 'Error: ' . $ex->getMessage());
    }
}


    /**
     * Display the specified resource.
     */
    public function show()
    {
        $pembelian = DB::table('tbl_beli_barang') -> get();
        return view ('pembelian/show', compact('pembelian'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $nofak_beli)
    {
        $barang = DB::table('xtb_barang')->get();
        $pengguna = DB::table('xtb_userx')->get();
        $suplier = DB::table('xtb_suplier')->get();
        $pembelian = DB::table('v_pembelian_barangx')->where('nofak_beli', $nofak_beli)->
            first();      
        return view('pembelian/edit', compact('pembelian','barang', 'pengguna', 'suplier')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $nofak_beli)
    {
        try
       {
        $affected = DB::table('tbl_beli_barang') ->where('nofak_beli', $nofak_beli)
        ->update([
                    'nofak_beli' => $request ->nofak_beli,  
                    'tgl_beli' => $request ->tgl_beli,
                    'kode_barang' => $request ->kode_barang,
                    'jumlah_beli' => $request ->jumlah_beli,
                    'harga_beli' => $request ->harga_beli,
                    'harga_jual' => $request ->harga_jual,
                    'user_id' => $request ->user_id,
                    'id_suplier' => $request ->id_suplier,
    
        ]);
       
       return redirect('pembelian')-> with ('status', 'pembelian berhasil diubah...');
    }
        catch(\Illuminate\Database\QueryException $ex)
        {
            return redirect('pembelian')-> with('status', 'pembelian gagal ditambah...');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $nofak_beli)
    {
        $pembelian = DB::table('tbl_beli_barang')->where('nofak_beli', $nofak_beli)->delete();      
        return  redirect('pembelian')-> with ('status', 'Data pembelian berhasil dihapus..');//
    }
}