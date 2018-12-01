<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Perakitan;

class PerakitanController extends Controller
{
  public function getViewPerakit()
  {
    $perakitan = new Perakitan();
    return view('perakit', ["statusPerakitan" => $perakitan->getStatusPerakitan()]);
  }

  public function getViewInputPerakit()
  {
    return view('inputperakit');
  }

  public function processStatusPerakitan(Request $request)
  {
    $perakitan = new Perakitan();
    $perakitan->setStatusPerakitan($request->idPerakitan, $request->idPesawat, $request->tanggalMulai, $request->tanggalSelesai);
    return redirect('/perakit');
  }
}
