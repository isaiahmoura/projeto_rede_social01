-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Fev-2022 às 14:57
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `rede_social01`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `grupos`
--

CREATE TABLE `grupos` (
  `id` int(11) NOT NULL,
  `grupot_titulo` varchar(32) NOT NULL,
  `id_adm` int(11) NOT NULL,
  `grupo_img` varchar(32) NOT NULL DEFAULT 'group_default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `grupos`
--

INSERT INTO `grupos` (`id`, `grupot_titulo`, `id_adm`, `grupo_img`) VALUES
(1, 'Tecnosh Grupo', 1, 'group_default.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `paginas`
--

CREATE TABLE `paginas` (
  `id` int(11) NOT NULL,
  `pagina_titulo` varchar(32) NOT NULL,
  `id_adm` int(11) NOT NULL,
  `page_img` varchar(32) NOT NULL DEFAULT 'page_default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `paginas`
--

INSERT INTO `paginas` (`id`, `pagina_titulo`, `id_adm`, `page_img`) VALUES
(2, 'Teste', 1, 'page_default.png'),
(5, 'Tecnosh', 1, 'page_default.png'),
(6, 'Casa do Game', 2, 'page_default.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `data_post` datetime NOT NULL,
  `post_txt` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `posts`
--

INSERT INTO `posts` (`id`, `id_usuario`, `data_post`, `post_txt`) VALUES
(70, 1, '2022-02-09 17:14:35', 'eita q poste legal :)'),
(73, 3, '2022-02-10 10:23:34', 'kkkkkkk testando o post kkkkk');

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts_like`
--

CREATE TABLE `posts_like` (
  `id` int(11) NOT NULL,
  `id_post` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `relacionamentos`
--

CREATE TABLE `relacionamentos` (
  `id` int(11) NOT NULL,
  `usuario_de` int(11) NOT NULL,
  `usuario_para` int(11) NOT NULL,
  `status_friend` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `relacionamentos`
--

INSERT INTO `relacionamentos` (`id`, `usuario_de`, `usuario_para`, `status_friend`) VALUES
(13, 2, 1, 1),
(14, 3, 1, 1),
(15, 1, 3, 1),
(16, 1, 3, 1),
(17, 1, 2, 1),
(18, 1, 2, 1),
(19, 1, 2, 1),
(20, 1, 2, 1),
(21, 1, 2, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(19) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `user_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `user_img`) VALUES
(1, 'Isaias Moura', 'isaias@gmail.com', '202cb962ac59075b964b07152d234b70', 'default.png'),
(2, 'Mateus Fernandes', 'mateus1@gmail.com', '202cb962ac59075b964b07152d234b70', 'user.png'),
(3, 'Lucas Freitas', 'lucas2@gmail.com', '202cb962ac59075b964b07152d234b70', 'user.png'),
(4, 'Lucas Neto', 'lucas_neto@gmail.com', '202cb962ac59075b964b07152d234b70', 'user.png'),
(5, 'Bruno Freitas', 'bruno2@gmail.com', '202cb962ac59075b964b07152d234b70', 'user.png'),
(6, 'Bruno Moura', 'bruno_moura@gmail.com', '202cb962ac59075b964b07152d234b70', 'user.png');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `grupos`
--
ALTER TABLE `grupos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `paginas`
--
ALTER TABLE `paginas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `posts_like`
--
ALTER TABLE `posts_like`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `relacionamentos`
--
ALTER TABLE `relacionamentos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `grupos`
--
ALTER TABLE `grupos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `paginas`
--
ALTER TABLE `paginas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT de tabela `posts_like`
--
ALTER TABLE `posts_like`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `relacionamentos`
--
ALTER TABLE `relacionamentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
