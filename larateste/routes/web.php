<?php

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
use App\Http\Controllers\EventController;
Route::get('/',[EventController::class,'index']);
Route::get('/events/create',[EventController::class,'create'])->middleware('auth');
Route::get('/events/{id}',[EventController::class,'show']);
Route::post('/events',[EventController::class,'store']);
Route::delete('/events/{id}',[EventController::class,'destroy'])->middleware('auth');
Route::get('/events/edit/{id}',[EventController::class,'edit'])->middleware('auth');
Route::put('/events/update/{id}',[EventController::class,'update'])->middleware('auth');
Route::get('/contact', function () {
    $nome = "Lucas";
    $rua = "Rua Castelo Branco";
    $array = [95,96,97,98,99];
    $pessoas = ['Uerley','João', 'Thor', 'Luana','Marta'];
    return view('contact' , ['nome' => $nome, 'rua' => $rua , 'telefone' => "8499624584", 'pessoas' => $pessoas, 'array' => $array]);
});

/*
Route::get('/comida', function () {
    return view('eat');
});
*/
/*
Route::get('/comida', function () {
    return view('contact');
});
*/
Route::get('/busca', function () {
    // $busca = request('search');
    $cade = ['Kaká','Luba','Danilo'];
    return view('search', ['cade' => $cade]);
});
/*
Route::get('/busca_teste/{id?}', function($id = null){
    return view('busquinha', ['id' =>$id]);
});*/
Route::get('/empresa',function(){
    $busca = request('search');
    $nome = 'Michel';
    $array = ['Lucas','Luciano','Fernando'];
    $numeros = [1,2,3];
    return view('empresa', ['nome'=> $nome, 'array'=> $array, 'numeros' => $numeros,'busca'=>$busca]);
});

Route::get('/empresa_teste/{id?}', function($id = null){
    $arr = [1,2,3,4,5];
    $names = ['João','Lucas','Thiago','Fernando'];
    return view('company', ['id' =>$id, 'arr' =>$arr,'names' =>$names]);
});

Route::get('/dashboard',[EventController::class, 'dashboard'])->middleware('auth');
