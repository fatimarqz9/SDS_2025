<?php
use app\controllers\HomeController;
use lib\Route;


Route::get("/", [HomeController::class, "index"]);
Route::get("/dia1", [HomeController::class, "dayOne"]);
Route::get("/dia2", [HomeController::class, "dayTwo"]);
Route::get("/dia3", [HomeController::class, "dayThree"]);
Route::get("/dia4", [HomeController::class, "dayFour"]);
Route::get("/dia5", [HomeController::class, "dayFive"]);
Route::get("/perfil", [HomeController::class, "perfil"]);
Route::get("/registrarVisita", [HomeController::class, "registrarVisita"]);


Route::dispatch();