<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Manajemen;
use Illuminate\Http\Request;

class ManajemenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $manajemen = DB::table('xtb_userx')->get();
        return view('manajemen.index', compact('manajemen'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('manajemen/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try 
        {
             $query=DB::table('xtb_userx')->insert([
                'user_id' => $request ->user_id,  
                'nm_user' => $request ->nm_user,
                'level' => $request ->level,
                'password' => $request ->password
                ]);  
            return  redirect('manajemen')-> with ('status', 'manajemen berhasil ditambah..'); 
        } 
                catch(\Illuminate\Database\QueryException $ex){  
                return  redirect('manajemen')-> with ('status', $ex); 
            }
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $manajemen = DB::table('xtb_userx')->get();
        return view ('manajemen/show', compact('manajemen'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $user_id)
    {
        $manajemen = DB::table('xtb_userx')->where('user_id', $user_id)->
            first();
        return view('manajemen/edit', compact('manajemen'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $user_id)
    {
        try
        {
        $affected = DB::table('xtb_userx') ->where('user_id', $user_id)
        ->update([
        'nm_user' => $request ->nm_user
        ]);
        return redirect('manajemen')-> with ('status', 'manajemen berhasil diubah..');
        }
            catch(\Illuminate\Database\QueryException $ex)
                {
                return redirect('manajemen')-> with ('status', 'manajemen gagal diubah..');
            }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $user_id)
    {
        $manajemen = DB::table('xtb_userx')->where('xtb_userx', $user_id)->delete();      
        return  redirect('manajemen')-> with ('status', 'Data manajemen berhasil dihapus..');
    }
}
