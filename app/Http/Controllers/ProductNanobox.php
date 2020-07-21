<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductNanobox extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function productedit()
    {
    	$products = Product::paginate(10);
    	return view('product.productedit', ['products' => $products]);
    }

    public function product_tambah()
    {
    	return view('product.product_tambah');
    }

    public function product_store(Request $request)
    {
    	$this->validate($request,[
    		'judul' => 'required',
    		'gambar' => 'required',
			'harga' => 'required',
			'linkline' => 'required'
    	]);
 
        Product::create([
			'judul' => $request->judul,
    		'gambar' => $request->gambar,
    		'harga' => $request->harga,
			'linkline' => $request->linkline
    	]);
 
    	return redirect('/productedit');
	}

    public function product_edit($id)
	{
   		$product = Product::find($id);
   		return view('product.product_edit', ['product' => $product]);
	}

	public function product_update($id, Request $request)
	{
    	$this->validate($request,[
    		'judul' => 'required',
    		'gambar' => 'required',
    		'harga' => 'required',
            'linkline' => 'required'
    ]);
 
    	$product = Product::find($id);
    	$product->judul = $request->judul;
    	$product->gambar = $request->gambar;
    	$product->harga = $request->harga;
		$product->linkline = $request->linkline;
    	$product->save();
    	return redirect('/productedit');
	}

	public function product_hapus($id)
	{
		$product = Product::find($id);
		$product->delete();
		return redirect('/productedit');
	}
}