<?php

ini_set('display_errors', true);
require_once $_SERVER['DOCUMENT_ROOT'] . "/Dao/ProdutoDao.php";



switch ($_REQUEST['acao']) {
    case 'salvarProduto':
        $img = $_FILES['img']['name'];
        $temp = $_FILES['img']['tmp_name'];

        if (empty($_REQUEST['nomeprod'])) {
            header('location: ../cadastroProduto.php?erro=Nome Obrigatório ');
            break;
        }

        if (empty($img)) {
            header('location: ../cadastroProduto.php?erro=Insira uma imagem');
            break;
        }
        if (empty($_REQUEST['legendaprod']) || empty($_REQUEST['categoria'])) {
            header('location: ../cadastroProduto.php?erro=Preencha todos os campos!');
            break;
        }



        if (move_uploaded_file($temp, '../imgsl/' . $img)) {
            $dao = new ProdutoDao();
            $inseriu = $dao->inserirProduto($_REQUEST['nomeprod'], "imgsl/" . $img, $_REQUEST['legendaprod'], $_REQUEST['categoria']);

            if ($inseriu) {
                echo '<script>alert(" ' . "Produto cadastrado!" . '  ");</script>';
                echo "<script>window.location = '../cadastroProduto.php';</script>";
            }
        } else {
            echo '<script>alert(" ' . "Erro ao mover imagem!" . '  ");</script>';
        }




        break;

    case 'alterarProduto':
        $img = $_FILES['img']['name'];
        $temp = $_FILES['img']['tmp_name'];

        if (empty($_REQUEST['nomeprod'])) {
            header('location: ../alteraProduto.php?erro=Nome Obrigatório ');
            break;
        }

        if (empty($img)) {
            header('location: ../alteraProduto.php?erro=Insira uma imagem');
            break;
        }
        if (empty($_REQUEST['legendaprod']) || empty($_REQUEST['categoria'])) {
            header('location: ../alteraProduto.php?erro=Preencha todos os campos!');
            break;
        }

        if (move_uploaded_file($temp, '../imgsl/' . $img)) {
            $dao = new ProdutoDao();
            $alterou = $dao->alterarProduto($_REQUEST['idProd'], $_REQUEST['nomeprod'], "imgsl/" . $img, $_REQUEST['legendaprod'], $_REQUEST['categoria']);

            if ($alterou) {
                echo '<script>alert(" ' . "Produto alterado!" . '  ");</script>';
                echo "<script>window.location = '../alteraProduto.php';</script>";
            }
        } else {
            echo '<script>alert(" ' . "Erro ao mover imagem!" . '  ");</script>';
        }

        break;

    case 'deletarProduto':
        $dao = new ProdutoDao();
        $excluiu = $dao->deletarProduto($_REQUEST['idProd']);

        if ($excluiu) {
            echo '<script>alert(" ' . "Produto excluído!" . '  ");</script>';
            echo "<script>window.location = '../excluiProduto.php';</script>";
        }

        break;


    default:
        echo 'Ação não identificada';
        break;
}
?>
