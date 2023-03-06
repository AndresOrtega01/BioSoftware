<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Ave;
use App\Models\Area;
use App\Models\Avistamiento;

use Illuminate\Http\Request;

class AveController extends Controller
{



    public function create()
    {
        return view('aves.create');
    }

    public function store(Request $request)
    {
        // // Validar los datos de entrada
         $request->validate([
             'nombre_cientifico' => 'required|string|max:255',
             'nombre_comun' => 'required|string|max:255',
             'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
             'area_1' => 'required|integer|min:0',
             'area_2' => 'required|integer|min:0',
             'area_3' => 'required|integer|min:0',
             'area_4' => 'required|integer|min:0',
             'area_5' => 'required|integer|min:0',
             'area_6' => 'required|integer|min:0',
             'area_7' => 'required|integer|min:0',
         ]);

        // // Guardar la imagen (si se proporciona)
    //  if ($request->hasFile('imagen')) {
    //      $image = $request->file('imagen');
    //      $filename = time() . '.' . $image->getClientOriginalExtension();
    //     $path = public_path('images/' . $filename);
    //         image::make($image->getRealPath())->resize(200, 200)->save($path);
    //     } else {
    //      $filename = 'default.jpg';
    //     }
         if ($request->hasFile('imagen')) {
             $imagen = $request->file('imagen');
             $filename = $imagen->getClientOriginalName();
             $path = $imagen->storeAs('public/images', $filename);
             $ave->imagen = $filename;
         }

        // Crear la nueva ave
        $ave = new Ave;
        $ave->nombre_cientifico = $request->input('nombre_cientifico');
        $ave->nombre_comun = $request->input('nombre_comun');
        $ave->save();

        // Registrar los avistamientos de la nueva ave en cada área
        $area_1 = new Avistamiento;
        $area_1->ave_id = $ave->id;
        $area_1->area_id = 1;
        $area_1->cantidad = $request->input('area_1');
        $area_1->save();

        $area_2 = new Avistamiento;
        $area_2->ave_id = $ave->id;
        $area_2->area_id = 2;
        $area_2->cantidad = $request->input('area_2');
        $area_2->save();

        $area_3 = new Avistamiento;
        $area_3->ave_id = $ave->id;
        $area_3->area_id = 3;
        $area_3->cantidad = $request->input('area_3');
        $area_3->save();

        $area_4 = new Avistamiento;
        $area_4->ave_id = $ave->id;
        $area_4->area_id = 4;
        $area_4->cantidad = $request->input('area_4');
        $area_4->save();

        $area_4 = new Avistamiento;
        $area_4->ave_id = $ave->id;
        $area_4->area_id = 4;
        $area_4->cantidad = $request->input('area_4');
        $area_4->save();

        $area_6 = new Avistamiento;
        $area_6->ave_id = $ave->id;
        $area_6->area_id = 6;
        $area_6->cantidad = $request->input('area_6');
        $area_6->save();

        $area_7 = new Avistamiento;
        $area_7->ave_id = $ave->id;
        $area_7->area_id = 7;
        $area_7->cantidad = $request->input('area_7');
        $area_7->save();

    // Redirigir a la vista de detalles de la nueva ave
    return redirect()->route('aves.create');
}

    // public function show(Ave $ave)
    // {
    //     // Obtener los avistamientos de la ave en cada área
    //     $areas = Area::all();
    //     $avistamientos = array();
    //     foreach ($areas as $area) {
    //         $avistamiento = Avistamiento::where('ave_id', $ave->id)
    //                                     ->where('area_id', $area->id)
    //                                     ->first();
    //         $avistamientos[$area->nombre] = $avistamiento ? $avistamiento->cantidad : 0;
    //     }

    //     // Mostrar la vista de detalles de la ave
    //     return view('aves.show', ['ave' => $ave, 'avistamientos' => $avistamientos]);
    // }

        
    
    
}
