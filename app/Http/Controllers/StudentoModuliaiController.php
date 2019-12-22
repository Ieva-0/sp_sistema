<?php

namespace App\Http\Controllers;

use App\Modulis;
use function foo\func;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class StudentoModuliaiController extends Controller
{
    public function index ()
    {
        $id = Auth::id();

        $moduliai = Modulis::join('mokymo_kalbos', 'mokymo_kalba','=','mokymo_kalbos.id_Mokymo_kalbos')
            ->leftjoin('studentai_moduliai',function($join){
                $join->on('Kodas', '=','studentai_moduliai.fk_Moduliskodas')->where('fk_studentasid','=',$id = Auth::id());
            })
            ->where('fk_studentasid','!=',$id)->orWhere('fk_studentasid',NULL)
            ->paginate(10);

       return view('Studentas.studento_uzsiemimu_registracija',compact('moduliai'));
    }

    public function store ()
    {

        $id = Auth::id();
        DB::table('studentai_moduliai')->insert(
            [
                'fk_Studentasid' => $id,
                'fk_Moduliskodas' => request('Kodas')
            ]);

        return redirect()->to('/studentas/uzsiemimai');
    }
}
