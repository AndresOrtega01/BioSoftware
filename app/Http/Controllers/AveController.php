<?php

namespace App\Http\Controllers;
use App\Models\Ave;
use App\Models\Area;

use Illuminate\Http\Request;

class AveController extends Controller
{
    // public function agregarAve($area_id){
    //     $area = Area::find($area_id);
    //     $ave = Ave::create([
    //         'nombre' => 'Nombre del ave',
    //         'especie' => 'Especie del ave'
    //     ]);
    //     $area->aves()->attach($ave);
    //     return redirect()->back()->with('success', 'Ave agregada correctamente');
    // }

    public function create()
    {
        return view("pages.create");
    }
}
