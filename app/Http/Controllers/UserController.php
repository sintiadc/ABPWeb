<?php

namespace App\Http\Controllers;

use App\Models\User;  // Import the Resep model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;

class UserController extends Controller
{
    public function createUser()
    {
        // Define the new recipe details
        $newUser = [
            'name' => 'Sintia12',
            'email' => 'sintia@gmail.com1',
            'username' => 'sintia',
            'password' => Hash::make('sintia123'),
            'umur' => 20,
            'berat_badan' => 50,
            'tinggi_badan' => 160,
            'jenis_kelamin' => 'Perempuan',
            'created_at' => now(),
            'updated_at' => now(),
        ];

        // Create the new recipe
        $user = User::create($newUser);

        return response()->json($user, 201);  // Return the created recipe as JSON with a 201 status code
    }

    public function getUser()
    {
        // Fetch all recipes from the database
        $user = User::all();

        // Check if there are any recipes
        if ($user->isEmpty()) {
            // If there are no recipes, return an empty response with a 404 status code
            return response()->json(['message' => 'No User found.'], 404);
        }

        // If there are recipes, return them as a JSON response with a 200 status code
        return response()->json($user, 200);
    }
    public function getUserById($id)
    {
        // Get the user by ID
        $user = User::find($id);

        // Check if the user exists
        if (!$user) {
            // If the user doesn't exist, return a 404 response
            return response()->json(['message' => 'User not found.'], 404);
        }

        // Return the user as JSON with a 200 status code
        return response()->json($user, 200);
    }

    public function updateUser(Request $request)
    {

        // Check if the user exists
        $user = User::find(1);

        // Check if the user exists
        if (!$user) {
            // If the user doesn't exist, return a 404 response
            return response()->json(['message' => 'User not found.'], 404);
        }
        $validatedData = $request;
        // Update the user details
        $user->name = $validatedData['name'];
        $user->umur = $validatedData['umur'];
        $user->jenis_kelamin = $validatedData['jenis_kelamin'];
        $user->berat_badan = $validatedData['berat_badan'];
        $user->tinggi_badan = $validatedData['tinggi_badan'];
        $user->email = $validatedData['email'];
        $user->username = $validatedData['username'];
        $user->save();

        // Return the updated user as JSON with a 200 status code
        return response()->json($user, 200);
    }

    public function deleteUser()
    {
        // Create an instance of AuthController
        $authController = new AuthController();

        // Get the authenticated user ID
        $userId = $authController->getUserId();

        // Check if the user exists
        $user = User::find($userId);

        // Check if the user exists
        if (!$user) {
            // If the user doesn't exist, return a 404 response
            return response()->json(['message' => 'User not found.'], 404);
        }

        // Delete the user
        $user->delete();

        // Return a success message with a 200 status code
        return response()->json(['message' => 'User deleted successfully.'], 200);
    }


}
