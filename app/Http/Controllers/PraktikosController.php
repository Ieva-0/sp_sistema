<?php

namespace App\Http\Controllers;

use Session;
use App\Product;
use App\Praktika;

use App\Registracija_praktikai;
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
        // return view('Imone/imones_praktiku_sarasas')->with('praktiku_list', $praktiku_list)->with('imone', $imone);

        if (sizeof($praktiku_list) == 0) {
            return view('Imone/imones_praktiku_sarasas_tuscia')->with('praktiku_list', $praktiku_list)->with('imone', $imone)->with('message', 'Jūs neturite sukūrę paskaitų jeigu norėtumėte matyti paskaitas, spauskite „Paskaitos sukūrimas”.');
        } else {

            return view('Imone/imones_praktiku_sarasas')->with('praktiku_list', $praktiku_list)->with('imone', $imone);
        }
    }
    public function create()
    {
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

    public function show($id)
    {
        $student_list = DB::table('registracija_praktikai')->where('fk_praktikosid', $id)->get();
        return view('imone.prisiregistravusiu_studentu_sarasas')->with('student_list', $student_list);
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
        $first = DB::table('registracija_praktikai')->where('fk_praktikosid', $id)->delete();
        //$registracija = Registracija_praktikai::findOrFail($id);
        // $registracija->delete();

        $praktika = Praktika::findOrFail($id);
        $praktika->delete();
        return redirect('/imone/praktikos')->with('message', 'Praktikos duomenys sėkmingai ištrinti');
    }
}
