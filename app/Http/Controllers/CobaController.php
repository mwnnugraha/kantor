<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\coba;
class CobaController extends Controller
{
    //
     public function test()
    {
    	$a = coba::all();
    	return $a;
    }
     public function test2($id)
    {
    	$a = coba::find($id);
    	return $a;
    }
    public function test3()
    {
    	$tampilan = coba::all();
    	return view('indexx', compact('tampilan'));
    }
     public function percobaan5()
    {
    	$buah = ['mangga','jeruk','apel','anggur','manggis'];
    	return view('buah', compact('buah'));
    }
     public function ulang()
    {
    	$data = ['adi','tatang','juju','icih','idin'];
    	return view('index', compact('data'));
    }
     public function test($data)
    {
    	$kampret  = ['binatang' =>  ['kucing', 'macan'],
    				 'kendaraan' => ['mobil', 'motor'],
    				 'laptop'=>['asus', 'acer']];
    			     
    	$hahaha=$kampret[$data];

    	return view('campuran', compact('hahaha'));
    }

}
