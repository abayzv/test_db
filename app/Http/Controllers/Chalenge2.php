<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Chalenge2 extends Controller
{
    public function chalenge2_2()
    {
        $startDate = "2022-09-08 10:11:22";
        $endDate = "2022-09-08 18:11:22";
        $schedule = date("d M Y, H:i", strtotime($startDate)) . " - " . date("H:i", strtotime($endDate));
        $duration = round((strtotime($startDate) - strtotime($endDate)) / 600, 1);
        $notes = "";
        if (abs($duration) >= 5) {
            $notes = "Overtime";
        }
        echo "Jadwal meeting : " . $schedule . " " . $notes;
    }
    public function chalenge2_3()
    {
        $data =  DB::table('absen_in')
            ->leftJoin(
                'absen_out',
                function ($join) {
                    $join->on('absen_in.nik', '=', 'absen_out.nik');
                    $join->on('absen_in.tgl', '=', 'absen_out.tgl');
                }
            )
            ->where('absen_in.waktu', '>=', "2022-08-12")
            ->selectRaw('absen_in.nik, absen_in.waktu as waktu_in, absen_out.waktu as waktu_out, (CASE WHEN absen_out.waktu IS NULL THEN "Check in Only" ELSE "Complete CICO" END) as status_kehadiran')
            ->get();

        return json_encode($data);
    }
}
