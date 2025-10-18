<?php

namespace app\Controllers;

use app2\models\VisitaModel as ModelsVisitaModel;
use lib\controller;
use app\models\VisitaModel;

class HomeController extends controller
{

    public function index()
    {

        return $this->view("HomeView", ["title" => "Home SDS25"]);
    }

    public function dayOne()
    {
        return $this->view("DayOne_View", ["title" => "Día 1 SDS25"]);
    }

    public function dayTwo()
    {
        return $this->view("DayTwo_View", ["title" => "Día 2 SDS25"]);
    }
    public function dayThree()
    {
        return $this->view("DayThree_View", ["title" => "Día 3 SDS25"]);
    }
    public function dayFour()
    {
        return $this->view("DayFour_View", ["title" => "Día 4 SDS25"]);
    }
    public function dayFive()
    {
        return $this->view("DayFive", ["title" => "Día 5 SDS25"]);
    }
    public function perfil()
    {
        return $this->view("Perfil_View", ["title" => "Mi información"]);
    }

    public function registrarVisita()
    {
        $visita = new VisitaModel();
        $data = $visita->getVisita();
        return $this->view("registrarVisita", [
            "dataVisitas" => $data
        ]);
    }

    public function recibirFormulario()
    {
        if (isset($_POST)) {
            $visita = new VisitaModel();

            if ($visita->guardarVisita($_POST)) {
                return header("Location: registrarVisita");
            }
        }
    }
}
