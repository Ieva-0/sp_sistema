<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DestytojuSessionController extends Controller
{
    public function create()
    {
        return view('Destytojas.Destytojo_prisijungimo_langas');
    }

    public function store()
    {
        if (auth()->attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'Neteisingi prisijungimo duomenys.'
            ]);
        }

        return redirect()->to('/Destytojas');
    }

    public function destroy()
    {
        auth()->logout();

        return redirect()->to('/destytojas');
    }
}
