<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function listerDetail()
    {
        // Logique pour lister les détails
        return view('details.lister');
    }
}
