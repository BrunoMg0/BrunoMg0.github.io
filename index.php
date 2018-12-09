<html>
    
    <?php
    $titulo = 'Eletroluz';
    include "headsl.php";
    ?>

    <body>

        <?php
        include "headersl.html";
        ?>

        <div class="container-fluid">
            <div class="row" style="background-color: currentColor">
                <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1">
                    <div id="meucarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#meucarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#meucarousel" data-slide-to="1"></li>   
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img class="img-responsive" src="img/luzes_natal.png" alt="">
                                
                            </div>
                            <div class="item">
                                <img src="img/12xSJ.jpg" alt="...">
                                
                            </div>
                            
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#meucarousel" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#meucarousel" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>


                </div>
            </div>
        </div>



        <div class="container">
            <div class="row">
                <h3 class="text-center">
                    <br>
                    <br>
                    <br>
                    PRODUTOS EM DESTAQUE
                    <br>
                    <br>
                </h3> 
            </div>

            <div class="row">

                <div class="col-lg-3 col-md-3 col-sm-5">
                    <a href="descProd.php?nomeP=lustreCristalLeg">
                        <div class="box">
                            <img src="imgsl/lustrecristal.png" alt="" class="img-responsive" >
                            <figcaption>Lustre Legítimo de Cristal de R$950,00 por R$799,00 </figcaption>
                        </div>
                    </a>


                </div>
                

                <div class="col-lg-3 col-md-3 col-sm-5 col-md-offset-1 col-lg-offset-1 col-sm-offset-2">
                    <a id="descProd" href="descProd.php?nomeP=lampadaLedBulbo">
                        <div class="box">
                            <img src="imgsl/lampadaLedBulbo.png" alt="" class="img-responsive">
                            <figcaption>Lâmpada LED Bulbo Luz Amarela 4,8W por R$7,99 </figcaption>
                        </div> 
                    </a>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-5 col-md-offset-1 col-lg-offset-1">
                    <a href="descProd.php?nomeP=filtroDeLinha">
                        <div class="box">
                            <img src="imgsl/filtrodelinha.png" alt="" class="img-responsive">
                            <figcaption>Filtro de Linha de R$30,00 por R$25,99</figcaption>
                        </div>
                    </a>

                </div>

                <div class="col-lg-3 col-md-3 col-sm-5 col-sm-offset-2 col-lg-offset-0 col-md-offset-0">
                    <a href="descProd.php?nomeP=duchaLorenz">
                        <div class="box">
                            <img src="imgsl/duchaLorenz.jpg" alt="" class="img-responsive">
                            <figcaption>Ducha Eletrônica Lorenzetti Acqua Storm por R$299,99 </figcaption>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-5 col-md-offset-1 col-lg-offset-1 col-lg-offset-1">
                    <a href="descProd.php?nomeP=kitPendentesBalaVegas">
                        <div class="box">
                            <img src="imgsl/pendentebalavegas.jpg" alt="" class="img-responsive">
                            <figcaption>Kit 2 Pendentes Bala / Vegas por R$125,00 </figcaption>
                        </div>
                    </a>


                </div>

                <div class="col-lg-3 col-md-3 col-sm-5 col-md-offset-1 col-lg-offset-1 col-sm-offset-2">
                    <a href="descProd.php?nomeP=interruptorTramontina">
                        <div class="box">
                            <img src="imgsl/interruptor3teclas.jpg" alt="" class="img-responsive">
                            <figcaption>Interruptor 3 Teclas Simples 2 X 4 Lux2 Tramontina por R$10,50 </figcaption>
                        </div>
                    </a>
                    <br>
                    <br>
                    <br>

                </div>
                <br>
                <br>
                <br>

            </div>

        </div>

        <?php
        include "footersl.html"
        ?>


        <script src="siteloja.js" type="text/javascript"></script>
    </body>


</html>
