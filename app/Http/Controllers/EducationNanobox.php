<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Education;

class EducationNanobox extends Controller
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

    public function educationedit()
    {
    	$educations = Education::paginate(10);
    	return view('education.educationedit', ['educations' => $educations]);
    }

    public function education_tambah()
    {
    	return view('education.education_tambah');
    }

    public function education_store(Request $request)
    {
    	$this->validate($request,[
    		'judul' => 'required',
    		'gambar' => 'required',
			'paragraf1' => 'required',
			'paragraf2' => 'required',
			'paragraf3' => 'required',
			'paragraf4' => 'required'
    	]);
 
        Education::create([
    		'judul' => $request->judul,
			'gambar' => $request->gambar,
    		'paragraf1' => $request->paragraf1,
    		'paragraf2' => $request->paragraf2,
    		'paragraf3' => $request->paragraf3,
    		'paragraf4' => $request->paragraf4
    	]);
 
    	return redirect('/educationedit');
	}

    public function education_edit($id)
	{
   		$educations = Education::find($id);
   		return view('education.education_edit', ['educations' => $educations]);
	}

	public function education_update($id, Request $request)
	{
    	$this->validate($request,[
    		'judul' => 'required',
    		'gambar' => 'required',
    		'paragraf1' => 'required',
    		'paragraf2' => 'required',
    		'paragraf3' => 'required',
    		'paragraf4' => 'required',
    ]);
 
    	$educations = Education::find($id);
    	$educations->judul = $request->judul;
    	$educations->gambar = $request->gambar;
    	$educations->paragraf1 = $request->paragraf1;
    	$educations->paragraf2 = $request->paragraf2;
    	$educations->paragraf3 = $request->paragraf3;
    	$educations->paragraf4 = $request->paragraf4;
    	$educations->save();
    	return redirect('/educationedit');
	}

	public function education_hapus($id)
	{
		$educations = Education::find($id);
		$educations->delete();
		return redirect('/educationedit');
	}
}
