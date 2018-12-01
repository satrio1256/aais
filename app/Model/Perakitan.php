<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class Perakitan extends Model
{
  public function getStatusPerakitan()
  {
    return DB::table('jadwal_perakitan')
    ->get();
  }

  public function setStatusPerakitan($IdPerakitan, $IdPesawat, $TanggalMulai, $TanggalSelesai)
  {
    DB::table('jadwal_perakitan')
    ->insert([
      "IdPerakitan" => $IdPerakitan,
      "IdPesawat" => $IdPesawat,
      "TanggalMulai" => $TanggalMulai,
      "TanggalSelesai" => $TanggalSelesai
    ]);
  }
}
