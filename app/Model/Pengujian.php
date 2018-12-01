<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class Pengujian extends Model
{
  public function getHasilPengujian()
  {
    return DB::table('hasil_uji')
    ->get();
  }

  public function saveHasilPengujian($idPengujian, $idPesawat, $namaPesawat, $hasilPengujian, $komentar)
  {
    DB::table('hasil_uji')
    ->insert([
      "IdPengujian" => $idPengujian,
      "IdPesawat" => $idPesawat,
      "NamaPesawat" => $namaPesawat,
      "Hasilpengujian" => $hasilPengujian,
      "Komentar" => $komentar
    ]);
  }
}
