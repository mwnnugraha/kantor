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





    public function test3($id)
    {
    	$tampilan = coba::find($id);
    	return $tampilan;
    }

    public function indexx($id)
    {
        $a = coba::where('jurusan','like','%'.$id.'%')-> ORwhere('nama','like','%'.$id.'%') ->get();
        return $a;
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
     public function ff($data)
    {
    	$kampret  = ['binatang' =>  ['kucing', 'macan', 'biawak', 'hiu', 'macan'],
    				 'kendaraan' => ['mobil', 'motor', 'bentor', 'beca', 'sepeda'],
    				 'laptop'=>['asus', 'acer', 'hp', 'lenovo', 'sharp']];
    			     
    	$hahah=$kampret[$data];

    	return view('campuran', compact('hahah'));
    }

}
