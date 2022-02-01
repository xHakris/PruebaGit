<?php

Class ControlNavegacion{

    public function plantilla(){
        include "views/template.php";
    }

    public function controladorEnlacesPaginas(){
        if(isset($_GET['action']))
        {
            $controlEnlaces = $_GET['action'];
        }
        else{
            $controlEnlaces = "views/inicio.php";
        }

        $respuesta = EnlacesPaginas::modeloEnlacesPaginas($controlEnlaces);
        include $respuesta;
    }
}
?>