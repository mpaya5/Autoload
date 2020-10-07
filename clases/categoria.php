<?php

class Categoria 
{
    public $nombre;
    public $descripcion;

    public function __construct()
    {
        $this->nombre = "Acción";
        $this->descripcion = "Categoria enfocada a las reviews de videojuegos de Acción";
    }
}