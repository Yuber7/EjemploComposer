<?php


class Carro
{
    //Propiedades
    //Visibilidad - Tipo -Nombre
    public string $marca; //Visibilidad (public, protected, private)
    public string $color = "Rojo";
    public bool $cajaAutomatica = true; //Propiedades siempre inician en minuscula

    //Metodo
    //Visibilidad - fuction(metodo) - nombreMetodo - (parametros) - valor que devuelve
    public function saludar(?string $nombre = "Usuario") : string {
        return "Hola ".$nombre." como estas?";
    }
}