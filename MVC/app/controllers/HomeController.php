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
    public function dayThree(){
        return $this->view("DayThree_View", ["title"=>"Día 3 SDS25"]);
    }
    public function dayFour(){
        return $this->view("DayFour_View", ["title"=>"Día 4 SDS25"]);
    }
    public function dayFive(){
        return $this->view("DayFive", ["title"=>"Día 5 SDS25"]);
    } 
     public function perfil(){
        return $this->view("Perfil_View", ["title"=>"Mi información"]);
    }
    
    public function registrarVisita(){
        return $this->view("registrarVisita", ["title"=>"Registrar Visita"]);
    }

}