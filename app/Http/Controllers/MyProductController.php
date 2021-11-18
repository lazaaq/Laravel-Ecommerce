<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MyProduct;
use App\Models\User;

class MyProductController extends Controller
{
    public function index()
    {
        return view('myproducts/index', [
            'products' => MyProduct::latest()->get()
        ]);
    }

    public function product(MyProduct $myproduct)
    {
        return view('myproducts/myproduct', [
            'product' => $myproduct
        ]);
    }

    public function addget()
    {
        return view('myproducts/addproduct');
    }

    public function addpost(Request $request)
    {
        $validatedData = $request->validate([
            'nama_produk' => 'required|min:3',
            'slug' => 'required|min:3',
            'harga' => 'required',
            'deskripsi' => 'max:1000'
        ]);

        MyProduct::create($validatedData);

        return redirect('/my')->with('successAddProduct', 'Produk baru telah ditambahkan');
    }

    public function editget(MyProduct $myproduct)
    {
        return view('myproducts/editproduct', [
            'product' => $myproduct
        ]);
    }

    public function editpost(Request $request, MyProduct $myproduct)
    {
        // $myproduct->update([
        //     'nama_product' => $request->nama_produk,
        //     'slug' => $request->slug,
        //     'harga' => $request->harga,
        //     'deskripsi' => $request->deskripsi
        // ]);
        $myproduct->update($request->all());

        return redirect('/my/' . $myproduct->slug);
    }

    public function delete(MyProduct $myproduct)
    {
        $myproduct->delete();
        return redirect('/my');
    }


}
