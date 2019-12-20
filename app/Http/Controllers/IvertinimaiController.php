<?php

namespace App\Http\Controllers;

use App\Destytojas;
use App\Ivertinimas;
use App\Modulis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IvertinimaiController extends Controller
{
    public function moduliai()
    {
        $moduliai = Modulis::all();
        $destytojai = Destytojas::all();
        $ivertinimai = Ivertinimas::selectRaw('modulis, AVG(ivertinimas) as avg')->groupBy('modulis')->get();


                                    //selectRaw('modulis.kodas, AVG(ivertinimas.ivertinimas) as avg FROM ivertinimas left join `modulis`
                                    //            on `ivertinimas`.`modulis` = `modulis`.`kodas` GROUP BY ivertinimas.modulis');
        return view('Studiju posisteme.moduliai', compact('moduliai', 'destytojai', 'ivertinimai'));
    }
    public function ivertinimai($id)
    {
        $modulis = Modulis::where('kodas', $id)->first();
        $destytojas = Destytojas::where('fk_destytojas_user', $modulis->fk_Destytojastabelio_nr)->first();
        $ivertinimai = Ivertinimas::where('modulis', $modulis->kodas)->get();
        return view('Studiju posisteme.modulio_ivertinimai', compact('modulis', 'destytojas', 'ivertinimai'));
    }
    public function destroy($id, $id2)
    {
        $ivertinimas = Ivertinimas::FindOrFail($id2);
        $ivertinimas->delete();
        return redirect()->action('IvertinimaiController@ivertinimai', ['id' => $id]);
    }
}
