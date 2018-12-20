<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\file;
use DB;

class FileController extends Controller
{
    public function postfile(Request $r)
    {
		$now = date("d-M-Y H:i:s", strtotime('+5 hours'));
		$now=str_replace(":","_","$now");
		$fileName = $now.Input::file('uploadfile')->getClientOriginalName();
		
    	$fls=new file();
    	$fls->name=$r->nama;
    	$fls->instansi=$r->instansi;
    	$fls->noktp=$r->noktp;
    	$fls->notlp=$r->notlp;
    	$fls->filename=$fileName;
    	$fls->save();

    	$destinationPath = storage_path('app/file/');
    	Input::file('uploadfile')->move($destinationPath, $fileName);

    	return redirect('/upload');
    }

    public function search(Request $r)
    {
        $post=DB::table('post')->where('judul','like','%'.$r->kata.'%')->orWhere('deskripsi','like','%'.$r->kata.'%')->orWhere('fasilitas','like','%'.$r->kata.'%')->orWhere('syarat','like','%'.$r->kata.'%')->get();
        return $post;
    }
}
