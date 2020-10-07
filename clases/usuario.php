<?php

class Usuario 
{
    public $nombre;
    public $email;

    public function __construct()
    {
        $this->nombre = "Carmen Gallardo";
        $this->email = "carmengallardo@gmail.com";
    }
}