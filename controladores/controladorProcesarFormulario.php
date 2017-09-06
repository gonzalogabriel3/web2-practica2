<?php

   require_once '../clases/formularioPersona.php';

   /*Se crea un objeto de tipo formulario*/ 
   $miFormulario=new formularioPersona();
  
    
    /*Si venimos por el metodo POST,es decir si ya es la segunda vez que pasamos por el controlador*/
    if(!empty($_POST)){
        
        /*
        header("Location:../vistas/ok_vista.php");
            die();
        */
        /*Si se proceso correctamente el formulario*/
        
        if ($miFormulario->procesarFormulario($_POST)){
            //redirecciono//
            header("Location: ../vistas/ok_vista.php");
            die();
        }
    }
    
    /*Si es la primera vez que ingresamos mostramos el formulario*/
    
    require '../vistas/formularioVista.php';

