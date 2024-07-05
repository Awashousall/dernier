<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SomeController extends Controller
{
    public function sallMethod()
{
    $id = 1; // Exemple d'identifiant
    return view('sall', compact('id'));
}

    
}
