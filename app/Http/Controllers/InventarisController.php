<?php

namespace App\Http\Controllers;

use App\Models\Inventaris;
use Illuminate\Http\Request;



class InventarisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $inventaris = Inventaris::simplePaginate(5);

        $data = [
            'inventaris' => $inventaris
        ];

        return view('inventaris.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('inventaris.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Inventaris::create([
            'nama_barang'   => $request->input('nama_barang'),
            'ruangan'       => $request->input('ruangan'),
            'jumlah_barang' => $request->input('jumlah_barang'),
            'info_barang'   => $request->input('info_barang')
        ]);

        return redirect('inventaris');
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
        $data_inventaris = Inventaris::where('id', $id)->first();

        $data = [
            'inventaris' => $data_inventaris
        ];

        return view('inventaris.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Inventaris::where('id', $id)->update([
            'nama_barang'   => $request->input('nama_barang'),
            'ruangan'       => $request->input('ruangan'),
            'jumlah_barang' => $request->input('jumlah_barang'),
            'info_barang'   => $request->input('info_barang')
        ]);

        return redirect('inventaris');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Inventaris::where('id', $id)->delete();

        return redirect('inventaris');
    }
}