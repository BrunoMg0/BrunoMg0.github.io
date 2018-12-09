<html>
    <?php
    $titulo = 'Contato/Eletroluz';
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

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-7 col-lg-offset-1">
                    <p class="text-left" style="font-size: 22px;font-weight: bold">
                        <br>
                        INFORMAÇÕES ÚTEIS
                    </p>

                    <p class="text-left" style="font-size: 22px; font-family: serif;color:grey">
                        <em>Venha nos visitar, ligue ou use o formulário abaixo.
                            <br>As mensagens serão respondidas no prazo máximo de 2 dias úteis.
                        </em>
                        <br>
                        <br>

                        Endereço Avenida Principal, 47
                        <br>Paracatu, MG - CEP: 38600-000
                        <br>Fone: (38)3671-XXXX
                        <br>
                        <br>
                        <br>


                    </p> 
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div id="divcontato" class="col-lg-7 col-lg-offset-3">
                    <h3 class="text-center">
                        Entre em contato conosco
                        <br>
                        <br>

                    </h3>

                   


                    <form class="group" action= "/Controller/ContatoController.php?acao=salvarContato" method="POST">
                        <label for="Nome">Nome  </label>
                        <input class="form-control" type="text" name="nome" maxlength="250" placeholder="Digite o nome">

                        <label for="email">Email  </label>
                        <input class="form-control" type="email" name="email" maxlength="250" placeholder="Digite o e-mail">

                        <label for="fone">Telefone  </label>
                        <input class="form-control" type="" name="fone" maxlength="20" placeholder="Digite o telefone">
                        <br>

                        <label for="msg">Mensagem  </label>
                        <textarea id="msgcontato" class="form-control" type="text" name="msg" maxlength="2000" placeholder="Deixe aqui a sua mensagem"></textarea>


                        <br>
                        <div class="form-group text-right">
                            <button id="btn_contato" class ="btn btn-lg btn-danger" type="submit">
                                Enviar
                            </button>
                        </div>

                    </form>


                </div>

            </div>
        </div>
        <br>

        <?php
        include "footersl.html"
        ?>

        <script src="siteloja.js" type="text/javascript"></script>

    </body>


</html>


