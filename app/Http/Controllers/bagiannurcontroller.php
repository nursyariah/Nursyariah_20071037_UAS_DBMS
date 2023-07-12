<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bagiannurcontroller extends Controller
{
    function index(){
        //return('Ini adalah controller');

        $bagiannur= \DB::table('t_bagian_nur')->get();
        $data = array('bagiannur' => $bagiannur);
        return view ('bagiannur/index', $data);
    }
}
