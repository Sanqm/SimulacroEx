<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace Com\Daw2\Controllers;

/**
 * Description of UsuariosController
 *
 * @author sandra.queimadelosmachado
 */
class UsuariosController extends \Com\Daw2\Core\BaseController {
    function mostrarTodosUsuarios(){
         $data = [];
        $data['titulo'] = 'Todos Usuario';
        $data['seccion'] = '/usuarios';
        $modelo = new \Com\Daw2\Models\UsuariosModel();
        $data['usuarios'] = $modelo->getAllUser();
        $this->view->showViews(array('templates/header.view.php', 'usuarios.view.php', 'templates/footer.view.php'), $data);
    }
        
  function mostrarFiltros(array $filtros):?array{
      $errores = [];
      $data[];
      
      $data['input'] = 
      if(!empty($fitros['username'])){
          
      }
  }  
    
}
