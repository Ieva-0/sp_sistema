<?php

namespace App\Http\Controllers;

use App\Destytojas;
use App\MentorPrasymas;
use App\Studentas;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class MentorysteController extends Controller
{
    public function index() {
        if(Gate::allows('centras')) {
            $prasymai = MentorPrasymas::all();
            $studentai = Studentas::all();
            $check = MentorPrasymas::count();
            if($check ==0)
            return view('Studiju posisteme.mentorystes_prasymai', compact('prasymai', 'studentai'))->withErrors(['status' => 'Prašymų nėra.']);
            else return view('Studiju posisteme.mentorystes_prasymai', compact('prasymai', 'studentai'));
        }
        else abort(404);
    }
    public function show($id) {
        if(Gate::allows('centras')) {
            $prasymas = MentorPrasymas::FindOrFail($id);
            $destytojai = Destytojas::where('laisvas_karjeros_mentorius', true)->get();
            $studentas = Studentas::where('fk_studentas_user', $prasymas->studentas)->first();
            return view('Studiju posisteme.mentorystes_prasymas', compact('prasymas', 'destytojai', 'studentas'));
        }
        else abort(404);
    }
    public function destroy($id)
    {
        if(request('decision') == 1)
        {
            $prasymas = MentorPrasymas::FindOrFail($id);
            $studentas = Studentas::where('fk_studentas_user', $prasymas->studentas)->first();
            $studentas->update([
                'fk_Destytojastabelio_nr' => request('mentorius')
            ]);
            $destytojas = Destytojas::where('fk_destytojas_user', request('mentorius'));
            $destytojas->update([
                'laisvas_karjeros_mentorius' => false
            ]);
            $prasymas->delete();
            return redirect('/studijos/mentoryste/prasymai');
        }
        else {
            $prasymas = MentorPrasymas::FindOrFail($id);
            $prasymas->delete();
            return redirect('/studijos');
        }
    }
    public function laisvi() {
        if(Gate::allows('centras')) {
            $destytojai = Destytojas::where('laisvas_karjeros_mentorius', true)->get();
            $check = Destytojas::where('laisvas_karjeros_mentorius', true)->count();
            if($check == 0)
            return view('Studiju posisteme.laisvi_mentoriai', compact('destytojai'))->withErrors(['status' => 'Nėra laisvų mentorių.']);
            else return view('Studiju posisteme.laisvi_mentoriai', compact('destytojai'));
        }
        else abort(404);
    }
    public function atsisakyti() {
        $id = auth()->user()->id;
        $studentas = Studentas::where('fk_studentas_user', $id);
        $destytojas = Destytojas::where('fk_destytojas_user', $studentas->fk_Destytojastabelio_nr);
        $studentas->update([
            'fk_Destytojastabelio_nr' => ''
        ]);
        $destytojas->update([
            'laisvas_karjeros_mentorius' => true
        ]);
    }
    public function create()
    {
        if(Gate::allows('studentas')) {
            return view('Studiju posisteme.sukurti_mentor_prasyma');
        }
        else abort(404);
    }
    public function store()
    {
        $this->validate(request(), [
            'motyvacinis' => 'required|max:1000|min:30',
        ],
            [
                'motyvacinis.required' => 'Būtina pateikti motyvacinį laišką.',
                'motyvacinis.max' => 'Motyvacinis laiškas turi būti trumpesnis nei 1000 simbolių.',
                'motyvacinis.min' => 'Motyvacinis laiškas turi būti ilgesnis nei 30 simbolių.',
            ]);
        MentorPrasymas::create([
            'studentas' => '1',
            'motyvacinis_tekstas' => request('motyvacinis'),
            'data' => Carbon::now()->format('Y-m-d')
        ]);
        return redirect('/studijos')->withErrors(['status' => 'Prašymas sukurtas.']);
    }
}
