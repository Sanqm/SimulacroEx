<?php

namespace Com\Daw2\Controllers;

class InicioController extends \Com\Daw2\Core\BaseController {

    public function index() {
        $data = array(
            'titulo' => 'Página de inicio',
            'breadcrumb' => ['Inicio']
        );        
        $modeloCategorias = new \Com\Daw2\Models\CategoriaModel();
        $data['numCategorias'] = $modeloCategorias->size();
        
        $modeloProductos = new \Com\Daw2\Models\ProductoModel();
        $data['numProductos'] = $modeloProductos->size();
        
        $modeloProveedores = new \Com\Daw2\Models\ProveedorModel();
        $data['numProveedores'] = $modeloProveedores->size();
        
        $this->view->showViews(array('templates/header.view.php', 'inicio.view.php', 'templates/footer.view.php'), $data);
    }
    
    public function demoUsuariosSistema(){
        $data = [
            'seccion' => '/demos/usuarios-sistema',
            'titulo' => 'Usuarios sistema',
            'breadcrumb' => ['Inicio', 'Usuarios sistema']
            ];
        $this->view->showViews(array('templates/header.view.php', 'demo-listado-usuarios.php', 'templates/footer.view.php'), $data);
    }
    
    public function demoUsuariosSistemaAdd(){
        $data = [
            'seccion' => '/demos/usuarios-sistema/add',
            'titulo' => 'Alta Usuario sistema',
            'breadcrumb' => ['Inicio', 'Usuarios sistema', 'Editar']
            ];
        $this->view->showViews(array('templates/header.view.php', 'demo-add.usuario.view.php', 'templates/footer.view.php'), $data);
    }

    public function demoLogin(){
        $this->view->show('login.view.php');
    }
}
