<?php

namespace App\Http\Controllers;

use App\Destytojas;
use App\Ivertinimas;
use App\Modulis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class IvertinimaiController extends Controller
{
    public function moduliai()
    {
        if(Gate::allows('centras')) {
            $check = Modulis::count();
            $moduliai = Modulis::all();
            $destytojai = Destytojas::all();
            $ivertinimai = Ivertinimas::selectRaw('modulis, AVG(ivertinimas) as avg')->groupBy('modulis')->get();
            if($check == 0)
            //selectRaw('modulis.kodas, AVG(ivertinimas.ivertinimas) as avg FROM ivertinimas left join `modulis`
            //            on `ivertinimas`.`modulis` = `modulis`.`kodas` GROUP BY ivertinimas.modulis');
            return view('Studiju posisteme.moduliai', compact('moduliai', 'destytojai', 'ivertinimai'))->withErrors(['status' => 'Nėra modulių.']);
            else return view('Studiju posisteme.moduliai', compact('moduliai', 'destytojai', 'ivertinimai'));
        }
        else abort(404);
    }
    public function ivertinimai($id)
    {
        if(Gate::allows('centras')) {
            $modulis = Modulis::where('kodas', $id)->first();
            $check = Ivertinimas::where('modulis', $modulis->kodas)->count();
            $destytojas = Destytojas::where('fk_destytojas_user', $modulis->fk_Destytojastabelio_nr)->first();
            $ivertinimai = Ivertinimas::where('modulis', $modulis->kodas)->get();
            if($check == 0)
            return view('Studiju posisteme.modulio_ivertinimai', compact('modulis', 'destytojas', 'ivertinimai'))->withErrors(['status' => 'Nėra įvertinimų.']);
            else return view('Studiju posisteme.modulio_ivertinimai', compact('modulis', 'destytojas', 'ivertinimai'));
        }
        else abort(404);
    }
    public function destroy($id, $id2)
    {
        $ivertinimas = Ivertinimas::FindOrFail($id2);
        $ivertinimas->delete();
        return redirect()->action('IvertinimaiController@ivertinimai', ['id' => $id])->withErrors(['status' => 'Įvertinimas ištrintas.']);
    }
}
