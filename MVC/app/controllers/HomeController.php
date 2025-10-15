<?php

namespace app\Controllers;

use lib\controller;

class HomeController extends controller{

    public function index(){
        
        return $this->view("HomeView", ["title"=>"Home SDS25"]);
    }

    public function dayOne() {
        return $this->view("DayOne_View", ["title"=> "Día 1 SDS25"]);
    }

    public function dayTwo(){
        return $this->view("DayTwo_View", ["title"=>"Día 2 SDS25"]);
    }

}