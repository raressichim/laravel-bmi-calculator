<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class BmiController extends Controller
{
    public function index(): View
    {
        return view('bmi');
    }

    public function calculate(Request $request): View
    {
        $request->validate([
            'weight' => 'required|numeric|min:1',
            'height' => 'required|numeric|min:1',
        ]);

        $weight = (float)$request->weight;
        $height = (float)$request->height / 100;

        $bmi = $weight / ($height * $height);

        $category = 'Obese';

        if ($bmi < 18.5) {
            $category = 'Underweight';
        } elseif ($bmi < 24.9) {
            $category = 'Normal weight';
        } elseif ($bmi < 29.9) {
            $category = 'Overweight';
        }

        return view('bmi', [
            'bmi' => round($bmi, 2),
            'category' => $category
        ]);
    }
}
