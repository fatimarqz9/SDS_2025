<?php

namespace lib;

class controller{


 public function view($vista, $data=[]){
        extract($data);
        if(file_exists("../app/views/$vista.php"))
        {
            ob_start();
            include ("../app/views/$vista.php");
            $content = ob_get_clean();
            return $content;
        }
        else{
            echo "No se pudo cargar la vista ../app/views/$vista.php";
        }
        return "Hola desde el home";
    }

}

?>