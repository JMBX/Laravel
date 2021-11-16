<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;


 Route::get('/', function () {
    return view('welcome');
 });
//Route::get( '/about/{test}' , [MainController::class, 'aboutShow']);
//Route::get('/{title}{id}', function($title, $id){
  //  return view('about' , compact('title', 'id'));
    //['title'=>$title,
    //'id' => $id]
//});
