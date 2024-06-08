<?php

namespace App\Http\Controllers;

use App\Models\MyResep;  // Import the Resep model
use Illuminate\Http\Request;

class MyResepController extends Controller
{

    public function getRecipe()
    {
        // Fetch all recipes from the database
        $recipes = MyResep::all();

        // Check if there are any recipes
        if ($recipes->isEmpty()) {
            // If there are no recipes, return an empty response with a 404 status code
            return response()->json(['message' => 'No recipes found.'], 404);
        }

        // If there are recipes, return them as a JSON response with a 200 status code
        return response()->json($recipes, 200);
    }

    public function getRecipeByUserAndMyResep()
    {
        // Create an instance of AuthController
        //$authController = new AuthController();

        // Get the authenticated user ID
        $userId = 1;  // Hardcoded for now, will be replaced with the actual user ID

        // Fetch recipes from MyResep table associated with the specified user
        $myResepItems = MyResep::where('id_user', $userId)->get();

        // Initialize an array to store filtered recipes
        $recipes = [];

        // Iterate through each MyResep item
        foreach ($myResepItems as $myResep) {
            // Check if the 'Tipe' column matches the provided value
            if ($myResep->Tipe === 'MyResep') {
                // If 'Tipe' matches the provided value, fetch the associated resep and add it to the recipes array
                $recipes[] = $myResep->resep;
            }
        }

        // Check if there are any recipes
        if (empty($recipes)) {
            // If there are no recipes, return an empty response with a 404 status code
            return response()->json(['message' => 'No recipes found for the specified user and Tipe.'], 404);
        }

        // If there are recipes, return them as a JSON response with a 200 status code
        return response()->json($recipes, 200);
    }

    public function getRecipeByUserAndBookmark()
    {
        // Create an instance of AuthController
        //$authController = new AuthController();

        // Get the authenticated user ID
        $userId = 1;  // Hardcoded for now, will be replaced with the actual user ID

        // Fetch recipes from MyResep table associated with the specified user
        $myResepItems = MyResep::where('id_user', $userId)->get();

        // Initialize an array to store filtered recipes
        $recipes = [];

        // Iterate through each MyResep item
        foreach ($myResepItems as $myResep) {
            // Check if the 'Tipe' column matches the provided value
            if ($myResep->Tipe === 'Bookmark') {
                // If 'Tipe' matches the provided value, fetch the associated resep and add it to the recipes array
                $recipes[] = $myResep->resep;
            }
        }

        // Check if there are any recipes
        if (empty($recipes)) {
            // If there are no recipes, return an empty response with a 404 status code
            return response()->json(['message' => 'No recipes found for the specified user and Tipe.'], 404);
        }

        // If there are recipes, return them as a JSON response with a 200 status code
        return response()->json($recipes, 200);
    }

    public function addBookmark(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'resep_id' => 'required|exists:reseps,id',
        ]);

        // Check if the recipe is already bookmarked by the user
        $existingBookmark = MyResep::where('user_id', $validatedData['user_id'])
            ->where('resep_id', $validatedData['resep_id'])
            ->where('Tipe', 'Bookmark')
            ->first();

        if ($existingBookmark) {
            // If the recipe is already bookmarked, return a 409 Conflict response
            return response()->json(['message' => 'Recipe already bookmarked.'], 409);
        }

        // Create a new bookmark
        $bookmark = MyResep::create([
            'user_id' => $validatedData['user_id'],
            'resep_id' => $validatedData['resep_id'],
            'Tipe' => 'Bookmark',
        ]);

        // Return the created bookmark as JSON with a 201 status code
        return response()->json($bookmark, 201);
    }


    // Function to create MyResep
    public function createMyResep(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'id_user' => 'required|exists:users,id',
            'id_resep' => 'required|exists:reseps,id',
            'Tipe' => 'required|string',
        ]);

        // Create MyResep
        $myResep = MyResep::create($validatedData);

        // Return the created MyResep as JSON with a 201 status code
        return response()->json($myResep, 201);
    }

    // Function to delete a recipe by ID
    public function deleteRecipe($id)
    {
        // Find the recipe by ID
        $recipe = MyResep::find($id);

        // Check if the recipe exists
        if (!$recipe) {
            // If the recipe doesn't exist, return a 404 response
            return response()->json(['message' => 'Recipe not found.'], 404);
        }

        // Delete the recipe
        $recipe->delete();

        // Return a success message with a 200 status code
        return response()->json(['message' => 'Recipe deleted successfully.'], 200);
    }
}
