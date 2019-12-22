<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentoPrisijungimoController extends Controller
{
    public function create()
    {
        return view('Studentas.studento_prisijungimas');
    }

    public function store()
    {
        if (auth()->attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'Neteisingi prisijungimo duomenys.'
            ]);
        }

        return redirect()->to('/studentas');
    }

    public function destroy()
    {
        auth()->logout();

        return redirect()->to('/studentas');
    }
}
