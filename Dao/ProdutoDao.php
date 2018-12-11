<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/Util/Conexao.php";

class ProdutoDao {
    
    public function inserirProduto($nome_prod,$caminho_img,$legenda,$categoria) {

        try {
            $sql = "insert into produto(nome_prod,caminho_img,legenda,categoria) values('".$nome_prod."','".$caminho_img."','".$legenda."','".$categoria."')";
            $p_sql = Conexao::getInstance()->prepare($sql);
            
            if ($p_sql->execute())
                return true;
            return false;
        } catch (Exception $exc) {
            print 'Erro no banco de dados: ' . $exc;
        }

    }
    
    public function alterarProduto($id,$nome_prod,$caminho_img,$legenda,$categoria) {

        try {
            $sql = "update produto set nome_prod = '".$nome_prod."', caminho_img = '$caminho_img', legenda = '$legenda', categoria = '$categoria' where id = $id";
            $p_sql = Conexao::getInstance()->prepare($sql);
            
            if ($p_sql->execute())
                return true;
            return false;
        } catch (Exception $exc) {
            print 'Erro no banco de dados: ' . $exc;
        }

    }
    public function deletarProduto($id,$nome_prod,$caminho_img,$legenda,$categoria) {

        try {
            $sql = "delete from produto where id = $id";
            $p_sql = Conexao::getInstance()->prepare($sql);
            
            if ($p_sql->execute())
                return true;
            return false;
        } catch (Exception $exc) {
            print 'Erro no banco de dados: ' . $exc;
        }

    }
    
    public function listarProdutos($categoria){
        try {
            $sql = "select * from produto where categoria = '".$categoria."'";
            
            $p_sql = Conexao::getInstance()->prepare($sql);
            if ($p_sql->execute()) {
                $produtos = $p_sql->fetchAll();
                return $produtos;
            }
            return false;
        } catch (Exception $exc) {
            print 'Erro no banco de dados: ' . $exc;
        }
    }
    
}

?>


