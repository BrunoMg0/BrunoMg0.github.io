<html>
    <?php
    include('Dao/DescProdutoDao.php');
    $titulo = DescProdutoDao::retornaTitulo($_GET['nomeP']);
    include "headsl.php";
    ?>


    <body>
   
        <?php
        include "headersl.html";
        ?>

        <?php
        $imagem = DescProdutoDao::retornaImg($_GET['nomeP']);
        $descricao = DescProdutoDao::retornaDesc($_GET['nomeP']);
        include "contentproddescsl.php";
        ?>
        
        
        <?php
        include "footersl.html"
        ?>
   
        <script src="siteloja.js" type="text/javascript"></script>
         
    </body>


</html>


