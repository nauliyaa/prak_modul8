<?php

namespace App\Http\Controllers;
use App\Http\Controllers\BarangController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Satuan;
use Illuminate\Support\Facades\Validator;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
public function index()
{
    $pageTitle = 'Barang List';

    // ELOQUENT
    $barangs = Barang::get();

    return view('barang.index', [
        'pageTitle' => $pageTitle,
        'barangs' => $barangs
    ]);
}
    /**
     * Show the form for creating a new resource.
     */
 
public function create()
{
    $pageTitle = 'Create Barang';
    // ELOQUENT
    $satuans = Satuan::all();

    return view('barang.create', compact('pageTitle', 'satuans'));
}
    /**
     * Store a newly created resource in stordeskripsi_barang.
     */
public function store(Request $request)
{
    $message = [
        'required' => ':Attribute harus diisi.',
        'numeric' => 'Isi :attribute dengan angka'
    ];

    $validator = Validator::make($request->all(), [
        'kode_barang' => 'required',
        'nama_barang' => 'required',
        'harga_barang' => 'required|numeric',
        'deskripsi_barang' => 'required',
    ], $message);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    // ELOQUENT
    $barang = New Barang;
    $barang->kode_barang = $request->kode_barang;
    $barang->nama_barang = $request->nama_barang;
    $barang->harga_barang = $request->harga_barang;
    $barang->deskripsi_barang = $request->deskripsi_barang;
    $barang->satuan_barang = $request->satuan;
    $barang->save();


    return redirect()->route('barangs.index');
}

    /**
     * Display the specified resource.
     */
    
public function show(string $id)
{
    $pageTitle = 'barang Detail';

    // RAW SQL QUERY
    $barang = Barang::find($id);

    return view('barang.show', compact('pageTitle', 'barang'));
}



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
{
    $pageTitle = 'Edit barang';

    // ELOQUENT
    $satuans = Satuan::all();
    $barang = Barang::find($id);

    return view('barang.edit', compact('pageTitle', 'satuans', 'barang'));
}

public function update(Request $request, string $id)
{
    $message = [
        'required' => ':Attribute harus diisi.',
        'numeric' => 'Isi :attribute dengan angka'
    ];

    $validator = Validator::make($request->all(), [
        'kode_barang' => 'required',
        'nama_barang' => 'required',
        'harga_barang' => 'required |numeric',
        'deskripsi_barang' => 'required',
    ], $message);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    // ELOQUENT
    $barang = Barang::find($id);
    $barang->kode_barang = $request->kode_barang;
    $barang->nama_barang = $request->nama_barang;
    $barang->harga_barang = $request->harga_barang;
    $barang->deskripsi_barang = $request->deskripsi_barang;
    $barang->satuan_barang = $request->satuan;
    $barang->save();

    return redirect()->route('barangs.index');
}

    /**
     * Remove the specified resource from stordeskripsi_barang.
     */
    public function destroy(string $id)
{
    // ELOQUENT
    Barang::find($id)->delete();

    return redirect()->route('barangs.index');
}
}
