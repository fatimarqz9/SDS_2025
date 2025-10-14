<?php
use app\controllers\HomeController;
use lib\Route;


Route::get("/", [HomeController::class, "index"]);
Route::get("/dia1", [HomeController::class, "dayOne"]);


Route::dispatch();