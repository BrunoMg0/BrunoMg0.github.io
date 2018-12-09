<?php

ini_set('display_errors', true);
require_once $_SERVER['DOCUMENT_ROOT'] . "/Entidades/Contato.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/Dao/ContatoDao.php";


   
switch ($_REQUEST['acao']) {
    case 'salvarContato':
        if(empty($_REQUEST['nome']) ){
            header ('location: ../contatosl.php?erro=Nome Obrigatório ');
            break;
        }
        
        if (empty($_REQUEST['msg'])){
            header ('location: ../contatosl.php?erro=Digite uma mensagem!');
            break;
        }
        if (empty($_REQUEST['email'])&&empty($_REQUEST['fone'])){
            header ('location: ../contatosl.php?erro=Informe um telefone ou email!');
            break;
        }
            
        $contato = new Contato();
        $contato ->setnome($_REQUEST['nome']);
        $contato ->setEmail($_REQUEST['email']);
        $contato ->setFone($_REQUEST['fone']);
        $contato ->setMsg($_REQUEST['msg']);
        
        $dao = new ContatoDao();
        $inseriu=$dao->inserirContato($contato);
        
        if ($inseriu){
            echo '<script>alert(" '."Mensagem enviada!".'  ");</script>'; 
            echo "<script>window.location = '../contatosl.php';</script>"; 
        }
  
        break;
    case 'excluirContato':
        echo 'Vamos excluir o contato';
      break;

    default:
        echo 'Ação não identificada';
        break;
}
    
?>
