<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Use App\Article;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
	return $request->user();
});

//LO DE CASI SIEMPRE
Route::get('articles', 'ArticleController@index');
Route::get('articles/{article}', 'ArticleController@show');
Route::post('articles', 'ArticleController@store');
Route::put('articles/{article}', 'ArticleController@update');
Route::delete('articles/{article}', 'ArticleController@delete');


//Otra manera pero es muy indpendiente los grupos 
// https://stackoverflow.com/questions/34182806/multiple-route-file-instead-of-one-main-route-file-in-laravel-5
Route::prefix('v2')
	->group(base_path('routes/general/article.php'));

// Route::prefix('v2')
//     ->group(base_path('routes/general/admin.php'));


// LO mas ordenado, estructurado y escalable 😄
Route::prefix('v3')->group(function () {

	Route::get('/', function(){
		return response()->json('--- Bienvenido al API version 3  👍 ---', 200);
	});

	Route::prefix('articulos')
		->group(base_path('routes/general/article.php'));

	Route::prefix('admin')
			->group(base_path('routes/general/admin.php'));

});

Route::get('articles2', function() {
	// If the Content-Type and Accept headers are set to 'application/json',
	// this will return a JSON structure. This will be cleaned up later.
	return Article::all();
});

//  -----------  RUTAAA JWT 💻
Route::group([

    // 'middleware' => 'api',
    'prefix' => 'auth'

], function () {

    Route::post('register', [AuthController::class, 'register']);  // localhost:8000/api/auth/register
    Route::post('login', [AuthController::class, 'login']); // localhost:8000/api/auth/login
    Route::post('logout', [AuthController::class, 'logout']); // localhost:8000/api/auth/logout
    // Route::post('refresh', 'AuthController@refresh');
    Route::post('me', [AuthController::class, 'me']);

});