<?php

class EnlacesPaginas{
    
    public function modeloEnlacesPaginas($modeloEnlaces){
     /*Viene un parametro y se compara a donde le toca ir y devuelve el enlace a la carpeta*/   
        if($modeloEnlaces == "comprar" || $modeloEnlaces == "catalogo" || $modeloEnlaces == "ingreso" || $modeloEnlaces == "contactos")
        {
            $modulo = "views/".$modeloEnlaces.".php";
        }

        else if($modeloEnlaces == "index")
        {
            $modulo = "views/inicio.php";
        }
        else
        {
            $modulo = "views/inicio.php";
        }

        return $modulo;

    }
}

?>