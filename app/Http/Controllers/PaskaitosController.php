<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Paskaita;

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

        return view('Imone.paskaita.index', compact('paskaitos'));


        // Fetch all records
        // $userData['data'] = Paskaita::getuserData();

        // $userData['edit'] = $id;

        // // Fetch edit record
        // if ($id > 0) {
        //     $userData['editData'] = Paskaita::getuserData($id);
        // }

        // // Pass to view
        // return view('index')->with("userData", $userData);

        //
        //$paskaita = Paskaita::all();
        //return view('paskaita.index', compact('paskaita'));
    }
    //


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Imone.paskaita.paskaitos_kurimo_langas');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       /* $this->validate(
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
                'fk_Darbuotojasid' => 'required',
                'fk_Auditorijaid_Auditorija' => 'required'
            ]
        );*/

        $paskaita = array(
            'data' => $request->get('data'),
            'trukme' => $request->get('trukme'),
            'vieta' => $request->get('vieta'),
            'tema' => $request->get('tema'),
            'papildoma_informacija' => $request->get('papildoma_informacija'),
            'lektorius' => $request->get('lektorius'),
            'laikas' => $request->get('laikas'),
            'mokymo_kalba' => $request->get('mokymo_kalba'),
            'fk_Darbuotojasid' => $request->get('fk_Darbuotojasid'),
            'fk_Auditorijaid_Auditorija' => $request->get('fk_Auditorijaid_Auditorija')
        );
        //DB::table('paskaita')->insert($paskaita);
        //$paskaita->save();


        //return redirect()->route('imone.imone/create')->with('success', 'Data Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
        $result = DB::select("insert into paskaita (id, tema, data, trukme,  ,  vieta ,  papildoma_informacija ,  lektorius ,
        laikas ,  mokymo_kalba ,  fk_Darbuotojasid ,  fk_Auditorijaid_Auditorija )
        VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)", [1, 1, 1, 1, 1, 1, 1, 1, 1, 1]);
        print_r($result);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
