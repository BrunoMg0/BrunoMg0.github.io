<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/Util/Conexao.php";

class DescProdutoDao {

    public function retornaTitulo($nomeProd) {
        try {
            $sql = "select titulo from desc_produto where nome_produto = '".$nomeProd."'";
            $p_sql = Conexao::getInstance()->prepare($sql);
            if ($p_sql->execute()) {
                $tit = $p_sql->fetch();
                return $tit[0];
            }
            return false;
        } catch (Exception $exc) {
            print 'Erro no banco de dados: ' . $exc;
        }
    }
    
    public function retornaImg($nomeProd) {
        try {
            $sql = "select caminho_img from desc_produto where nome_produto = '".$nomeProd."'";
            $p_sql = Conexao::getInstance()->prepare($sql);
            if ($p_sql->execute()) {
                $img = $p_sql->fetch();
                return $img[0];
            }
            return false;
        } catch (Exception $exc) {
            print 'Erro no banco de dados: ' . $exc;
        }
    }
    
     public function retornaDesc($nomeProd) {
        try {
            $sql = "select descricao from desc_produto where nome_produto = '".$nomeProd."'";
            $p_sql = Conexao::getInstance()->prepare($sql);
            if ($p_sql->execute()) {
                $desc = $p_sql->fetch();
                return $desc[0];
            }
            return false;
        } catch (Exception $exc) {
            print 'Erro no banco de dados: ' . $exc;
        }
    }

   

}

?>