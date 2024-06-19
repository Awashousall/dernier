<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function handleAction(Request $request)
    {
        $action = $request->input('action');

        if ($action === 'list_students') {
            return redirect()->route('etudiant.index');
        } elseif ($action === 'list_conventions') {
            return redirect()->route('conventions.index');
        }

        return redirect()->route('dashboard');
    }
}
