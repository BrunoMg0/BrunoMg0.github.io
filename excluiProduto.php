<html>
    <?php
    $titulo = 'Exclusão de produto';
    include "headsl.php"
    ?>


    <body>

        <?php
        include "headersl.html"
        ?>
        
        <?php
        if (!empty($_REQUEST['erro'])) {
            ?>
                <?php echo 
                '<script>alert(" '.($_REQUEST['erro']).'  ");</script>';
                ?>
           
            <?php
        }
        ?>

        <div class="container">
            <div class="row">
                <div  class="col-lg-9 col-lg-offset-2">
                    <h3 class="text-center">
                        Excluir produto
                        <br>
                        <br>

                    </h3>

                   
                    

                    <form class="group" action= "/Controller/ProdutoController.php?acao=deletarProduto" method="POST">
                        <label for="idProd">ID do produto </label>
                        <input class="form-control" type="number" name="idProd" maxlength="5" >
                        
                        <br>
                        <div class="form-group text-right">
                            <button id="btn_contato" class ="btn btn-lg btn-danger" type="submit">
                                Excluir
                            </button>
                        </div>

                    </form>


                </div>

            </div>
        </div>
    
        <br><br><br>
        
        
        <?php
        include "footersl.html"
        ?>

        <script src="siteloja.js" type="text/javascript"></script>

    </body>


</html>



