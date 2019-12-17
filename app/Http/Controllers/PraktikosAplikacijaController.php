<?php

namespace App\Http\Controllers;

use Session;
use App\Praktika;
use Illuminate\Support\Facades\DB;
use App\Registracija_praktikai;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class PraktikosAplikacijaController extends Controller
{
    //
    public function index($id = 0)
    {

        // $paskaitos = Registracija_praktikai::all()->toArray();
        //return view('Imone.paskaita.paskaitos_kurimo_langas.index', compact('paskaitos'));
    }
    public function create()
    {
        $results = DB::select("SELECT praktikos.id,praktikos.trukme,praktikos.id,dalyviu_Skaicius,projekto_Tema,laikas,pavadinimas,sritis,el_pastas  FROM praktikos LEFT JOIN imones ON praktikos.fk_Imoneid=imones.id");

        //        return view('Imone/imones_praktiku_sarasas')->with('praktiku_list', $results);
        //$auditorija_list = DB::table('auditorija')->get();
        return view('Imone.registracija.registracija_praktikai')->with('results', $results); //->with('auditorija_list', $auditorija_list);
    }

    public function store(Request $request)
    {

        $this->validate(
            $request,
            [
                'vardas' => 'required',
                'pavarde' => 'required',
                'baigimo_laikas' => 'required',
                'pastas' => 'required',
                'kursas' => 'required',
                'pareigos' => 'required',
                'fk_praktikosid'
            ]
        );
        $paskaita = new Registracija_praktikai([
            'vardas' => $request->get('vardas'),
            'pavarde' => $request->get('pavarde'),
            'baigimo_laikas' => $request->get('baigimo_laikas'),
            'pastas' => $request->get('pastas'),
            'kursas' => $request->get('kursas'),
            'pareigos' => $request->get('pareigos'),
            'fk_praktikosid' => $request->get('fk_praktikosid'),
        ]);
        $paskaita->save();

        $praktika = Praktika::findOrFail($request->get('fk_praktikosid'));
        $praktika->update([
            'dalyviu_Skaicius' => $praktika->dalyviu_Skaicius + 1
        ]);


        return redirect()->back()->with('message', 'Praktikos aplikacija sėkmingai išsiūsta');
    }

    public function show($id = 0)
    {
        $results = DB::select("SELECT praktikos.id,praktikos.trukme,praktikos.id,dalyviu_Skaicius,projekto_Tema,laikas,pavadinimas,sritis,el_pastas  FROM praktikos LEFT JOIN imones ON praktikos.fk_Imoneid=imones.id");

        //        return view('Imone/imones_praktiku_sarasas')->with('praktiku_list', $results);
        //$auditorija_list = DB::table('auditorija')->get();
        return view('Imone.registracija.registracija_praktikai')->with('results', $results)->with('id',$id); //->with('auditorija_list', $auditorija_list);
    }


    public function edit($id)
    {
        // $paskaita = Registracija_praktikai::FindOrFail($id);
        // $auditorija_list = DB::table('auditorija')->get();
        // return view('imone.paskaitos_redagavimo_langas', compact('paskaita'), compact('auditorija_list'));
    }

    public function update(Request $request, Registracija_praktikai $paskaita, $id)
    {
        // $paskaita = Registracija_praktikai::findOrFail($id);
        // $paskaita->update([
        //     'tema' => request('tema'),
        //     'data' => request('data'),
        //     'trukme' => request('trukme'),
        //     'vieta' => request('vieta'),
        //     'papildoma_informacija' => request('papildoma_informacija'),
        //     'lektorius' => request('lektorius'),
        //     'laikas' => request('laikas'),
        //     'mokymo_kalba' => request('mokymo_kalba'),
        //     'fk_Auditorijaid_Auditorija' => request('fk_Auditorijaid_Auditorija')
        // ]);
        // return redirect()->back()->with('message', 'Paskaitos duomenys sėkmingai atnaujinti');
        //return redirect('/imone/paskaitos');
    }

    public function destroy($id)
    {
        // $room = Registracija_praktikai::findOrFail($id);
        // $room->delete();
        // return redirect('/imone/paskaitos')->with('message', 'Paskaitos duomenys sėkmingai ištrinti');
    }
}
