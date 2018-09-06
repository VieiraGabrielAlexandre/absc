CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(220) NOT NULL,
  `email` varchar(520) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `situacoe_id` int(11) NOT NULL DEFAULT '0',
  `niveis_acesso_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
)', NULL);

CREATE TABLE IF NOT EXISTS `niveis_acessos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
)

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `situacoe_id`, `niveis_acesso_id`, `created`, `modified`) VALUES
(1, 'Gabriel', 'gabrielvieira840@gmail.com', '3366', 1, 1, '2018-08-29 00:00:01', '2018-08-29 21:58:01');
INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `situacoe_id`, `niveis_acesso_id`, `created`, `modified`) VALUES
(2, 'Jasmine', 'jaas_reis@hotmail.com','1234', 1, 1, '2018-08-29 00:00:01', '2018-08-29 21:58:01');

INSERT INTO `niveis_acessos` (`id`, `nome`, `created`, `modified`) VALUES (1,'Administrador','2018-08-29 00:00:01','2018-08-29 21:58:01');
INSERT INTO `niveis_acessos` (`id`, `nome`, `created`, `modified`) VALUES (2,'Colaborador','2018-08-29 00:00:01','2018-08-29 21:58:01');
INSERT INTO `niveis_acessos` (`id`, `nome`, `created`, `modified`) VALUES (2,'Cliente','2018-08-29 00:00:01','2018-08-29 21:58:01');
