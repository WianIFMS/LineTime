-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Servidor: sql307.epizy.com
-- Tempo de Geração: 11/07/2019 às 19:47:30
-- Versão do Servidor: 5.6.41-84.1
-- Versão do PHP: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `epiz_23506245_linetimes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `amigos`
--

CREATE TABLE IF NOT EXISTS `amigos` (
  `meu_id` int(11) NOT NULL,
  `amigo_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `amigos`
--

INSERT INTO `amigos` (`meu_id`, `amigo_id`) VALUES
(11, 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentarios`
--

CREATE TABLE IF NOT EXISTS `comentarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comentario` text NOT NULL,
  `data_comentario` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Extraindo dados da tabela `comentarios`
--

INSERT INTO `comentarios` (`id`, `comentario`, `data_comentario`, `id_usuario`) VALUES
(32, 'Testar aqui tbm', '2019-03-11 10:56:06', 0),
(46, '', '2019-06-28 23:06:05', 11),
(45, '!!!', '2019-06-08 05:57:37', 4),
(44, '', '2019-06-08 05:57:23', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresas`
--

CREATE TABLE IF NOT EXISTS `empresas` (
  `id_empresa` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `cnpj` double NOT NULL,
  `tipo_negocio` varchar(255) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_empresa`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `empresas`
--

INSERT INTO `empresas` (`id_empresa`, `nome`, `cnpj`, `tipo_negocio`, `cidade`, `data_cadastro`) VALUES
(5, 'wian empresa', 123546587878, 'qualquer coisa', 'por ai', '2019-05-31 23:24:46');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fotoperfil`
--

CREATE TABLE IF NOT EXISTS `fotoperfil` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `foto_perfil` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'fotos/perfil.jfif',
  `id_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `grupos`
--

CREATE TABLE IF NOT EXISTS `grupos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Extraindo dados da tabela `grupos`
--

INSERT INTO `grupos` (`id`, `nome`) VALUES
(13, 'LineTime');

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagens`
--

CREATE TABLE IF NOT EXISTS `mensagens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_de` int(11) NOT NULL,
  `id_para` int(11) DEFAULT NULL,
  `id_grupo` int(11) DEFAULT NULL,
  `mensagem` text NOT NULL,
  `dt_mensagem` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=63 ;

--
-- Extraindo dados da tabela `mensagens`
--

INSERT INTO `mensagens` (`id`, `id_de`, `id_para`, `id_grupo`, `mensagem`, `dt_mensagem`) VALUES
(6, 11, NULL, 13, 'o meu esta pegando so a hora , e o de vcs ?', '2019-04-19 16:09:00'),
(5, 11, NULL, 13, 'iae', '2019-04-19 16:09:00'),
(4, 10, NULL, 13, 'eae', '2019-04-19 15:47:00'),
(7, 10, NULL, 13, 'Aqui tbm', '2019-04-19 16:17:00'),
(8, 4, NULL, 13, 'Testando horario', '2019-04-19 21:36:00'),
(9, 4, NULL, 13, 'TÃ¡ pegando ', '2019-04-19 21:36:00'),
(10, 10, NULL, 13, 'Ta comeÃ§ando a ficar bom o negocio', '2019-04-19 21:47:00'),
(11, 10, NULL, 13, 'NÃ£o sei pq mas essas ultimas msgs ainda nÃ£o aparece', '2019-04-19 21:50:00'),
(12, 10, NULL, 13, ':embarrassed:', '2019-04-19 23:44:00'),
(13, 10, NULL, 13, 'eae', '2019-04-20 14:12:00'),
(14, 11, NULL, 13, 'iae', '2019-04-20 14:48:00'),
(15, 4, NULL, 13, 'NÃ£o da para ver nada', '2019-04-20 18:04:00'),
(16, 10, NULL, 13, 'eae', '2019-04-20 23:06:00'),
(17, 4, NULL, 13, 'Agora sim, funcionando corretamente ðŸ˜„ðŸ˜„ðŸ˜„', '2019-04-22 20:46:00'),
(18, 10, NULL, 13, 'Aee kkk', '2019-04-22 20:47:00'),
(19, 10, NULL, 13, ':nerd:', '2019-04-22 21:16:00'),
(20, 10, NULL, 13, ':angry:', '2019-04-23 20:48:00'),
(21, 11, NULL, 13, 'iae', '2019-04-23 20:48:00'),
(22, 10, NULL, 13, ':happy:', '2019-04-23 20:48:00'),
(23, 10, NULL, 13, 'fala mestre', '2019-04-23 20:49:00'),
(24, 11, NULL, 13, 'kkkkkkkkkkkkkk', '2019-04-23 20:49:00'),
(25, 10, NULL, 13, '************************************************************************************************************************************************************************', '2019-04-23 20:51:00'),
(26, 11, NULL, 13, 'hdvclhvdcJCVhdvjldsvhvbjlvbfb  dlj db dhcvhvjdsj bds h j dm dshcvjdsahvjvh  dhvihcvdhvlc dwhivcjdscvddsvjlh hidjshhjav hbvhsvj hdsvjldvdsvhdvjdvh dsha jdsvhbdls jdsvldcvhldbsch ldhsvbjhbdladsbvbjhdvbkabv asvbvbdcdvkhhhsvdadk', '2019-04-23 20:53:00'),
(27, 10, NULL, 13, 'Vou tentar resolver esse problema esse fds', '2019-04-23 20:54:00'),
(28, 10, NULL, 13, 'Tem q fazer uma quebra de linha na msg', '2019-04-23 20:54:00'),
(29, 11, NULL, 13, 'blz', '2019-04-23 20:54:00'),
(30, 11, NULL, 13, 'Tem que ficar meio parecido com o quadro do index', '2019-04-23 20:55:00'),
(31, 10, NULL, 13, 'Isso msm', '2019-04-23 20:55:00'),
(32, 10, NULL, 13, 'E fazer a parte de notificaÃ§Ãµes tbm', '2019-04-23 20:56:00'),
(33, 10, NULL, 13, 'E de usuarios online tbm', '2019-04-23 20:59:00'),
(34, 4, NULL, 13, 'Esse esquema da mensagem que o professor estÃ¡ explicando, pode tambÃ©m funcionar com o esquema de empresas', '2019-04-23 20:59:00'),
(35, 4, NULL, 13, 'Enviar a os dados do usuario por GET', '2019-04-23 21:00:00'),
(36, 11, NULL, 13, 'Da pra fazer, so que  como o professor disse', '2019-04-23 21:02:00'),
(37, 11, NULL, 13, 'Fica menos elegante, pois fica todas as informaÃ§Ãµes na url', '2019-04-23 21:03:00'),
(38, 4, NULL, 13, 'Ou entÃ£o POST, sei lÃ¡', '2019-04-23 21:04:00'),
(39, 10, NULL, 13, 'POST fica melhor', '2019-04-23 21:05:00'),
(40, 4, NULL, 13, 'Legal o esquema das cores', '2019-04-28 23:17:00'),
(41, 10, NULL, 13, 'Agr tbm verifica os usuarios online', '2019-04-29 07:37:00'),
(42, 10, NULL, 13, 'Meu celular fudeu, sÃ³ converso por aqui agr kkkk', '2019-04-29 08:06:00'),
(43, 4, NULL, 13, 'Vix mano, que merda heim', '2019-04-29 16:51:00'),
(44, 4, NULL, 13, 'Vix mano, que merda heim', '2019-04-29 16:51:00'),
(45, 4, NULL, 13, 'Vix mano, que merda heim', '2019-04-29 16:51:00'),
(46, 4, NULL, 13, 'Eita', '2019-04-29 16:51:00'),
(47, 4, NULL, 13, 'Internet ficou lenta', '2019-04-29 16:53:00'),
(48, 4, NULL, 13, 'Apertei enter 3 vezes', '2019-04-29 16:53:00'),
(49, 4, NULL, 13, 'E enviou a mensagem 3 vezes tambÃ©m kkk', '2019-04-29 16:54:00'),
(50, 11, NULL, 13, 'ow', '2019-04-29 21:02:00'),
(51, 10, NULL, 13, 'opa', '2019-04-29 21:02:00'),
(52, 10, NULL, 13, ':', '2019-04-29 21:03:00'),
(53, 10, NULL, 13, ':embarrassed:', '2019-04-29 21:03:00'),
(54, 4, NULL, 13, 'Fala ae pessoal', '2019-04-30 19:13:00'),
(55, 10, NULL, 13, 'NinguÃ©m foi ontem kkkkk', '2019-05-01 12:01:00'),
(56, 10, NULL, 13, 'Nem o vitin kkk', '2019-05-01 12:01:00'),
(57, 11, NULL, 13, 'fala ae', '2019-05-01 13:43:00'),
(58, 4, NULL, 13, 'Eu fui mas sÃ³ fiquei na biblioteca fazendo o trabalho de BD', '2019-05-01 19:33:00'),
(59, 11, NULL, 13, 'Pelo celular tÃ¡ legal aa parte de mensagens', '2019-05-03 12:03:00'),
(60, 11, NULL, 13, 'SÃ³ estÃ¡ ultrapassando a bordas ', '2019-05-03 12:04:00'),
(61, 4, NULL, 13, 'DÃ¡ para enviar mensagens pelo celular de boa', '2019-05-04 18:46:00'),
(62, 11, NULL, 13, 'http://phpbrasil.com/artigo/RJqAdTL7ryeR/integrando-o-php-com-java-parte-1', '2019-05-31 19:28:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfil`
--

CREATE TABLE IF NOT EXISTS `perfil` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `relacionamento` varchar(255) CHARACTER SET utf8 NOT NULL,
  `profissao` varchar(255) CHARACTER SET utf8 NOT NULL,
  `nascimento` date NOT NULL,
  `sexo` varchar(255) CHARACTER SET utf8 NOT NULL,
  `id_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `perfil`
--

INSERT INTO `perfil` (`id`, `relacionamento`, `profissao`, `nascimento`, `sexo`, `id_usuario`) VALUES
(2, 'Solteiro', 'Serralherio', '2000-01-03', 'Masculino', 11);

-- --------------------------------------------------------

--
-- Estrutura da tabela `postagemempresas`
--

CREATE TABLE IF NOT EXISTS `postagemempresas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `postagem` text NOT NULL,
  `data_postagem` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_usuario` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `postagens`
--

CREATE TABLE IF NOT EXISTS `postagens` (
  `titulo` varchar(255) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `postagem` text,
  `data_postagem` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_usuario` (`id_usuario`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=59 ;

--
-- Extraindo dados da tabela `postagens`
--

INSERT INTO `postagens` (`titulo`, `id`, `postagem`, `data_postagem`, `id_usuario`) VALUES
('', 21, 'O botÃ£o de editar sÃ³ aparece nos posts q vc fez tbm ðŸ’€', '2019-03-29 02:22:23', 10),
('', 20, 'Teste', '2019-03-29 02:07:49', 4),
('', 30, 'teste emojis ðŸ˜€ðŸ˜¬ðŸ˜ðŸ‘¨â€ðŸŽ“ðŸ¤˜ðŸ¤ŸâœŒðŸ¤žðŸ‘†ðŸ‘ðŸ¤ðŸ™ðŸ‘ðŸ™ŒðŸ¤²', '2019-03-29 02:31:51', 10),
('', 17, 'Bacana, Top', '2019-03-28 20:21:07', 4),
('', 18, 'Opa', '2019-03-28 20:24:21', 3),
('', 34, 'Como vc colocou os emojis?/', '2019-03-29 02:34:02', 11),
('', 29, 'Blz, agr esta funcionando', '2019-03-29 02:29:06', 11),
('', 31, 'Oloko que fita Ã© essa', '2019-03-29 02:32:49', 11),
('', 32, '?? kkkk', '2019-03-29 02:33:03', 11),
('', 33, ';)', '2019-03-29 02:33:35', 11),
('', 35, 'Pega de site que tem os emojis', '2019-03-29 02:34:13', 10),
('', 36, 'ata kkkk', '2019-03-29 02:34:27', 11),
('', 37, 'https://pt.piliapp.com/emoji/list/', '2019-03-29 02:34:31', 10),
('', 38, 'blz', '2019-03-29 02:34:45', 11),
('', 39, 'Ta parecendo chat kkkkkk', '2019-03-29 02:35:08', 10),
('', 40, 'NÃ£o consigo pegar o link de nenhum jeito !!', '2019-03-29 02:36:08', 11),
('', 42, 'To aqui pow kkk', '2019-03-29 22:23:03', 10),
('', 43, 'Opa', '2019-03-30 00:52:02', 4),
('', 44, 'OPAAAAA, Estamos ai', '2019-03-31 00:43:55', 4),
('', 45, 'ðŸ‘ðŸ‘ŠâœŠâœŒ', '2019-03-31 01:45:50', 4),
('', 51, 'Iae galera, fiquei sem internet no celular', '2019-04-07 01:55:27', 11),
('', 47, 'Agr falta a foto do perfil ', '2019-03-31 03:40:48', 10),
('', 48, 'Eu estou quase terminando a pagina de perfil do usuÃ¡rio tambÃ©m.', '2019-03-31 03:42:33', 4),
('', 49, 'Excelente âœŒ', '2019-03-31 04:19:34', 10),
('', 52, 'Beleza âœŒï¸', '2019-04-14 06:48:25', 4),
('', 55, 'VerdÃ£o', '2019-04-20 00:07:45', 4),
('', 58, 'Qualquer coisa no if', '2019-05-31 23:20:32', 11);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `nascimento` date NOT NULL,
  `celular` double NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `online` int(11) DEFAULT NULL,
  `foto_perfil` varchar(255) NOT NULL DEFAULT 'fotos/perfil.jfif',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `nascimento`, `celular`, `email`, `senha`, `data_cadastro`, `online`, `foto_perfil`) VALUES
(1, 'Maria Eduarda ', '2000-01-03', 0, 'eduardaalvessilva2000@gmail.com', '088ec7d6260f3f6448b97b577fd86445', '2019-06-30 03:55:24', 0, 'fotos/perfil.jfif'),
(2, 'Yasmin Gomes', '0000-00-00', 0, 'yasmingomesvaz@gmail.com', '41c6037a491a169fb01171d265243dce', '2019-06-28 23:40:19', 0, 'fotos/perfil.jfif'),
(4, 'Jhonata', '0000-00-00', 11111111, 'silvajhonata@live.com', '827ccb0eea8a706c4c34a16891f84e7b', '2019-07-01 19:14:40', 1, 'fotos/perfil.jfif'),
(5, 'Waldo ', '0000-00-00', 81651532, 'waldo2428@gmail.com', 'a9aa92b781cadd868a460b7d964c4346', '2019-03-12 03:20:55', 0, 'fotos/perfil.jfif'),
(9, 'Jhonata02', '0000-00-00', 11111111, 'custodiojhonata@hotmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2019-03-25 07:46:03', 0, 'fotos/perfil.jfif'),
(10, 'Caio Henrique', '0000-00-00', 67996456959, 'caiocoxim10@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2019-05-31 23:32:40', 0, 'fotos/perfil.jfif'),
(12, 'Jhonata3', '0000-00-00', 111111, 'jhonatasilva@live.com', '827ccb0eea8a706c4c34a16891f84e7b', '2019-04-12 23:01:34', 0, 'fotos/perfil.jfif'),
(13, 'NÃ©lio Silva', '0000-00-00', 0, 'neliosilva2812@gmail.com', '9be6b6a06be4728bc09c4dc886999af3', '2019-04-15 20:06:18', 0, 'fotos/perfil.jfif'),
(14, 'Jhonata4', '0000-00-00', 111111, 'jhonata@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2019-04-18 04:48:22', 0, 'fotos/perfil.jfif'),
(11, 'Wian Alves', '0000-00-00', 67996853613, 'wianclodoaldo@linetime.com', '827ccb0eea8a706c4c34a16891f84e7b', '2019-07-02 03:21:27', 0, 'fotos/perfil.jfif');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios_grupos`
--

CREATE TABLE IF NOT EXISTS `usuarios_grupos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `id_grupo` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `usuarios_grupos`
--

INSERT INTO `usuarios_grupos` (`id`, `id_usuario`, `id_grupo`) VALUES
(1, 4, 13),
(2, 10, 13),
(3, 11, 13);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios_postagens`
--

CREATE TABLE IF NOT EXISTS `usuarios_postagens` (
  `fk_usuarios` int(11) NOT NULL,
  `fk_postagens` int(11) NOT NULL,
  PRIMARY KEY (`fk_postagens`),
  KEY `usuarios_postagens` (`fk_usuarios`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
