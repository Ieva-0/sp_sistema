<?php

namespace App\Http\Controllers;

use Session;
use App\Product;
use App\Praktika;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PraktikosController extends Controller
{
    public function index($id = 0)
    {
        //$results = DB::select("SELECT * FROM praktikos LEFT JOIN imones ON praktikos.fk_Imoneid=imones.id");

        // $first = DB::table('imones')->where('fk_imone_user', auth()->user()->id)->first();

        //$praktiku_list = DB::table('praktikos')->where('fk_Imoneid', $first->id)->get();
        // $imone = $first->pavadinimas;
        //return view('Imone/imones_praktiku_sarasas')->with('praktiku_list', $results);

        $first = DB::table('imones')->where('fk_imone_user', auth()->user()->id)->first();
        $praktiku_list = DB::table('praktikos')->where('fk_Imoneid', $first->id)->get();
        $imone = $first->pavadinimas;
        return view('Imone/imones_praktiku_sarasas')->with('praktiku_list', $praktiku_list)->with('imone', $imone);
    }
    public function create()
    {
        // $auditorija_list = DB::table('auditorija')->get();
        // return view('Imone.Praktika.paskaitos_kurimo_langas')->with('auditorija_list', $auditorija_list);
        return view('Imone.paskaita.praktikos_kurimo_langas');
    }

    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'trukme' => 'required',
                'dalyviu_Skaicius',
                'projekto_Tema' => 'required',
                'laikas' => 'required'
            ]
        );

        $first = DB::table('imones')->where('fk_imone_user', auth()->user()->id)->first();
        print_r("HEEEEEEEY");
        $praktika = new Praktika([
            'trukme' => $request->get('trukme'),
            'dalyviu_Skaicius' => 0,
            'projekto_Tema' => $request->get('projekto_Tema'),
            'laikas' => $request->get('laikas'),
            'fk_Imoneid' => $first->id,
        ]);
        $praktika->save();
        return redirect()->back()->with('message', 'Praktikos duomenys sėkmingai pridėti');
    }

    public function show(Request $request)
    {
    }


    public function edit($id)
    {
        $praktika = Praktika::FindOrFail($id);
        return view('imone.praktikos_redagavimo_langas', compact('praktika'));
    }

    public function update(Request $request, Praktika $praktika, $id)
    {
        $praktika = Praktika::findOrFail($id);
        $praktika->update([
            'trukme' => request('trukme'),
            'projekto_Tema' => request('projekto_Tema'),
            'laikas' => request('laikas'),
        ]);
        return redirect()->back()->with('message', 'Praktikos duomenys sėkmingai atnaujinti');
    }

    public function destroy($id)
    {
        $praktika = Praktika::findOrFail($id);
        $praktika->delete();
        return redirect('/imone/praktikos')->with('message', 'Praktikos duomenys sėkmingai ištrinti');
    }
}
