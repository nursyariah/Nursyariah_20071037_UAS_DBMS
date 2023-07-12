<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class petugasnurcontroller extends Controller
{
    function index(){
        //return('Ini adalah controller');

        $petugasnur= \DB::table('t_pentugas_nur')->get();
        $data = array('petugasnur' => $petugasnur);
        return view ('petugasnur/index', $data);
    }
}
