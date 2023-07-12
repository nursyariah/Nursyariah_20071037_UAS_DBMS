<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bagiannurcontroller extends Controller
{
    function index(){
        //return('Ini adalah controller');

        $pengeluaranitemnur= \DB::table('t_pengeluaranitem_nur')->get();
        $data = array('pengeluaranitemnur' => $pengeluaranitemnur);
        return view ('pengeluaranitemnur/index', $data);
    }
}
