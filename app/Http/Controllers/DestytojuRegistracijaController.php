<?php


namespace App\Http\Controllers;

use App\User;

use App\Product;
use Illuminate\Http\Request;
use App\Imone;
use Illuminate\Support\Facades\Validator;
use Session;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;

class DestytojuRegistracijaController extends Controller
{

    public function create()
    {
        return view('Destytojas.Destytojo_registracijos_langas');
    }

    public function store(Request $request)
    {

        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|confirmed'
        ]);
        // return Validator::make($request, [
        //     'name' => 'required|string|max:255:users',
        //     'email' => 'required|string|email|max:255|unique:users',
        //     'password' => 'required|string|min:6|confirmed',
        // ]);

        //return redirect('/imone/registracija')->with('message', 'Toks prisijungimo vardas/El. paštas jau yra');

        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => request('password'),
            'user_level' => 3
        ]);

        Destytojas2::create([
            'pavadinimas' => request('name'),
            'sritis' => request('surname'),
            'el_Pastas' => request('email'),
            'fk_imone_user' => $user->id
        ]);

        auth()->login($user);
        return redirect('/Destytojas/Prisijungti')->with('message', 'Sėkmingai prisiregistravote prie įmonės posistemės');
    }
}
