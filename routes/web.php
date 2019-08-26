<?php

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

use App\Task;
use Illuminate\Http\Request;

// Route::get('/', function () {
//     return view('welcome');
// });

//Show Task Dashboard
Route::get('/', function () {
    return view('tasks');
});

//Add new Task
Route::post('/task', function() {
    //
});

//Delete Task
Route::delete('/task/{task}', function(Task $task) {
    //
});
