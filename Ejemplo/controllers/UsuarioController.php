<?php

//Aca mostramos las acciones que puede hacer el cntrolador

class UsuarioController{
    public function mostrarTodos(){
        require_once 'Models/usuarioModels.php';

        $usuario = new Usuario();

        $todos_los_usuarios = $usuario->conseguirTodos();

        require_once './views/usuarios/mostrar-todos.php';

    }

    public function crear(){
        require_once 'Models/usuarioModels.php';

        $practicanteDeBodega = new Usuario();
        
        $practicanteDeBodega->setId_usuario('null');
        $practicanteDeBodega->setNombre('Juan Sebastian');
        $practicanteDeBodega->setApellidos('Nieto');
        $practicanteDeBodega->setEmail('jnieto@gmail.com');
        $practicanteDeBodega->setPassword('abc2123');

        $guardar = $practicanteDeBodega->crear();

        require_once 'views/usuarios/crear.php';
    }
}