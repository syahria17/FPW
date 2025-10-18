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
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    // public function index()
    // {
    //     // $result = intval($number) + 7;
    //     // return view('product', ['angka' => $result]); 
    //     $nama = 'Mahasiswa UNSIKA';
    //     return view(view: 'product', data: ['nama' => $nama, 'alertMessage' => 'Selamat Belajar blade', 'alertType' => 'success']);
    // }

    /**
     * Show the form for creating a new resource.
     */
    // 
    public function create()
    {
        return view('products.create');
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
    //     return view(view: id'barang', data: ['isi_data' => $id]);
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $validasi_data = $request->validate([
            'product_name' => 'required|string|max:255',
            'unit' => 'required|string|max:50',
            'type' => 'required|string|max:50',
            'information' => 'nullable|string',
            'qty' => 'required|integer',
            'producer' => 'required|string|max:255',
        ]);

        $product->update($request->all());
        return redirect()->route('products.index')->with('success', 'Produk berhasil diperbarui!');
   
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Produk berhasil dihapus!');
    }
}
