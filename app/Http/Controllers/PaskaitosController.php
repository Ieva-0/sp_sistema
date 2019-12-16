<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Paskaita;

use App\Http\Requests\ServiceRequest;
use App\Service;
use App\Http\Controllers\Controller;

class PaskaitosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id = 0)
    {
        $paskaitos = Paskaita::all()->toArray();




        return view('Imone.paskaita.paskaitos_kurimo_langas.index', compact('paskaitos'));
    }
    //


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $auditorija_list = DB::table('auditorija')->get();
        return view('Imone.paskaita.paskaitos_kurimo_langas')->with('auditorija_list', $auditorija_list);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paskaita = Paskaita::FindOrFail($id);
        $auditorija_list = DB::table('auditorija')->get();
        return view('imone.paskaitos_redagavimo_langas', compact('paskaita'), compact('auditorija_list'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paskaita $paskaita, $id)
    {
        //$paskaita->update($request->all());
        $paskaita = Paskaita::findOrFail($id);
        //dd($request->tema);
        // $paskaita->update([
        //     'data' => $request->get('data'),
        //     'trukme' => $request->get('trukme'),
        //     'vieta' => $request->get('vieta'),
        //     'tema' => $request->get('tema'),
        //     'papildoma_informacija' => $request->get('papildoma_informacija'),
        //     'lektorius' => $request->get('lektorius'),
        //     'laikas' => $request->get('laikas'),
        //     'mokymo_kalba' => $request->get('mokymo_kalba'),
        //     'fk_Auditorijaid_Auditorija' => $request->get('fk_Auditorijaid_Auditorija')
        // ]);
        //

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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('paskaita')->delete($id);
        //
    }
}
