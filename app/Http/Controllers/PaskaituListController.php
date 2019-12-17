<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaskaituListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $first = DB::table('imones')->where('fk_imone_user', auth()->user()->id)->first();
        $paskaitos_list = DB::table('paskaita')->where('fk_Darbuotojasid', $first->id)->get();


        if (sizeof($paskaitos_list) == 0) {

            return view('/imone/imones_paskaitu_sarasas_tuscia')->with('paskaitos_list', $paskaitos_list)->with('message', 'Jūs neturite sukūrę paskaitų jeigu norėtumėte matyti paskaitas, spauskite „Paskaitos sukūrimas”.');
        }
        return view('Imone/imones_paskaitu_sarasas')->with('paskaitos_list', $paskaitos_list);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
