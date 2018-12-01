<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Sdlogistik;

class SDLogistikController extends Controller
{
  public function getViewSDLogistik()
  {
    $sdlogistic = new Sdlogistik();
    return view('sdlogistik', ["hasilUji" => $sdlogistic->getJadwalPengiriman()]);
  }

  public function getInputSdlogistik()
  {
    return view('inputlogistik');
  }

  public function processInputSdl(Request $request)
  {
    $sdlogistic = new Sdlogistik();
    $sdlogistic->saveJadwalPengiriman($request->$idPengiriman, $idBarang, $namaBarang, $tanggalBerangkat);
    return redirect('/sdlogistik');
  }
}
