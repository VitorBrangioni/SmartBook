<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nv1Titulo;
use App\Nv2Titulo;
use App\Nv3Titulo;
use App\Nv4Titulo;

class TitulosController extends Controller
{

    public function index()
    {
        // return view('index');

        $nv1Obj = new Nv1Titulo();
        $allNv1 = Nv1Titulo::all();

        return view('index',['allNv1'=>$allNv1]);
    }

    public function titles()
    {
        $nv1Obj = new Nv1Titulo();
        $allNv1 = Nv1Titulo::all();

        return view('gestao-titulos',['allNv1'=>$allNv1]);
    }

    public function store(Request $request)
    {
        $nv = $request->input('nv');
        $idNv1 = $request->input('idNv1');
        $idNv2 = $request->input('idNv2');
        $idNv3 = $request->input('idNv3');
        $title = $request->input('title');
        $text = $request->input('text');
        $input = $request->all();

        switch ($nv) {
            case 1:
                Nv1Titulo::create($input);
                break;
            case 2:
                Nv2Titulo::create(['title'=>$title, 'text'=>$text, 'nv1_titulos_id'=>$idNv1]);
                break;
            case 3:
                Nv3Titulo::create([
                    'title'=>$title,
                    'text'=>$text,
                    'nv2_titulos_id'=>$idNv2,
                    'nv2_titulos_nv1_titulos_id'=>$idNv1
                ]);
                break;
            case 4:
               Nv4Titulo::create([
                    'title'=>$title,
                    'text'=>$text,
                    'nv3_titulos_id'=>$idNv3,
                    'nv3_titulos_nv2_titulos_id'=>$idNv2,
                    'nv3_titulos_nv2_titulos_nv1_titulos_id'=>$idNv1
                ]);
                break;
        }
         return redirect('/');
    }

    public function update(Request $request)
    {
        $titleId = $request->input('titleId');
        $nv = $request->input('nv');

        switch ($nv) {
            case 1:
                Nv1Titulo::find($titleId)->update($request->all());
                break;
            case 2:
                Nv2Titulo::find($titleId)->update($request->all());
                break;
            case 3:
                Nv3Titulo::find($titleId)->update($request->all());
                break;
            case 4:
                Nv4Titulo::find($titleId)->update($request->all());
                break;
        }
        return redirect('/');
    }
}
