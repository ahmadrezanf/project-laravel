<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Penjualan;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $penjualan = DB::table('v_penjualan')->get();
       return view ('penjualan/index',compact('penjualan')); //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view ('pembelian/create');
        $barang = DB::table('xtb_barang')-> get();
        $pengguna = DB::table('xtb_userx')-> get();
        return view ('penjualan/create',compact('barang','pengguna'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    try {
        DB::table('tbl_jual_barang')->insert([
            'nofak_jual'   => $request->nofak_jual,  
            'tgl_jual'     => $request->tgl_jual,
            'kode_barang'  => $request->kode_barang,
            'jumlah_jual'  => $request->jumlah_jual,
            'harga_jual'   => $request->harga_jual,
            'user_id'      => $request->user_id,   
        ]);

        return redirect('penjualan')->with('status', 'Penjualan berhasil ditambahkan.');
    } catch (\Illuminate\Database\QueryException $ex) {  
        return redirect('penjualan')->with('status', 'Error: ' . $ex->getMessage());
    }
}


    /**
     * Display the specified resource.
     */
    public function show()
    {
        $penjualan = DB::table('v_penjualan') -> get();
        return view ('penjualan/show', compact('penjualan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $nofak_jual)
    {
        $barang = DB::table('xtb_barang')->get();
        $pengguna = DB::table('xtb_userx')->get();
        $penjualan = DB::table('v_penjualan')->where('nofak_jual', $nofak_jual)->
            first();      
            return view('penjualan/edit', compact('barang', 'pengguna', 'penjualan')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $nofak_jual)
    {
        try
       {
        $affected = DB::table('tbl_jual_barang') ->where('nofak_jual', $nofak_jual)
        ->update([
                    'nofak_jual' => $request ->nofak_jual,  
                    'tgl_jual' => $request ->tgl_jual,
                    'kode_barang' => $request ->kode_barang,
                    'jumlah_jual' => $request ->jumlah_jual,
                    'harga_jual' => $request ->harga_jual,
                    'user_id' => $request ->user_id,
    
        ]);
       
       return redirect('penjualan')-> with ('status', 'penjualan berhasil diubah...');
    }
        catch(\Illuminate\Database\QueryException $ex)
        {
            return redirect('penjualan')-> with('status', 'penjualan gagal ditambah...');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $nofak_jual)
    {
        $penjualan = DB::table('tbl_jual_barang')->where('nofak_jual', $nofak_jual)->delete();      
        return  redirect('penjualan')-> with ('status', 'Data penjualan berhasil dihapus..');  //
    }
}