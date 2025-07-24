<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\View\View;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index(): View
    {
        $response = Http::get('https://cdnayak2000-qtrip.onrender.com/cities');

        if ($response->successful()) {
            $cities = $response->json();
        } else {
            $cities = []; // Fallback if API fails
        }

        return view('home', compact('cities'));
    }
}
