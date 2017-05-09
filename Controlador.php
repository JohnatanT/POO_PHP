<?php

interface Controlador {
    //Metodos abstratos
    public  function ligar();
    public  function desligar();
    public  function fecharMenu();
    public  function abrirMenu();
    public  function maisVolume();
    public  function menosVolume();
    public  function ligarMudo();
    public  function desligarMudo();
    public  function play();
    public  function pause();
    
    //Como já estão dentro da interface não preciso especificar que são abstract
}
