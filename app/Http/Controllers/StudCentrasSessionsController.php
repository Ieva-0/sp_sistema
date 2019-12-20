<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudCentrasSessionsController extends Controller
{
    public function create()
    {
        return view('Studiju posisteme.prisijungimas');
    }

    public function store()
    {
        if (auth()->attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'Neteisingi prisijungimo duomenys.'
            ]);
        }

        return redirect()->to('/studijos');
    }

    public function destroy()
    {
        auth()->logout();

        return redirect()->to('/studijos');
    }
}
