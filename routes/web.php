<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MyResepController;
use App\Http\Controllers\BMRController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(['auth'])->group(function () {
});
    Route::get('/Home', function () {
        return view('Home');
    });
    Route::get('/resep/create-recipe', [RecipeController::class, 'createRecipe']);
    Route::get('/resep/get-recipe', [RecipeController::class, 'getRecipe'])->name('get-recipe');
    Route::get('/resep/update-recipe/{id}', [RecipeController::class, 'updateRecipe']);
    Route::get('/resep/tambah-like/{id}', [RecipeController::class, 'tambahLike']);
    Route::get('/resep/delete-recipe/{id}', [RecipeController::class, 'deleteRecipe']);
    Route::get('/resep/getByLike-recipe', [RecipeController::class, 'getRecipeByLike']);
    Route::get('/resep/getByFilter-recipe', [RecipeController::class, 'getRecipeByFilter']);

    Route::get('/user/create-user', [UserController::class, 'createUser']);
    Route::get('/user/get-user', [UserController::class, 'getUser'])->name('get-user');
    Route::get('/user/update-user/', [UserController::class, 'updateUser']);
    Route::get('/user/delete-user/', [UserController::class, 'deleteUser']);

    Route::get('/myresep/get-recipe', [MyResepController::class, 'getRecipe'])->name('get-myresep');
    Route::get('/myresep/create-recipe', [MyResepController::class, 'createMyResep']);
    Route::get('/myresep/delete-recipe/{id}', [MyResepController::class, 'deleteRecipe']);
    Route::get('/myresep/getByUserAndMyResep', [MyResepController::class, 'getRecipeByUserAndMyResep']);
    Route::get('/myresep/addBookmark/{id}', [MyResepController::class, 'addBookmark']);

    Route::get('/BMR', [UserController::class, 'BMR']);
    

    Route::post('/login', function (Request $request) {
        $credentials = $request->only('email', 'password');

        // Cek apakah email dan password cocok dengan data di database
        if (Auth::attempt($credentials)) {
            // Autentikasi berhasil, arahkan ke halaman produk
            return redirect('/Home');
        } else {
            // Autentikasi gagal, kembali ke halaman login dengan pesan error
            return redirect('/login')->with('error', 'Email or password incorrect');
        }
    })->name('login.submit');

    Route::get('/Recipes', function () {
        return view('Recipes');
    });

    Route::get('/Profil', function () {
        return view('Profil');
    });

    Route::get('/EditProfile', function () {
        return view('EditProfile');
    });

    Route::get('/MyRecipe', function () {
        return view('MyRecipe');
    });

    Route::get('/UploadRecipe', function () {
        return view('UploadRecipe');
    });

    Route::get('/DetailRecipe', function () {
        return view('DetailRecipe');
    });

    Route::get('/logout', function () {
        Auth::logout();
        return redirect('login');
    });


Route::get('/', function () {
    return view('LandingPage');
});

Route::get('/SignUp', function () {
    return view('SignUp');
});

Route::get('/Login', function () {
    return view('Login');
});

Route::get('/login', function () {
    // Check if user is already authenticated
    if (Auth::check()) {
        return redirect('/Home');
    }
    return view('Login');
})->name('login');




Route::post('/signup', [AuthController::class, 'register'])->name('register.submit');