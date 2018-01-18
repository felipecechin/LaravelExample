<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{   


    public function __construct()
    {
        //quem esta logado, nao pode acessar a pagina de login, apenas a de destruir sessao
        $this->middleware('guest', ['except' => 'destroy']);
    }

    public function create()
    {
        return view('sessions.create');
    }

    public function destroy()
    {
        auth()->logout();

        return redirect()->home();
    }

    public function store()
    {
        //dd(request(['email','password']));
        
        if (!auth()->attempt(request(['email','password']))) {
            return back()->withErrors([
                'message' => 'Please check your credentials'
            ]);
        }

        return redirect()->home();
    }
}
