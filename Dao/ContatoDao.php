<?php
//require_once '../Util/Conexao.php';
require_once $_SERVER['DOCUMENT_ROOT'] . "/Util/Conexao.php";

class ContatoDao {

    public function inserirContato($contato) {

        try {
            $sql = 'insert into contato (nome, email, mensagem, telefone, dataMsg) values (:nome, :email, :mensagem, :telefone, NOW());';
            $p_sql = Conexao::getInstance()->prepare($sql);
            $p_sql->bindValue(':nome', $contato->getNome());
            $p_sql->bindValue(':email', $contato->getEmail());
            $p_sql->bindValue(':mensagem', $contato->getMsg());
            $p_sql->bindValue(':telefone', $contato->getFone());
            
            if ($p_sql->execute())
                return true;
            return false;
        } catch (Exception $exc) {
            print 'Erro no banco de dados: ' . $exc;
        }



    }

    public function listarMensagens(){
        try {
            $sql = "select * from contato order by dataMsg desc;";
            
            $p_sql = Conexao::getInstance()->prepare($sql);
            if ($p_sql->execute()) {
                $mensagens = $p_sql->fetchAll();
                return $mensagens;
            }
            return false;
        } catch (Exception $exc) {
            print 'Erro no banco de dados: ' . $exc;
        }
    }


}

?>