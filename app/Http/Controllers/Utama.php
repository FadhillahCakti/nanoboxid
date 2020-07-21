<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Product;
use App\Event;
use App\Education;
 
class Utama extends Controller
{
   
    /* Product Home */

    public function product ()
    {
        $products = Product::paginate(10);
    	return view('product.product', ['products' => $products]);
	}
   
    public function cariproduk(Request $request)
    
    {
    // menangkap data pencarian
    $cari = $request->cari;
     // mengambil data dari table product sesuai pencarian data
    $products = Product::where('judul','like',"%".$cari."%")->paginate(10);
     // mengirim data product ke view index
    return view('product.product',['products' => $products]);
    }

/*----------------------------------------------------*/

    /* Event Home */

    public function event()
    {
        $events = Event::paginate(10);
    	return view('event.event', ['events' => $events]);
	}
   
    public function cariacara(Request $request)
   
    {
    // menangkap data pencarian
    $cari = $request->cari;
     // mengambil data dari table event sesuai pencarian data
    $events = Event::where('judul','like',"%".$cari."%")->paginate(10);
     // mengirim data event ke view index
    return view('event.event',['events' => $events]);
    }

/*----------------------------------------------------*/

    /* Education Home */

    public function education()
    {
        $educations = Education::paginate(10);
    	return view('education.education', ['educations' => $educations]);
	}
   
    public function cariedukasi(Request $request)
   
    {
    // menangkap data pencarian
    $cari = $request->cari;
     // mengambil data dari table event sesuai pencarian data
    $educations = Education::where('judul','like',"%".$cari."%")->paginate(10);
     // mengirim data event ke view index
    return view('education.education',['educations' => $educations]);
    }

    public function educationid()
    {
        $educations = Education::paginate(10);
    	return view('education.educationid', ['educations' => $educations]);
	}
}