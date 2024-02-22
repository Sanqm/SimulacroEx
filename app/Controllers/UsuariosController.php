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

    function mostrarTodosUsuarios() {
        $data = [];
        $data['titulo'] = 'Todos Usuario';
        $data['seccion'] = '/usuarios';
        $modelo = new \Com\Daw2\Models\UsuariosModel();
        $data['usuarios'] = $modelo->getAllUser();
        $this->view->showViews(array('templates/header.view.php', 'usuarios.view.php', 'templates/footer.view.php'), $data);
    }

//    function mostrarFiltros(array $filtros): ?array {
//        $data = [];
//        $data['titulo'] = 'Buscar usuario';
//        $data['seccion'] = '/usuarios-sistema';
//        $this->view->showViews(array('templates/header.view.php', 'usuarios.view.php', 'templates/footer.view.php'), $data);
//        $model = new \Com\Daw2\Models\UsuariosModel();
//        $data['input'] = $model->getFiltros($_GET);
//        if (!empty($fitros['username'])) {
//            
//        }
//    }
    
    function showLogin(){
        $this->view->show('login.view.php');
    }
    
    function checkLogin(array $data):array{
        $errores = [];
        if (empty($data['email'])) {
            $errores['email'] = "El campo email no puede estar vacío";
        }
        if (empty($data['pass'])) {
           $errores['pass'] = "El campo contraseña  no puede estar vacio ";
        }
        return $errores;
    }
    
    function procesLogin(){
        $errores = $this->checkLogin($_POST);
        if(count($errores)==0){
            $model = new \Com\Daw2\Models\UsuariosModel();
            $usu_login = $model->getByEmail($_POST['email']);
            if(!is_null($usu_login)){
                if(password_verify($_POST['pass'], $usu_login['pass'])){
                    $_SESSION['user'] =$usu_login;
                }
            }
        }
    }
}
