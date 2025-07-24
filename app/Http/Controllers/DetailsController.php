<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\View\View;

class DetailsController extends Controller
{
    public function detail($id)
    {
        $responce = Http::get('https://cdnayak2000-qtrip.onrender.com/adventures/detail', [
            'adventure' => $id
        ]);

        if ($responce->successful()) {
            $advDetails = $responce->json();
        } else {
            $advDetails = [];
        }
        return view('detail', compact('advDetails', 'id'));
    }
}
