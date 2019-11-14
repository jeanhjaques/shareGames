<?php
    //CRUD da classe Biblioteca
    //TO DO corrigir
    require_once 'Conexao.php';
    require_once 'Biblioteca.php';
    class BibliotecaDAO{

        public function create(Biblioteca $biblioteca){
            $sql = 'INSERT INTO biblioteca (jogos) VALUES(?)';
            
            $stmt = Conexao::getConnect()->prepare($sql);

            $stmt->bindValue(1, $biblioteca->getJogos());

            $stmt->execute();
        }

        public function read(){
            $sql = 'SELECT * FROM biblioteca';

            $stmt = Conexao::getConnect()->prepare($sql);

            $stmt->execute();

            if($stmt->rowCount()>0){
                $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC); //retorna um array com todos os registros
                return $resultado;
            }
            else{
                 return []; // retorna um array vazio caso não tenha nenhum item
            }
        }

        public function update(Biblioteca $biblioteca){
            $sql = 'UPDATE biblioteca SET jogos = ? WHERE codigoBiblioteca = ?';

            $stmt = Conexao::getConnect()->prepare($sql);

            $stmt->bindValue(1, $jogo->getJogos());
            $stmt->bindValue(5, $jogo->getCodigoBiblioteca());
            $stmt->execute();
        }

        public function delete($codigoBiblioteca){
            $sql = 'DELETE FROM biblioteca WHERE codigoBiblioteca = $codigoBiblioteca';

            $stmt = Conexao::getConnect()->prepare($sql);

            $stmt->bindValue(1, $codigoBiblioteca);

            $stmt->execute();
        }
    }
?>