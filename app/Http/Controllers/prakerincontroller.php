<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class prakerincontroller extends Controller
{
    //
    public function percobaan()
    {
    	$a = "wildan ";
    	$b ="jajang nurjaman";
    	return view('index', compact('a' , 'b'));
    }

    public function param($id)
    {
    	return view('welcome');
    }

    public function parameter($a)
    {
    	return view('latihan', compact('a'));
    }

}