<?php

class Producto{
    public $nombreProducto;
    public $descripcion;

    function getNombreProducto(){
        return $this->nombreProducto;
    }

    function getDescripcionProducto(){
        return $this->descripcion;
    }

    function setNombreProducto($nombreProducto){
        $this->nombreProducto = $nombreProducto;
    }

    function setDescripcionProducto($descripcion){
        $this->descripcion = $descripcion;
    }

    public function conseguirTodos(){
        echo "Imprimir todos los productos....";
    }
}