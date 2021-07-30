<?php

namespace App\Http\Controllers;

use App\Models\Klantgegeven;
use Illuminate\Http\Request;

class KlantgegevensController extends Controller
{
    public function index()
    {
        $klantgegevens = Klantgegeven::all();
        // dd($klantgegevens);
        return view('klantgegevens.index', ['klantgegevens' => $klantgegevens]);
    }
}
