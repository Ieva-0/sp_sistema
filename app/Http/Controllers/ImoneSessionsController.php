<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ImoneSessionsController extends Controller
{
    public function create()
    {
        return view('imone.imones_prisijungimo_langas');
    }

    public function store()
    {
        if (auth()->attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'Neteisingi prisijungimo duomenys'
            ]);
        }

        return redirect()->to('/imone');
    }

    public function destroy()
    {
        auth()->logout();

        return redirect()->to('/');
    }
}
