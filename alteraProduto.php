<html>
    <?php
    $titulo = 'Alteração de produto';
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
                        Alterar produto
                        <br>
                        <br>

                    </h3>

                   
                    

                    <form class="group" action= "/Controller/ProdutoController.php?acao=alterarProduto" method="POST" enctype="multipart/form-data">
                        <label for="idProd">ID do produto </label>
                        <input class="form-control" type="number" name="idProd" maxlength="5" >
                        
                        <label for="nomeprod">Nome do Novo Produto </label>
                        <input class="form-control" type="text" name="nomeprod" maxlength="250" >

                        <label for="legendaprod">Legenda  </label>
                        <input class="form-control" type="text" name="legendaprod" maxlength="250" >
                        <br>

                        <label for="categoria">Categoria do produto  </label>
                        
                        <select name="categoria" class="form-control" type="text" >      
                            <option value="arandela">arandela</option>
                            <option value="contator">contator</option>
                            <option value="disjuntor">disjuntor</option>
                            <option value="duchaChuv">duchaChuv</option>
                            <option value="lampada">lampada</option>
                            <option value="lustre">lustre</option>
                            <option value="painel">painel</option>
                            <option value="pendente">pendente</option>
                            <option value="tomada">tomada</option>
                        </select>
                        
                        <br>
                        
                        <label for="Imagem"> Imagem  </label>
                        <input type="file" name="img" >
                        
                        <div class="form-group text-right">
                            <button id="btn_contato" class ="btn btn-lg btn-danger" type="submit">
                                Alterar
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



