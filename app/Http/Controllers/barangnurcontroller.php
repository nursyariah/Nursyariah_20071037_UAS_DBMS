<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bagiannurcontroller extends Controller
{
    function index(){
        //return('Ini adalah controller');

        $barangnur= \DB::table('t_barang_nur')->get();
        $data = array('barangnur' => $barangnur);
        return view ('barangnur/index', $data);
    }
}
