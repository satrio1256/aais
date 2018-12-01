<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Pengujian;

class PengujianController extends Controller
{
  public function getViewPenguji()
  {
    $pengujian = new Pengujian();
    return view('penguji', ["hasilUji" => $pengujian->getHasilPengujian()]);
  }

  public function getInputPenguji()
  {
    return view('inputpenguji');
  }
}
