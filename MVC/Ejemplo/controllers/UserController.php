<?php

//Aca mostramos las acciones que puede hacer el cntrolador

class UsuarioController{
    public function mostrarTodos(){
        require_once 'Models/modelsUsuario.php';

        $usuario = new Usuario();

        $todos_los_usuarios = $usuario->conseguirTodos();

        require_once './views/usuarios/mostrar-todos.php';
    }

    public function crear(){
        require_once './views/usuarios/crear.php';
    }
}