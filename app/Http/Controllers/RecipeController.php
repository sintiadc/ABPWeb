<?php

namespace App\Http\Controllers;

use App\Models\Resep;  // Import the Resep model
use Illuminate\Http\Request;
use App\Http\Controllers\MyResepController;
use App\Http\Controllers\AuthController;

class RecipeController extends Controller
{
    public function UjicreateRecipe()
    {
        // Define the new recipe details
        $newRecipe = [
            'name' => 'Chicken Salad',
            'calories' => 209,
            'ingredients' => 11,
            'servings' => 6,
            'prep_time' => '25 mins',
            'meal' => 'Breakfast',
            'health' => 'Vegan',
            'detail_resep' => 'This is a healthy vegan chicken salad perfect for breakfast.',
            'like' => '0'
        ];

        // Create the new recipe
        $resep = Resep::create($newRecipe);

        return response()->json($resep, 201);  // Return the created recipe as JSON with a 201 status code
    }

    public function createRecipe(Request $request)
{
        // Validate the incoming request data
      
        $newRecipe = $request->validate([
            'name' => 'required|string',
            'picture' => 'required|string',
            'calories' => 'required|numeric',
            'ingredients' => 'required|string',
            'servings' => 'required|numeric',
            'prep_time' => 'required|string',
            'meal' => 'required|string',
            'health' => 'required|string',
            'detail_resep' => 'required|string',
            'like' => 'required|numeric'
        ]);
        $newRecipe = [
            'name' => $request->name,
            'picture' => $request->picture,
            'calories' => $request->calories,
            'ingredients' => $request->ingredients,
            'servings' => $request->servings,
            'prep_time' => $request->prep_time,
            'meal' => $request->meal,
            'health' => $request->health,
            'detail_resep' => $request->detail_resep,
            'like' => $request->like
        ];
        // Create the new recipe
        $resep = Resep::create($newRecipe);

        // Create an instance of MyResepController
        $myResepController = new MyResepController();

        // Get the user ID
        $userId = 1;  // Hardcoded for now, will be replaced with the actual user ID

        // Create a new request object
        $myRequest = new Request([
            'id_user' => $userId,
            'id_resep' => $resep->id,
            'Tipe' => 'MyResep'
        ]);

        // Call the createMyResep method from MyResepController
        $myResepController->createMyResep($myRequest);

        return response()->json($resep, 200);  // Return the created recipe as JSON with a 201 status code
    }


    public function getRecipe()
    {
        // Fetch all recipes from the database
        $recipes = Resep::all();

        // Check if there are any recipes
        if ($recipes->isEmpty()) {
            // If there are no recipes, return an empty response with a 404 status code
            return response()->json(['message' => 'No recipes found.'], 404);
        }

        // If there are recipes, return them as a JSON response with a 200 status code
        return response()->json($recipes, 200);
    }

    public function getRecipeById($id)
    {
        // Fetch the recipe by its ID from the database
        $recipe = Resep::find($id);

        // Check if the recipe exists
        if (!$recipe) {
            // If the recipe does not exist, return a 404 response
            return response()->json(['message' => 'Recipe not found.'], 404);
        }

        // If the recipe exists, return it as a JSON response with a 200 status code
        return response()->json($recipe, 200);
    }

    public function getRecipeByLike()
    {
        // Fetch all recipes from the database and order them by 'like' column in descending order
        $recipes = Resep::orderBy('like', 'desc')->get();

        // Check if there are any recipes
        if ($recipes->isEmpty()) {
            // If there are no recipes, return an empty response with a 404 status code
            return response()->json(['message' => 'No recipes found.'], 404);
        }

        // If there are recipes, return them as a JSON response with a 200 status code
        return response()->json($recipes, 200);
    }

    public function getRecipeByFilter(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'meal' => 'nullable|string',
            'health' => 'nullable|string',
        ]);

        // Fetch all recipes from the database
        $query = Resep::query();

        // Apply filtering if 'meal' or 'health' parameters are provided
        if ($request->has('meal')) {
            $query->orWhere('meal', $request->input('meal'));
        }

        if ($request->has('health')) {
            $query->orWhere('health', $request->input('health'));
        }

        // Get filtered recipes
        $recipes = $query->get();

        // Check if there are any recipes
        if ($recipes->isEmpty()) {
            // If there are no recipes, return an empty response with a 404 status code
            return response()->json(['message' => 'No recipes found.'], 404);
        }

        // If there are recipes, return them as a JSON response with a 200 status code
        return response()->json($recipes, 200);
    }

    // Function to update a recipe by ID
    public function updateRecipe(Request $request, $id)
    {
        // Find the recipe by ID
        $semua_resep = Resep::all();

        foreach ($semua_resep as $resep) {
            if ($resep->id == $id) {
                $recipe = $resep;
            }
        }

        // Check if the recipe exists
        if (!$recipe) {
            // If the recipe doesn't exist, return a 404 response
            return response()->json(['message' => 'Recipe not found.'], 404);
        }

        // Update the recipe details
        $recipe->update($request->all());

        // Return the updated recipe as JSON with a 200 status code
        return response()->json($recipe, 200);
    }

    // Function to delete a recipe by ID
    public function deleteRecipe($id)
    {
        // Find the recipe by ID
        $recipe = Resep::find($id);

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

    public function tambahlike($id)
    {
        // Find the recipe by ID
        $recipe = Resep::find($id);

        // Check if the recipe exists
        if (!$recipe) {
            // If the recipe doesn't exist, return a 404 response
            return response()->json(['message' => 'Recipe not found.'], 404);
        }

        // Increment the 'like' count
        $recipe->increment('like');

        // Return the updated recipe with a success message
        return response()->json([
            'message' => 'Like added successfully.',
            'recipe_name' => $recipe->name,
            'like_count' => $recipe->like
        ], 200);
    }
}
