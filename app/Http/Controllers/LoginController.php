<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User;
use DB;
use session;

class LoginController extends Controller
{
  public function getLogin($arrayOfData = null) {
    if ($arrayOfData == null) {
      return view('masuk');
    } else {
      return view('masuk', $arrayOfData);
    }
  }

  public function authenticate(Request $request) {
    $user = new User();
    $userAuth = $user->getUser($request->email, $request->pass);
    if ($userAuth == null) {
      return redirect('/login')->with(['Error', '1']);
    } else {
      session(['firstName' => $userAuth->FirstName]);
      session(['lastName' => $userAuth->LastName]);
      if ($userAuth->Role == "penguji") {
        return redirect('penguji');
      } else if ($userAuth->Role == "perakit") {
        return redirect('perakit');
      } else if ($userAuth->Role == "sdlogistik") {
        return redirect('sdlogistik');
      }
    }
  }

  public function processInput(Request $request)
  {
    $pengujian = new Pengujian();
    $pengujian->saveHasilPengujian($request->idPengujian, $request->idPesawat, $request->namaPesawat, $request->hasilPengujian, $request->komentar);
    return redirect('/penguji');
  }

  public function logout()
  {
    session()->flush();
    return redirect('login');
  }
}
