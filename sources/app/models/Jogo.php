<?php
    class Jogo{
        private $nome;
        private $capa;
        private $anosUso
        private $categoria;
        private $codigoJogo;

        public function __construct($nome, $capa, $anosUso, $categoria, $codigoJogo){
            $this->nome = $nome;
            $this->capa = $capa;
            $this->anosUso = $anosUso;
            $this->categoria = $categoria
            $this->codigoJogo = NULL;    
        }

        public function getNome(){
            return $this -> nome;
        }

        public function setNome($nome){
            $this -> nome = $nome;
        }

        public function getCapa(){
            return $this -> capa;
        }

        public function setCapa($capa){
            $this -> capa = $capa;
        }

        public function getAnosUso(){
            return $this -> $anosUso;
        }

        public function setAnosUso($anosUso){
            $this -> anosUso = $anosUso;
        }

        public function getCategoria(){
            return $this -> $categoria;
        }

        public function setCategoria($categoria){
            $this -> categoria = $categoria;
        }

        public function getCodigoJogo(){
            return $this -> codigoJogo;
        }

        public function setCodigoJogo($CodigoJogo){
            $this -> categoria = $CodigoJogo;
        }
    }
?>