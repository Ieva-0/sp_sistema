<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Paskaita;

use App\Http\Controllers\Controller;

class PaskaitosController extends Controller
{
    public function index($id = 0)
    {
        $paskaitos = Paskaita::all()->toArray();
        return view('Imone.paskaita.paskaitos_kurimo_langas.index', compact('paskaitos'));
    }
    public function create()
    {
        $auditorija_list = DB::table('auditorija')->get();
        return view('Imone.paskaita.paskaitos_kurimo_langas')->with('auditorija_list', $auditorija_list);
    }

    public function store(Request $request)
    {

        $this->validate(
            $request,
            [
                'data' => 'required',
                'trukme',
                'vieta' => 'required',
                'tema',
                'papildoma_informacija',
                'lektorius',
                'laikas' => 'required',
                'mokymo_kalba' => 'required',
                'fk_Darbuotojasid',
                'fk_Auditorijaid_Auditorija' => 'required'
            ]
        );
        $first = DB::table('imones')->where('fk_imone_user', auth()->user()->id)->first();
        print_r("HEEEEEEEY");
        $paskaita = new Paskaita([
            'data' => $request->get('data'),
            'trukme' => $request->get('trukme'),
            'vieta' => $request->get('vieta'),
            'tema' => $request->get('tema'),
            'papildoma_informacija' => $request->get('papildoma_informacija'),
            'lektorius' => $request->get('lektorius'),
            'laikas' => $request->get('laikas'),
            'mokymo_kalba' => $request->get('mokymo_kalba'),
            'fk_Darbuotojasid' => $first->id,
            'fk_Auditorijaid_Auditorija' => $request->get('fk_Auditorijaid_Auditorija')
        ]);
        $paskaita->save();
        return redirect()->back()->with('message', 'Paskaitos duomenys sėkmingai pridėti');
    }

    public function show(Request $request)
    {
    }


    public function edit($id)
    {
        $paskaita = Paskaita::FindOrFail($id);
        $auditorija_list = DB::table('auditorija')->get();
        return view('imone.paskaitos_redagavimo_langas', compact('paskaita'), compact('auditorija_list'));
    }

    public function update(Request $request, Paskaita $paskaita, $id)
    {
        $paskaita = Paskaita::findOrFail($id);
        $paskaita->update([
            'tema' => request('tema'),
            'data' => request('data'),
            'trukme' => request('trukme'),
            'vieta' => request('vieta'),
            'papildoma_informacija' => request('papildoma_informacija'),
            'lektorius' => request('lektorius'),
            'laikas' => request('laikas'),
            'mokymo_kalba' => request('mokymo_kalba'),
            'fk_Auditorijaid_Auditorija' => request('fk_Auditorijaid_Auditorija')
        ]);
        return redirect('/imone/paskaitos');
    }

    public function destroy($id)
    {
        $room = Paskaita::findOrFail($id);
        $room->delete();
        return redirect('/imone/paskaitos')->with('message', 'Paskaitos duomenys sėkmingai ištrinti');
    }
}
