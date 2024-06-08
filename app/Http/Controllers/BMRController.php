<?php

namespace App\Http\Controllers;

use App\Models\User;  // Import the Resep model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;

class BMRController extends Controller
{
    public function HitungBMR(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'umur' => 'required|numeric',
            'jenis_kelamin' => 'required|string',
            'berat_badan' => 'required|numeric',
            'tinggi_badan' => 'required|numeric',
        ]);

        // Calculate the user's BMR
        $bmr = 0;
        if ($request->jenis_kelamin == 'Laki-laki') {
            $bmr = 66 + (13.7 * $request->berat_badan) + (5 * $request->tinggi_badan) - (6.8 * $request->umur);
        } else if ($request->jenis_kelamin == 'Perempuan') {
            $bmr = 665 + (9.6 * $request->berat_badan) + (1.8 * $request->tinggi_badan) - (4.7 * $request->umur);
        }
        return response()->json(['bmr' => $bmr], 200);
    }


}
