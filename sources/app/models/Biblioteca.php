<?php
    class Biblioteca{
        private $jogos;
        private $codigoBiblioteca;
    }

    public function __construct($jogos){
        $this->$jogos = $jogos;
        $this->$id = NULL;   
    }

    public function getJogos(){
        return $this -> jogos;
    }

    public function setJogos($jogos){
        $this -> jogos = $jogos;
    }

    public function getCodigoBiblioteca(){
        return $this -> getCodigoBiblioteca;
    }

    public function setCodigoBiblioteca($codigoBiblioteca){
        $this -> codigoBiblioteca = $codigoBiblioteca;
    }
?>