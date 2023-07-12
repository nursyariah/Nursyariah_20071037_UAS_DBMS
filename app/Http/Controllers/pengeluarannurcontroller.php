<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bagiannurcontroller extends Controller
{
    function index(){
        //return('Ini adalah controller');

        $pengeluarannur= \DB::table('t_pengeluaran_nur')->get();
        $data = array('pengeluarannur' => $pengeluarannur);
        return view ('pengeluarannur/index', $data);
    }
}
