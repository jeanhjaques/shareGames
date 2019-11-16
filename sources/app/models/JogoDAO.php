<?php 
    //CRUD da classe
    //TO DO corrigir
    require_once 'Conexao.php';
    require_once 'Jogo.php';
    class UsuarioDAO{

        public function create(Jogo $jogo){
            $sql = 'INSERT INTO jogo (nome, capa, anosUso, categoria) VALUES(?, ?, ?, ?)';
            
            $stmt = Conexao::getConnect()->prepare($sql);

            $stmt->bindValue(1, $jogo->getNome());
            $stmt->bindValue(2, $jogo->getCapa());
            $stmt->bindValue(3, $jogo->getAnosUso());
            $stmt->bindValue(4, $jogo->getCategoria());

            $stmt->execute();
        }

        public function read(){
            $sql = 'SELECT * FROM jogo';

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

        public function update(Jogo $jogo){
            $sql = 'UPDATE jogo SET nome = ?, capa = ?, anosUso = ?, categoria = ? WHERE codigoJogo = ?';

            $stmt = Conexao::getConnect()->prepare($sql);

            $stmt->bindValue(1, $jogo->getNome());
            $stmt->bindValue(2, $jogo->getCapa());
            $stmt->bindValue(3, $jogo->getAnosUso());
            $stmt->bindValue(4, $jogo->getCategoria());
            $stmt->bindValue(5, $jogo->getCodigoJogo());
            $stmt->execute();
        }

        public function delete($codigoJogo){
            $sql = 'DELETE FROM jogo WHERE id = $id';

            $stmt = Conexao::getConnect()->prepare($sql);

            $stmt->bindValue(1, $codigoJogo);

            $stmt->execute();
        }
    }
?>