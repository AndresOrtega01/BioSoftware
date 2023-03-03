<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Ave;
use App\Models\Area;

use Illuminate\Http\Request;

class AveController extends Controller
{
    public function index()
    {
        // $aves = Ave::all();
        // ['aves' => $aves]
        return view('aves.index');
    }
    public function mostrarDatosAve($id_ave)
    {
        $ave = DB::table('aves')->where('id', $id_ave)->first();
        $avistamientos = DB::table('avistamientos')
                            ->where('id_ave', $id_ave)
                            ->join('areas', 'avistamientos.id_area', '=', 'areas.id')
                            ->select('areas.nombre', 'avistamientos.cantidad')
                            ->get();

        return view('datos_ave', ['ave' => $ave, 'avistamientos' => $avistamientos]);
    }

    
}
