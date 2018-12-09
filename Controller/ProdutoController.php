<?php

ini_set('display_errors', true);
require_once $_SERVER['DOCUMENT_ROOT'] . "/Dao/ProdutoDao.php";


   
switch ($_REQUEST['acao']) {
    case 'salvarProduto':
        if(empty($_REQUEST['nomeprod']) ){
            header ('location: ../cadastroProduto.php?erro=Nome Obrigatório ');
            break;
        }
        
        if (empty($_REQUEST['caminhoimg'])){
            header ('location: ../cadastroProduto.php?erro=Digite o caminho de uma imagem');
            break;
        }
        if (empty($_REQUEST['legendaprod'])||empty($_REQUEST['categoria'])){
            header ('location: ../cadastroProduto.php?erro=Preencha todos os campos!');
            break;
        }
 
        
        $dao = new ProdutoDao();
        $inseriu=$dao->inserirProduto($_REQUEST['nomeprod'], $_REQUEST['caminhoimg'], $_REQUEST['legendaprod'], $_REQUEST['categoria']);
        
        if ($inseriu){
            echo '<script>alert(" '."Produto cadastrado!".'  ");</script>'; 
            echo "<script>window.location = '../cadastroProduto.php';</script>"; 
        }
  
        break;

    default:
        echo 'Ação não identificada';
        break;
}
    
?>
