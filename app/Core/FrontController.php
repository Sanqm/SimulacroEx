<?php

namespace Com\Daw2\Core;

use Steampixel\Route;

class FrontController {

    static function main() {
        //Rutas que están disponibles para todos
        Route::add('/',
                function () {
                    $controlador = new \Com\Daw2\Controllers\InicioController();
                    $controlador->index();
                }
                , 'get');

        //Demos
        Route::add('/demos/usuarios-sistema',
                function () {
                    $controlador = new \Com\Daw2\Controllers\InicioController();
                    $controlador->demoUsuariosSistema();
                }
                , 'get');

        Route::add('/demos/usuarios-sistema/add',
                function () {
                    $controlador = new \Com\Daw2\Controllers\InicioController();
                    $controlador->demoUsuariosSistemaAdd();
                }
                , 'get');

        Route::add('/demos/login',
                function () {
                    $controlador = new \Com\Daw2\Controllers\InicioController();
                    $controlador->demoLogin();
                }
                , 'get');

        # Gestion de categorías
        Route::add('/categorias',
                function () {
                    $controlador = new \Com\Daw2\Controllers\CategoriaController();
                    $controlador->mostrarTodos();
                }
                , 'get');

        Route::add('/categorias/view/([A-Za-z0-9]+)',
                function ($id) {
                    $controlador = new \Com\Daw2\Controllers\CategoriaController();
                    $controlador->view($id);
                }
                , 'get');

        Route::add('/categorias/delete/([A-Za-z0-9]+)',
                function ($id) {
                    $controlador = new \Com\Daw2\Controllers\CategoriaController();
                    $controlador->delete($id);
                }
                , 'get');

        Route::add('/categorias/edit/([A-Za-z0-9]+)',
                function ($id) {
                    $controlador = new \Com\Daw2\Controllers\CategoriaController();
                    $controlador->mostrarEdit($id);
                }
                , 'get');

        Route::add('/categorias/edit/([A-Za-z0-9]+)',
                function ($id) {
                    $controlador = new \Com\Daw2\Controllers\CategoriaController();
                    $controlador->edit($id);
                }
                , 'post');

        Route::add('/categorias/add',
                function () {
                    $controlador = new \Com\Daw2\Controllers\CategoriaController();
                    $controlador->mostrarAdd();
                }
                , 'get');

        Route::add('/categorias/add',
                function () {
                    $controlador = new \Com\Daw2\Controllers\CategoriaController();
                    $controlador->add();
                }
                , 'post');

        Route::add('/categorias/cant_add',
                function () {
                    $controlador = new \Com\Daw2\Controllers\CategoriaController();
                    $controlador->cant_add();
                }
                , 'get');

        //Produtos        
        Route::add('/productos',
                function () {
                    $controlador = new \Com\Daw2\Controllers\ProductoController();
                    $controlador->mostrarTodos();
                }
                , 'get');
        Route::add('/productos/view/([A-Za-z0-9]+)',
                function ($codigo) {
                    $controlador = new \Com\Daw2\Controllers\ProductoController();
                    $controlador->view($codigo);
                }
                , 'get');

        Route::add('/productos/delete/([A-Za-z0-9]+)',
                function ($codigo) {
                    $controlador = new \Com\Daw2\Controllers\ProductoController();
                    $controlador->delete($codigo);
                }
                , 'get');

        Route::add('/productos/edit/([A-Za-z0-9]+)',
                function ($codigo) {
                    $controlador = new \Com\Daw2\Controllers\ProductoController();
                    $controlador->mostrarEdit($codigo);
                }
                , 'get');

        Route::add('/productos/edit',
                function () {
                    $controlador = new \Com\Daw2\Controllers\ProductoController();
                    $controlador->processEdit();
                }
                , 'post');

        Route::add('/productos/add',
                function () {
                    $controlador = new \Com\Daw2\Controllers\ProductoController();
                    $controlador->mostrarAdd();
                }
                , 'get');

        Route::add('/productos/add',
                function () {
                    $controlador = new \Com\Daw2\Controllers\ProductoController();
                    $controlador->processAdd();
                }
                , 'post');

        //Proveedores
        Route::add('/proveedores',
                function () {
                    $controlador = new \Com\Daw2\Controllers\ProveedorController();
                    $controlador->mostrarTodos();
                }
                , 'get');

        Route::add('/proveedores/view/([A-Za-z0-9]+)',
                function ($cif) {
                    $controlador = new \Com\Daw2\Controllers\ProveedorController();
                    $controlador->view($cif);
                }
                , 'get');

        Route::add('/proveedores/delete/([A-Za-z0-9]+)',
                function ($cif) {
                    $controlador = new \Com\Daw2\Controllers\ProveedorController();
                    $controlador->delete($cif);
                }
                , 'get');

        Route::add('/proveedores/edit/([A-Za-z0-9]+)',
                function ($cif) {
                    $controlador = new \Com\Daw2\Controllers\ProveedorController();
                    $controlador->mostrarEdit($cif);
                }
                , 'get');

        Route::add('/proveedores/edit/([A-Za-z0-9]+)',
                function ($cif) {
                    $controlador = new \Com\Daw2\Controllers\ProveedorController();
                    $controlador->edit($cif);
                }
                , 'post');

        Route::add('/proveedores/add',
                function () {
                    $controlador = new \Com\Daw2\Controllers\ProveedorController();
                    $controlador->mostrarAdd();
                }
                , 'get');

        Route::add('/proveedores/add',
                function () {
                    $controlador = new \Com\Daw2\Controllers\ProveedorController();
                    $controlador->add();
                }
                , 'post');

        Route::add('/proveedores/cant_add',
                function () {
                    $controlador = new \Com\Daw2\Controllers\ProveedorController();
                    $controlador->cant_add();
                }
                , 'get');

        Route::add('/usuarios-sistema',
                function () {
                    $controlador = new \Com\Daw2\Controllers\UsuariosController();
                    $controlador->mostrarTodosUsuarios();
                }
                , 'get');

        /* login */


        Route::add('/login',
                function () {
                    $controlador = new \Com\Daw2\Controllers\UsuariosController();
                    $controlador->showLogin();
                }
                , 'get');
if(!isset($_SESSION['user'])){
        Route::add('/login',
                function () {
                    $controlador = new \Com\Daw2\Controllers\UsuariosController();
                    $controlador->procesLogin();
                }
                , 'post');

        Route::pathNotFound(
                function () {
                    header('location: /login');
                }
        );
}
        Route::pathNotFound(
                function () {
                    $controller = new \Com\Daw2\Controllers\ErroresController();
                    $controller->error404();
                }
        );

        Route::methodNotAllowed(
                function () {
                    $controller = new \Com\Daw2\Controllers\ErroresController();
                    $controller->error405();
                }
        );

        Route::run();
    }
}
