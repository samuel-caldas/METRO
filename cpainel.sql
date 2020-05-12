-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: Dez 06, 2011 as 02:42 PM
-- Versão do Servidor: 5.1.53
-- Versão do PHP: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `cpainel`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cpcomentarios`
--

CREATE TABLE IF NOT EXISTS `cpcomentarios` (
  `cd` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `nome` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `email` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `site` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `mensagem` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  PRIMARY KEY (`cd`),
  KEY `id` (`id`),
  FULLTEXT KEY `mensagem` (`mensagem`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `cpcomentarios`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `cpimagens`
--

CREATE TABLE IF NOT EXISTS `cpimagens` (
  `cd` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) DEFAULT NULL,
  `link` text,
  `thumb` text,
  `categoria` text,
  `capa` text,
  `tipo` text CHARACTER SET ucs2 COLLATE ucs2_bin,
  PRIMARY KEY (`cd`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `cpimagens`
--

INSERT INTO `cpimagens` (`cd`, `id`, `link`, `thumb`, `categoria`, `capa`, `tipo`) VALUES
(1, 1, 'cpainel/imagens/iptu.jpg', 'cpainel/imagens/iptu.jpg', 'banner', 's', 'zoom'),
(2, 2, 'cpainel/imagens/bairro.jpg', 'cpainel/imagens/bairro.jpg', 'thumb', 's', 'zoom'),
(3, 3, 'http://www.youtube.com/watch?v=f2s8YP8u5m0', 'cpainel/imagens/logo.png', 'video', 's', 'play'),
(4, 1, 'cpainel/imagens/iptu.jpg', 'cpainel/imagens/iptu.jpg', 'portifolio', 's', 'galeria');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cplog`
--

CREATE TABLE IF NOT EXISTS `cplog` (
  `cd` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `log` text,
  PRIMARY KEY (`cd`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `cplog`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `cplogin`
--

CREATE TABLE IF NOT EXISTS `cplogin` (
  `cd` int(11) NOT NULL AUTO_INCREMENT,
  `permicao` int(11) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `nome` text,
  `login` text,
  `email` text,
  `senha` text,
  PRIMARY KEY (`cd`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `cplogin`
--

INSERT INTO `cplogin` (`cd`, `permicao`, `data`, `nome`, `login`, `email`, `senha`) VALUES
(1, 1, '2011-12-04', 'Samuel Caldas', 'samuel.caldas', 'samuel.caldas@gmail.com', 'samuel17');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cpnoticias`
--

CREATE TABLE IF NOT EXISTS `cpnoticias` (
  `cd` int(100) NOT NULL AUTO_INCREMENT,
  `data` date DEFAULT NULL,
  `titulo` text COLLATE utf8_unicode_ci,
  `resumo` text COLLATE utf8_unicode_ci,
  `Autor` text COLLATE utf8_unicode_ci,
  `noticia` text COLLATE utf8_unicode_ci,
  `botao` text COLLATE utf8_unicode_ci,
  `galeria` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`cd`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `cpnoticias`
--

INSERT INTO `cpnoticias` (`cd`, `data`, `titulo`, `resumo`, `Autor`, `noticia`, `botao`, `galeria`) VALUES
(1, '2011-12-03', 'Crescimento e Desenvolvimento.', 'Atenção contribuinte, fique atento, pois o IPTU premiado está chegando...\r\n<br />\r\nPagando em dia você concorre a vários prêmios!', 'Prefeitura Municipal de Córrego Novo.', 'Atenção contribuinte, fique atento, pois  o IPTU premiado está chegando...\r\nA Prefeitura Municipal de Córrego Novo, informa aos contribuintes que estiverem em dia com o seu IPTU e também com a dívida ativa, concorrerão a vários prêmios no dia 03 de dezembro, o sorteio acontecerá às 19:30hs no Quiosque.<br />\r\n1º premio: 1 ferro elétrico;<br />\r\n2º premio: 1 ventilador;<br />\r\n3º premio: 1 jogo de panelas;<br />\r\n4º premio: 1 DVD;<br />\r\n5º premio: 1 bicicleta;<br />\r\n<br />\r\nRegularize sua situação e participe!\r\n<br />\r\n“Cidade limpa e organizada tem cidadão consciente! Pagar IPTU é pensar numa cidade melhor para todos”.', 'n', 'slide'),
(2, '2011-12-04', 'Novo bairro em Corrego Novo.', 'Conforme o prefeito Dalton Caetano, o local será entregue com toda infraestrutura', 'Prefeitura Municipal de Córrego Novo.', '<h6>Local abrigará 117 lotes e o Centro de Eventos do município</h6>\r\n<br></br>\r\n<p>O perímetro urbano da cidade de Córrego Novo em breve será ampliado. Desde o mês de setembro, maquinas, caminhões e operários trabalham num loteamento que abrigará o novo bairro da cidade. O lugar terá o nome de Bairro Prefeito Geraldo Moreira, homenagem ao político que governou o município de janeiro de 1979 a dezembro de 1982.</p>\r\n<br></br>\r\n<p>Nele ainda será construído o Centro de Eventos de Córrego Novo. </p>\r\n<br></br>\r\n<p>O prefeito Daltton Caetano Campos (PP) fala sobre esta iniciativa. “O gestor público tem sempre que oferecer condições de habitação. Tenho o prazer de estar garantindo um grande direito, que é conceder um local digno para que o cidadão corregonovense possa morar”, disse o prefeito.</p>\r\n<br></br>\r\n<br></br>\r\n<h6><b>INFRAESTRUTURA</b></h6>\r\n<p>Conforme assegurou Daltton Caetano Campos, o local será entregue com toda infraestrutura. “Colocaremos rede de esgoto e água, faremos drenagem pluvial, terraplanagens e pavimentação de vias públicas. Trabalhamos para que nosso cidadão se sinta confortável no Bairro Prefeito Geraldo Moreira”, destacou Daltton Caetano Campos.</p>\r\n<br></br>\r\n<p>O Bairro Prefeito Geraldo Moreira contará com 117 lotes. As pessoas escolhidas para ganharem os lotes passarão por uma pré-seleção feita pelo Cadastro Social do Município. Agora a Prefeitura trabalha junto à Caixa Econômica Federal para implantação do programa “Minha Casa, Miha Vida” em Córrego Novo, viabilizando a construção das casas no novo bairro.</p>\r\n<br></br>\r\n<br></br>\r\n<h6><b>CENTRO DE EVENTOS</b></h6>\r\nOutra obra de destaque do prefeito Daltton Caetano Campos é a edificação do Centro de Eventos de Córrego Novo, que será construído no bairro Prefeito Geraldo Moreira. “O centro ocupará uma área de 17.000 m². Este local será referência para toda região. Córrego Novo é conhecido por suas festas bem organizadas e ordeiras.<br />\r\n<br></br>\r\n<p>Agora temos um local ideal para fazê-las”, considerou o prefeito.</p>\r\n<br></br>\r\n<p>Para facilitar o acesso da população ao novo bairro e ao Centro do Evento, a Prefeitura está construindo uma ponte de concreto para fazer essa ligação. “Trabalhamos para que nossos moradores e visitantes tenham mais comodidade. Por isso somos conhecidos por nossa hospitalidade”, finalizou Dalton Caetano Campos.</p>\r\n<br></br>\r\n<p>O local terá o nome de Bairro Prefeito Geraldo Moreira, homenagem ao político que governou o município de janeiro de 1979 a dezembro de 1982.</p>\r\n<br></br>', 's', 'thumb'),
(3, '2011-12-02', 'Video Institucional', 'Córrego Novo, mais trabalho mais progresso.', 'Prefeitura Municipal de Córrego Novo.', NULL, 'n', 'thumb');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cpportifolio`
--

CREATE TABLE IF NOT EXISTS `cpportifolio` (
  `cd` int(11) NOT NULL AUTO_INCREMENT,
  `data` date DEFAULT NULL,
  `tipo` text,
  `titulo` text,
  `resumo` text,
  `mensagem` text,
  PRIMARY KEY (`cd`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `cpportifolio`
--

INSERT INTO `cpportifolio` (`cd`, `data`, `tipo`, `titulo`, `resumo`, `mensagem`) VALUES
(1, '2011-12-06', 'cidade', 'Cidade.', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy... ', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy... ');
