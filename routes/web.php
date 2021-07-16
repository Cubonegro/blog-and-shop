<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});


/* Route::post('/register', function(Request $request) { */
/*   $user = new User(); */
/*   $user->name = $request->name; */
/*   $user->lastname = $request->lastname; */
/*   $user->email = $request->email; */
/*   $user->password = bcrypt($request->password); */
/*   $user->rol = $request->rol; */
/*   $user->save(); */
/*   return json_encode(["msg" => "usuario agregado"]); */
/* }); */

// Token
Route::get('/api/v1/token', function () {
          return csrf_token(); 
});
