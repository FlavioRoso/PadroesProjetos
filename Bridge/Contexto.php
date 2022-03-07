<?php

abstract class Contexto 
{

    private $estado = null;

    public function _construct()
    {
        $this->estado = new Estado1();
    }

    public function setEstado($novoEstado)
    {
        $this->estado = $novoEstado;
    }

}