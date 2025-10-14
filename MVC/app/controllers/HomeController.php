<?php

namespace app\Controllers;

use lib\controller;

class HomeController extends controller{

    public function index(){
        
        return $this->view("HomeView", ["title"=>"Home SDS 2025"]);
    }
}