<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class Sdlogistik extends Model
{
  public function getJadwalPengiriman()
  {
    return DB::table('jadwal_pengiriman')
    ->get();
  }

  public function saveJadwalPengiriman($idPengiriman, $idBarang, $namaBarang, $tanggalBerangkat)
  {
    DB::table('jadwal_pengiriman')
    ->insert([
      "IdPengiriman" => $idPengiriman,
      "IdBarang" => $idBarang,
      "NamaBarang" => $namaBarang,
      "TanggalBerangkat" => $tanggalBerangkat
    ]);
  }
}
