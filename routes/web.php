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
use App\Post;
use Illuminate\Http\Request;
use App\Task;
Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/{task}', 'TasksController@show');


Route::get('/posts', function (){
    $user = Auth::user();
    $posts = $user->posts;
    return view('posts.index', compact('posts'));
});

Route::get('/posts/create', 'PostController@create');

Route::post('/posts/create', 'PostController@store');

Route::get('/posts/{post}', 'PostController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/test', function (){

    return view('test', compact('messages', 'test'));
});

Route::get('/tests/{id}', function ($id, Request $request){
    return $id;
});
Route::get('/', function (){
    return view('welcome');
});
//Route::get('/task', function (){
//  $task = DB::table('tasks')->get();
//    return view('test', compact('task'));
//});

