<?php
include('Dao/ContatoDao.php');

$titulo = "Mensagem";
$mensagens = ContatoDao::listarMensagens();
include "headsl.php";
?>

<body>

    <?php
    include "headersl.html";
    ?>

    <div class="text-center">
        <h2>Mensagens: </h2>
    </div>
    <br>
    <br>
    <br>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-11 col-xs-12 col-sm-12">
                <table>
                    <tr>

                        <th>Nome</th>
                        <th>Email</th>
                        <th>Telefone</th>
                        <th>Mensagem</th>
                        <th>Data</th>

                    </tr>


                    <?php foreach ($mensagens as $row) { ?>

                        <tr>
                            <td><?php echo $row['nome']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['telefone']; ?></td>
                            <td><?php echo $row['mensagem']; ?></td>
                            <td><?php echo $row['dataMsg']; ?></td>

                        </tr>
                    <?php } ?>



                </table>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <?php
    include "footersl.html"
    ?>

    <script src="siteloja.js" type="text/javascript"></script>


</body>
</html>

