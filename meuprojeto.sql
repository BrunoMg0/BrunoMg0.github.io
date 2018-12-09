-- MySQL dump 10.13  Distrib 5.7.23, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: meuprojeto
-- ------------------------------------------------------
-- Server version	5.7.23

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `contato`
--

DROP TABLE IF EXISTS `contato`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contato` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mensagem` varchar(2000) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `dataMsg` date DEFAULT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contato`
--

LOCK TABLES `contato` WRITE;
/*!40000 ALTER TABLE `contato` DISABLE KEYS */;
INSERT INTO `contato` VALUES (1,'bruno','brunojp00@gmail.com','oi','(38) 3561-4509','2018-08-25'),(2,'vit','vitoria@gm','aaa','(38)3561-4509','2018-07-24'),(3,'maria','bdabj@gmail.com','ad','38','2018-08-23'),(4,'a','a@gmail.com','a','9','2018-08-22'),(6,'Israel Bruno Pereira','brunojp000@hotmail.com','teste','3899921495','2018-08-25'),(7,'Israel Bruno Pereira','a@gmail.com','tetse2','a','2018-12-05');
/*!40000 ALTER TABLE `contato` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `desc_produto`
--

DROP TABLE IF EXISTS `desc_produto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `desc_produto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `caminho_img` varchar(100) DEFAULT NULL,
  `descricao` longtext,
  `nome_produto` varchar(100) DEFAULT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `desc_produto`
--

LOCK TABLES `desc_produto` WRITE;
/*!40000 ALTER TABLE `desc_produto` DISABLE KEYS */;
INSERT INTO `desc_produto` VALUES (1,'imgsl/lampadaLedBulbo.png',' <p>\n                    As lâmpadas LED bulbo fornecem um ótimo desempenho e versatilidade, garantindo uma iluminação de qualidade e deixando qualquer ambiente mais aconchegante e moderno!\n\n                    Possui grande durabilidade e longa vida útil, resultando em dinheiro economizado e até 80% a menos em sua conta de energia. Dentro de suas inúmeras qualidades, devemos mencionar sua longa vida útil, que deve chegar em até 50.000 horas, se usado corretamente. \n\n                    Ótima opção para a substituição das lâmpadas incandescentes, sendo 3 vezes mais econômicas.\n\n                    Ideal para o uso em ambientes residenciais, empresariais, jardins, projetos decorativos, entre outros. \n                    <br>COMPRE AGORA MESMO!\n                    </p>','lampadaLedBulbo','Lampada de Led Bulbo'),(2,'imgsl/lustrecristal.png','<p>\n                        <br>Lustre castanho em Cristal Legitimo com pontas em formato de diamante, em cristais acrilico. \n                        <br>Alto brilho, com 4 lampadas G9.\n                        <br>Base aço Inox 30x30 \n                        <br>Descrição:\n                        <br>Base 30x30cm em aço inox de alto brilho(espelhado, reflete os cristais)\n                        <br>Comprimento de 29 cm\n                        <br>Argolas em aço inox\n                        <br>Cristais legítimos - Alto Brilho\n                        <br>72 pêndulos (bem cheios) pontas em formato de diamante são de cristais acrilico com alto brilho\n                        <br>Utiliza: 4 lâmpadas G9 (Eletrônica, Led ou Super Led) \n                        <br>Bivolt - Tensão 127v / 220v\n                        <br>Marca e Qualidade BIORO DESIGNER - Fabricação Própria\n                        <br>Base em Aço inox 30x30cm Cristais\n                        <br>Componentes Aprovados pelo In Metro\n                        <br>Desenvolvido e Produzido por BIORO DESIGNER\n                        <br>Agradecemos pela sua preferência de compra\n                        <br>PRODUTO EM ESTOQUE.\n                    </p>','lustreCristalLeg','Lustre de Cristal/Eletroluz'),(3,'imgsl/filtrodelinha.png','<p>\n                        <br>Filtro De Linha Padrão Novo e Antigo - 06 Tomadas Bivolt\n                        <br>Chave liga e desliga com fusível de segurança\n                        <br>Potência máxima: 900W\n                        <br>Corrente máxima: 10ª\n                        <br>Número de tomadas: 6 Tomadas Padrão Universal\n                        <br>Fusível de entrada: 10A \n                        <br>Tensão de entrada: multivoltagem 110V-127V ou 220V\n                        <br>Comprimento do cabo: 1.20 metros\n                        <br>1 Varistor (Componente interno do Filtro)<br>\n\n                    </p>','filtroDeLinha','Filtro de Linha/Eletroluz'),(4,'imgsl/duchaLorenz.jpg','<p>\n                        O chuveiro Acqua Storm Ultra traz um banho diferenciado e inesquecível.<br>\n                        <br><b>Tecnologia Press Plus</b> - Jatos de alta performance mesmo com baixa pressão.\n\n                        <br><b>Exclusiva resistência Loren Ultra -</b>  Longa duração em comparação as resistências comuns.\n\n                        <br><b>Resistência de troca rápida Loren Ultra:</b>  Exclusivo cartucho que garante uma troca rápida e segura.\n\n                        <br><b>Comando eletrônico -</b>  Permite a escolha gradual e precisa da temperatura.\n\n                        <br><b>Haste de controle de temperaturas -</b>  Controle de temperaturas ao alcance das mãos (uso opcional).\n\n                        <br><b>Fácil instalação:</b>  Em poucos passos a ducha é instalada ou removida.\n\n                        <br><b>D.R.I. -</b>  Dispositivo de Regulagem de Inclinação.\n\n                        <br>Ducha manual com design exclusivo.\n\n                        <br>Compatível com aquecimento solar e outros sistemas de aquecimento.\n\n                    </p>','duchaLorenz','Ducha Lorenz/Eletroluz'),(5,'imgsl/pendentebalavegas.jpg','<p>\n                        <br>Pendentes em Alumínio\n                        <br>Pintura de Altíssima Qualidade\n                        <br>ACOMPANHA: \n                        <br>2 PENDENTES\n                        <br>2 CABOS DE 1 METRO (REGULÁVEL)\n                        <br>2 CANOPLAS PARA FIXAÇÃO NO TETO DA MESMA COR EXTERNA DOS PENDENTES (COM 13,5 CM DE DIÂMETRO)\n                        <br>Ideal para bancadas, ambientes como cozinha, aréa gourmet, sala de jantar, bares, etc\n                    </p>','kitPendentesBalaVegas','Pendentes/Eletroluz'),(6,'imgsl/interruptor3teclas.jpg','<p>\n                        <br>Interruptor 3 Teclas Simples 2x4 lux2 Tramontina \n                        <br>É fabricado em termoplástico com acabamento brilho na cor branca, que não retém poeira, unindo qualidade e praticidade. \n                        <br>O sistema é modular, com gradual ajuste entre placa e suporte, proporcionando perfeito acabamento da placa com a parede. \n                        <br>Possuem furo oblongo para facilitar a fixação e a regulagem da placa à parede. \n                        <br>Além disso, possuem furos para a fixação em parede de madeira. \n                        <br>A fixação não é aparente. \n                        <br>Acompanham suporte e parafusos para a instalação.\n                        <br>Características- Cor: branco- Tipo: 3 TeclasConteúdo- 01 Interruptor 3 Teclas Simples 2x4\n                    </p>','interruptorTramontina','Interruptor/Eletroluz');
/*!40000 ALTER TABLE `desc_produto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produto`
--

DROP TABLE IF EXISTS `produto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `produto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_prod` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `caminho_img` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `legenda` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `categoria` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produto`
--

LOCK TABLES `produto` WRITE;
/*!40000 ALTER TABLE `produto` DISABLE KEYS */;
INSERT INTO `produto` VALUES (1,'lampadaLedBulbo','imgsl/lampadaLedBulbo.png','Lâmpada LED Bulbo Luz Amarela 4,8W por R$7,99','lampada'),(2,'lampadaFluFamastil','imgsl/lampadaFluFamastil.jpg','Lâmpada Fluorescente Famastil 25W por R$15,50','lampada'),(3,'lampadaFlu44cm','imgsl/lampadaFlu44cm.jpg','Lâmpada Fluorescente 15w 44cm por R$59,00','lampada'),(4,'lampadaFluEspiral','imgsl/lampadaFluEspiral.jpg','Lâmpada Fluorescente Espiral Philips 25W por R$18,90','lampada'),(5,'contator9A220V','imgsl/contator9A.jpg','CONTATOR 9A 1NA 220V MINI CWC09-10 WEG por R$65,00','contator'),(6,'contatorSiemens','imgsl/CONTATORSIEMENS.jpg','CONTATOR 18A 1NA 220V 3TS32100AN2 SIEMENS por R$66,00','contator'),(7,'contatorWEG','imgsl/contatorWEG.JPG','CONTATOR 12A 1NA 220V CWM12-10 WEG por R$89,99','contator'),(8,'contatorShneider','imgsl/contatorShneider.jpg','CONTATOR 25A SCHNEIDER por R$89,90','contator'),(9,'disjuntorSiemens','imgsl/disjuntorSiemens.jpg','DISJUNTOR 1X10A 5SX1 110-6 380VCA SIEMENS por R$7,50','disjuntor'),(10,'disjuntorShneider','imgsl/disjuntorShneider.jpg','DISJUNTOR 1X10A C 220V 5KA K32/EZ9F33110 SCHNEIDER por R$6,99','disjuntor'),(11,'disjuntorWEG','imgsl/disjuntorWEG.jpg','DISJUNTOR 1X10A MDWC10 230/440V 5KA WEG por R$6,70','disjuntor'),(12,'disjuntorSiemens2x32A','imgsl/disjuntorSiemens2.jpg','DISJUNTOR 2X32A 5SX1 232-6 380VCA SIEMENS por R$39,00','disjuntor'),(13,'contator9A220V','imgsl/contator9A.jpg','CONTATOR 9A 1NA 220V MINI CWC09-10 WEG por R$65,00','contator'),(14,'contatorSiemens','imgsl/CONTATORSIEMENS.jpg','CONTATOR 18A 1NA 220V 3TS32100AN2 SIEMENS por R$66,00','contator'),(15,'contatorWEG','imgsl/contatorWEG.JPG','CONTATOR 12A 1NA 220V CWM12-10 WEG por R$89,99','contator'),(16,'duchaLorenzetti127V','imgsl/duchaLorenzetti127V.jpg','DUCHA ADVANCED ELETRÔNICA 127V 5500W LORENZETTI','duchaChuv'),(17,'chuveiroTradLorenzetti','imgsl/chuveiroTradLorenzetti.jpg','CHUVEIRO TRADIÇÃO 127V 4500/5500W LORENZETTI por R$159,00','duchaChuv'),(18,'duchaLorenzAcqua','imgsl/duchaLorenz.jpg','DUCHA ELETRÔNICA LORENZETTI ACQUA STORM por R$299,99','duchaChuv'),(19,'duchaLorenmare','imgsl/duchaLorenmare.png','DUCHA LORENMARE CROMADA por R$315,00','duchaChuv'),(20,'tomadaLumiBras','imgsl/tomadaLumiBras.jpg','TOMADA 2P+T LUMIBRAS por R$4,50','tomada'),(21,'tomadaBulding','imgsl/tomadaEmbutir.jpg','TOMADA EMBUTIR COM HASTE 2P+T 10A PRETA 9890-6 BULDING por R$3,85','tomada'),(22,'tomadaLiz','imgsl/tomadaLiz.jpg','TOMADA LIZ 2P+T 10A SEM PLACA TRAMONTINA por R$4,00','tomada'),(23,'tomadaZuli','imgsl/tomadaZuli.jpg','TOMADA ZULI 2P+T 10A COM PLACA LZX030 LORENZETTI por R$6,90','tomada'),(24,'tomadaLumiBras','imgsl/tomadaLumiBras.jpg','TOMADA 2P+T LUMIBRAS por R$4,50','tomada'),(25,'tomadaBulding','imgsl/tomadaEmbutir.jpg','TOMADA EMBUTIR COM HASTE 2P+T 10A PRETA 9890-6 BULDING por R$3,85','tomada'),(26,'tomadaLiz','imgsl/tomadaLiz.jpg','TOMADA LIZ 2P+T 10A SEM PLACA TRAMONTINA por R$4,00','tomada'),(27,'arandelaIdeal','imgsl/arandelaIdeal.jpg','ARANDELA PRETO COLONIAL PARA 1X60W E27 L3B IDEAL por R$64,30','arandela'),(29,'arandelaFBL','imgsl/arandelaBranca.jpg','ARANDELA BRANCA 1X60W E27 FABRICA DA LUZ por R$47,50','arandela'),(30,'arandelaAttena','imgsl/arandelaAtena.jpg','ARANDELA BRANCO/CROMADO PARA 1X60W E27 1520 ATTENA','arandela'),(31,'arandelaCobre','imgsl/ArandelaCobre.jpg','ARANDELA COBRE COLONIAL SEXTAVADA 1X60W E27 100800-5 BLUMENAU ILUMINAÇÃO por R$89,99','arandela'),(32,'arandelaPreta','imgsl/arandelaPreta.jpg','ARANDELA PRETO 1X20W E27 30CM IP65 CITY-III BAXTON R$99,00','arandela'),(33,'arandelaGlobo','imgsl/arandelaGlobo.jpg','ARANDELA PARA GLOBO 4\" E27 PRETA TW 02.18 TECNOWAL por R$64,50','arandela'),(37,'Lustre de cristal','imgsl/lustrecristal.png','Lustre Legítimo de Cristal de R$950,00 por R$799,00','lustre'),(39,'painelLedQuadrado','imgsl/painelLedGalaxy.jpg','PAINEL DE LED QUADRADO 24W EMBUTIR 30CM BIVOLT LUZ AMARELADA 1912S GALAXY por R$44,90','painel'),(40,'pendenteBalaVegas','imgsl/pendentebalavegas.jpg','Kit 2 Pendentes Bala / Vegas por R$125,00','pendente'),(41,'lustreNewLine','imgsl/lustretranspNewLine.jpg','LUSTRE TRANSPARENTE CASTEL 5X40W E14 ID68110-5CL NEW LINE por R$499,90','lustre'),(42,'lustreNewLineChamp','imgsl/lustrechampagne.jpg','LUSTRE TRANSPARENTE CASTEL 5X40W E14 ID68110-5CL NEW LINE por R$999,00','lustre'),(43,'lustreCascataStartec','imgsl/lustreCascata.jpg','LUSTRE DE CRISTAL LED FLORENCA STARTEC CROMADO por R$1450,00','lustre'),(44,'Lustre de cristal','imgsl/lustrecristal.png','Lustre Legítimo de Cristal de R$950,00 por R$799,00','lustre'),(45,'lustreNewLine','imgsl/lustretranspNewLine.jpg','LUSTRE TRANSPARENTE CASTEL 5X40W E14 ID68110-5CL NEW LINE por R$499,90','lustre');
/*!40000 ALTER TABLE `produto` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-12-09 20:04:40
