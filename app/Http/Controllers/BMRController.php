<?php

namespace App\Http\Controllers;

use App\Models\User;  // Import the Resep model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;

class BMRController extends Controller
{
    public function HitungBMR()
    {
        // Create an instance of AuthController
        $authController = new AuthController();

        // Get the authenticated user ID
        $userId = $authController->getUserId();

        // Check if the user exists
        $user = User::find($userId);

        // Check if the user exists
        if (!$user) {
            // If the user does not exist, return a 404 Not Found response
            return response()->json(['message' => 'User not found.'], 404);
        }

        // Calculate the user's BMR
        $bmr = 0;
        if ($user->jenis_kelamin == 'Laki-laki') {
            $bmr = 66 + (13.7 * $user->berat_badan) + (5 * $user->tinggi_badan) - (6.8 * $user->umur);
        } else if ($user->jenis_kelamin == 'Perempuan') {
            $bmr = 665 + (9.6 * $user->berat_badan) + (1.8 * $user->tinggi_badan) - (4.7 * $user->umur);
        }
        return response()->json(['bmr' => $bmr], 200);
    }


}
