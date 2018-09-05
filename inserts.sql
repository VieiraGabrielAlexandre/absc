INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `situacoe_id`, `niveis_acesso_id`, `created`, `modified`) VALUES
(1, 'Gabriel', 'gabrielvieira840@gmail.com', '3366', 1, 1, '2018-08-29 00:00:01', '2018-08-29 21:58:01');
INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `situacoe_id`, `niveis_acesso_id`, `created`, `modified`) VALUES
(2, 'Jasmine', 'jaas_reis@hotmail.com','1234', 1, 2, '2018-08-29 00:00:01', '2018-08-29 21:58:01');
INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `situacoe_id`, `niveis_acesso_id`, `created`, `modified`) VALUES
(3, 'Ricardo', 'ricardo.ares@globo.com','1234', 1, 3, '2018-08-29 00:00:01', '2018-08-29 21:58:01');

INSERT INTO `niveis_acessos` (`id`, `nome`, `created`, `modified`) VALUES (1,'Administrador','2018-08-29 00:00:01','2018-08-29 21:58:01');
INSERT INTO `niveis_acessos` (`id`, `nome`, `created`, `modified`) VALUES (2,'Colaborador','2018-08-29 00:00:01','2018-08-29 21:58:01');
INSERT INTO `niveis_acessos` (`id`, `nome`, `created`, `modified`) VALUES (3,'Cliente','2018-08-29 00:00:01','2018-08-29 21:58:01');