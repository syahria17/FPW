<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function show($angka)
    {
        if ($angka % 2 == 0) {
            $message = "Nilai ini adalah genap";
            $alertType = "success";
        } else {
            $message = "Nilai ini adalah ganjil";
            $alertType = "warning";
        }

        return view('produk.show', compact('message', 'alertType'));
    }
    public function index()
    {
        // $result = intval($number) + 7;
        // return view('product', ['angka' => $result]); 
        $nama = 'Mahasiswa UNSIKA';
        return view(view: 'product', data: ['nama' => $nama, 'alertMessage' => 'Selamat Belajar blade', 'alertType' => 'success']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("master-data.product-master.create-product");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validasi input data
        $validasi_data = $request->validate([
            'product_name' => 'required|string|max:255',
            'unit' => 'required|string|max:50',
            'type' => 'required|string|max:50',
            'information' => 'nullable|string',
            'qty' => 'required|integer',
            'producer' => 'required|string|max:255',
        ]);

        //proses simpan data kedalam database
        Product::create($validasi_data);

        return redirect()->back()->with('success', 'Product created successfully!');
    }

    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    // {
    //     return view(view: 'barang', data: ['isi_data' => $id]);
    // }

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
