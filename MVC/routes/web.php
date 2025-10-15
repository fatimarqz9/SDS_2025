<?php
use app\controllers\HomeController;
use lib\Route;


Route::get("/", [HomeController::class, "index"]);
Route::get("/dia1", [HomeController::class, "dayOne"]);
Route::get("/dia2", [HomeController::class, "dayTwo"]);


Route::dispatch();