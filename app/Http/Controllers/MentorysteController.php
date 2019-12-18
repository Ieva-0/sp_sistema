<?php

namespace App\Http\Controllers;

use App\Destytojas;
use App\MentorPrasymas;
use App\Studentas;
use Illuminate\Http\Request;

class MentorysteController extends Controller
{
    public function index() {
        $prasymai = MentorPrasymas::all();
        $studentai = Studentas::all();
        return view('Studiju posisteme.mentorystes_prasymai', compact('prasymai', 'studentai'));
    }
    public function show($id) {
        $prasymas = MentorPrasymas::FindOrFail($id);
        $destytojai = Destytojas::where('laisvas_karjeros_mentorius', true)->get();
        $studentas = Studentas::where('fk_studentas_user', $prasymas->studentas)->first();
        return view('Studiju posisteme.mentorystes_prasymas', compact('prasymas', 'destytojai', 'studentas'));
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
        $destytojai = Destytojas::where('laisvas_karjeros_mentorius', true)->get();
        return view('Studiju posisteme.laisvi_mentoriai', compact('destytojai'));
    }
}
