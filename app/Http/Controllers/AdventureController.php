<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\View\View;

class AdventureController extends Controller
{
    public function Aindex($city){
        
        $response = Http::get('https://cdnayak2000-qtrip.onrender.com/adventures', ['city' => $city]);

        if ($response->successful()) {
            $adventures = $response->json();
        } else {
            $adventures = []; 
        }

        return view('index', compact('adventures', 'city'));
    }
}


