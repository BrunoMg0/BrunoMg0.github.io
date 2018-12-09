<html>
    <?php
    include('Dao/DescProdutoDao.php');
    include('Dao/ProdutoDao.php');

    $titulo = "Produtos";
    $categoria = $_GET['categ'];
    $produtos = ProdutoDao::listarProdutos($categoria);
    include "headsl.php";
    ?>

    <body>

        <?php
        include "headersl.html";
        ?>

        <div class="container">
            <div class="row">
                <div class="col-lg-11 col-lg-offset-1">

                    <?php foreach ($produtos as $row) { ?>
                        <div class="col-lg-4" style="content: initial">
                            <div class="box">
                                <img src="<?php echo $row['caminho_img']; ?>" alt="" class="img-responsive" >
                                <figcaption><?php echo $row['legenda']; ?> </figcaption>
                            </div>

                        </div>

                    <?php } ?>
                </div>
            </div>
        </div>



        <?php
        include "footersl.html"
        ?>

        <script src="siteloja.js" type="text/javascript"></script>

    </body>


</html>



