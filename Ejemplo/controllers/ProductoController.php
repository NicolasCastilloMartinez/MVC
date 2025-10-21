<?php

class ProductoController{
    public function mostrarTodos(){
        require_once 'Models/ProductoModel.php';
        
        $producto = new Producto();

        $todos_los_productos = $producto->conseguirTodos();

        require_once 'views/productos/mostrar-todos.php';

    }

    public function crear(){
        require_once 'views/productos/crear.php';
    }
    
}