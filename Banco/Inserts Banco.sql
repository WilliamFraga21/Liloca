
select * from cliente;
select * from aniversariante;
select * from bebidas;
select * from alimentos;
select * from enfeites;
select * from itens;
select * from pedido;
select * from produtos;



INSERT INTO `liloca`.`cliente` (`Nome`, `CPF`, `Telefone`, `Email`,`Senha`) VALUES ('William', '12859310282', '924663019', 'william@gmail.com','12345678');
INSERT INTO `liloca`.`cliente` (`Nome`, `CPF`, `Telefone`, `Email`,`Senha`) VALUES ('Kayky victor', '826477210944', '973682097', 'kayky@gmail.com','1122334455');
INSERT INTO `liloca`.`cliente` (`Nome`, `CPF`, `Telefone`, `Email`,`Senha`) VALUES ('Julia Silva', '8723755439', '976553491', 'Juliasilva@gmail.com','wewe12345');
INSERT INTO `liloca`.`cliente` (`Nome`, `CPF`, `Telefone`, `Email`,`Senha`) VALUES ('Paula soares', '175643209212', '974318742', 'Paula@gmail.com','juju1212');
INSERT INTO `liloca`.`cliente` (`Nome`, `CPF`, `Telefone`, `Email`,`Senha`) VALUES ('Ana Silva', '98564237112', '985647029', 'Anasilva221@gmail.com','popo8989');


INSERT INTO `liloca`.`pedido` (`Data_Pedido`, `Data_Entrega`, `Tipo_Da_Entrega`, `Prozo_de_Entrega`, `Frete`, `End_Do_Cliente_Entrega`, `Valor_Pedido`, `Valor_Sinal`, `Valor_A_Pagar`, `Aniversariante_idAniversariante`) VALUES ('2022-02-17', '2022-02-19', 'Retirada', '2022-02-18', '90.56', 'AV irece 2322', '9800.32', '5000', '4800.32', '1');
INSERT INTO `liloca`.`pedido` (`Data_Pedido`, `Data_Entrega`, `Tipo_Da_Entrega`, `Prozo_de_Entrega`, `Frete`, `End_Do_Cliente_Entrega`, `Valor_Pedido`, `Valor_Sinal`, `Valor_A_Pagar`, `Aniversariante_idAniversariante`) VALUES ('2022-02-18', '2022-02-22', 'Entrega', '2022-02-21', '44.21', 'Rua Vinte 244', '250', '100', '150', '2');
INSERT INTO `liloca`.`pedido` (`Data_Pedido`, `Data_Entrega`, `Tipo_Da_Entrega`, `Prozo_de_Entrega`, `Frete`, `End_Do_Cliente_Entrega`, `Valor_Pedido`, `Valor_Sinal`, `Valor_A_Pagar`, `Aniversariante_idAniversariante`) VALUES ('2022-02-18', '2022-02-22', 'Entrega', '2022-02-21', '130.21', 'Rua nove de maio 67', '800.25', '400', '400.25', '3');
INSERT INTO `liloca`.`pedido` (`Data_Pedido`, `Data_Entrega`, `Tipo_Da_Entrega`, `Prozo_de_Entrega`, `Frete`, `End_Do_Cliente_Entrega`, `Valor_Pedido`, `Valor_Sinal`, `Valor_A_Pagar`, `Aniversariante_idAniversariante`) VALUES ('2022-02-19', '2022-02-28', 'Retirada', '2022-02-27', '74', 'Rua jose antonio 25', '80.55', '40', '40.55', '4');
INSERT INTO `liloca`.`pedido` (`Data_Pedido`, `Data_Entrega`, `Tipo_Da_Entrega`, `Prozo_de_Entrega`, `Frete`, `End_Do_Cliente_Entrega`, `Valor_Pedido`, `Valor_Sinal`, `Valor_A_Pagar`, `Aniversariante_idAniversariante`) VALUES ('2022-02-20', '2022-02-25', 'Retirada', '2022-02-25', '210.77', 'Rua Mendes 90', '750.70', '420', '330.70', '5');
INSERT INTO `liloca`.`pedido` (`Data_Pedido`, `Data_Entrega`, `Tipo_Da_Entrega`, `Prozo_de_Entrega`, `Frete`, `End_Do_Cliente_Entrega`, `Valor_Pedido`, `Valor_Sinal`, `Valor_A_Pagar`, `Aniversariante_idAniversariante`) VALUES ('2022-02-21', '2022-02-27', 'Entrega', '2022-02-27', '72.11', 'AV Dom paulo 77', '350.50', '200', '150.50', '6');
INSERT INTO `liloca`.`pedido` (`Data_Pedido`, `Data_Entrega`, `Tipo_Da_Entrega`, `Prozo_de_Entrega`, `Frete`, `End_Do_Cliente_Entrega`, `Valor_Pedido`, `Valor_Sinal`, `Valor_A_Pagar`, `Aniversariante_idAniversariante`) VALUES ('2022-02-25', '2022-02-26', 'Entrega', '2022-02-26', '80.80', 'AV vinte de maio', '600.21', '400', '200.21', '7');
INSERT INTO `liloca`.`pedido` (`Data_Pedido`, `Data_Entrega`, `Tipo_Da_Entrega`, `Prozo_de_Entrega`, `Frete`, `End_Do_Cliente_Entrega`, `Valor_Pedido`, `Valor_Sinal`, `Valor_A_Pagar`, `Aniversariante_idAniversariante`) VALUES ('2022-02-28', '2022-03-01', 'Entrega', '2022-03-01', '20.1', 'Rua Migual 888', '980.2', '700', '280.2', '8');
INSERT INTO `liloca`.`pedido` (`Data_Pedido`, `Data_Entrega`, `Tipo_Da_Entrega`, `Prozo_de_Entrega`, `Frete`, `End_Do_Cliente_Entrega`, `Valor_Pedido`, `Valor_Sinal`, `Valor_A_Pagar`, `Aniversariante_idAniversariante`) VALUES ('2022-03-05', '2022-03-10', 'Entrega', '2022-03-10', '32.99', 'Rua Angelo 1', '229', '100', '129', '9');

INSERT INTO `liloca`.`aniversariante` (`Nome`, `Idade`, `Tema`, `Cores`,`Data_Festa`,`Cliente_idCliente`) VALUES ('Gustavo', '25', 'Batman', 'Preto', '2022-02-20','1');
INSERT INTO `liloca`.`aniversariante` (`Nome`, `Idade`, `Tema`, `Cores`,`Data_Festa`,`Cliente_idCliente`) VALUES ('Rafael', '19', 'Super Homem', 'Vermelho', '2022-02-23','2');
INSERT INTO `liloca`.`aniversariante` (`Nome`, `Idade`, `Tema`, `Cores`,`Data_Festa`,`Cliente_idCliente`) VALUES ('Marcelo', '17', 'Xuxa', 'Rosa', '2022-02-23','3');
INSERT INTO `liloca`.`aniversariante` (`Nome`, `Idade`, `Tema`, `Cores`,`Data_Festa`,`Cliente_idCliente`) VALUES ('Ana Beatriz', '15', 'Frozen', 'Azul bebe', '2022-02-28','4');
INSERT INTO `liloca`.`aniversariante` (`Nome`, `Idade`, `Tema`, `Cores`,`Data_Festa`,`Cliente_idCliente`) VALUES ('Claudia Santos', '45', 'Formatura', 'Preto e Branco', '2022-02-26','5');
INSERT INTO `liloca`.`aniversariante` (`Nome`, `Idade`, `Tema`, `Cores`,`Data_Festa`,`Cliente_idCliente`) VALUES ('Poly', '34', 'GOT', 'Branco e Marrom', '2022-02-28','5');
INSERT INTO `liloca`.`aniversariante` (`Nome`, `Idade`, `Tema`, `Cores`,`Data_Festa`,`Cliente_idCliente`) VALUES ('Julia', '8', 'Frozen', 'Azul bebe', '2022-02-27','3');
INSERT INTO `liloca`.`aniversariante` (`Nome`, `Idade`, `Tema`, `Cores`,`Data_Festa`,`Cliente_idCliente`) VALUES ('Bryan', '5', 'Carros ', 'Vermelho', '2022-03-02','1');
INSERT INTO `liloca`.`aniversariante` (`Nome`, `Idade`, `Tema`, `Cores`,`Data_Festa`,`Cliente_idCliente`) VALUES ('Nilton', '10', 'Avião', 'Branco', '2022-03-11','4');

INSERT INTO `liloca`.`produtos` (`Nome`, `Quantidade`, `Valor`) VALUES ('Bolo 1', '1', '120');
INSERT INTO `liloca`.`produtos` (`Nome`, `Quantidade`, `Valor`) VALUES ('Bolo 2', '1', '180');
INSERT INTO `liloca`.`produtos` (`Nome`, `Quantidade`, `Valor`) VALUES ('Bolo 3 Casamento', '1', '400');
INSERT INTO `liloca`.`produtos` (`Nome`, `Quantidade`, `Valor`) VALUES ('Brigadeiro', '1', '140');
INSERT INTO `liloca`.`produtos` (`Nome`, `Quantidade`, `Valor`) VALUES ('Beijinho', '1', '115');
INSERT INTO `liloca`.`produtos` (`Nome`, `Quantidade`, `Valor`) VALUES ('Coxinha', '1', '100');
INSERT INTO `liloca`.`produtos` (`Nome`, `Quantidade`, `Valor`) VALUES ('Bombom', '1', '90');
INSERT INTO `liloca`.`produtos` (`Nome`, `Quantidade`, `Valor`) VALUES ('Pirulito', '1', '30');
INSERT INTO `liloca`.`produtos` (`Nome`, `Quantidade`, `Valor`) VALUES ('Faixa de Mesa 1', '1', '39');
INSERT INTO `liloca`.`produtos` (`Nome`, `Quantidade`, `Valor`) VALUES ('Balão', '1', '30');
INSERT INTO `liloca`.`produtos` (`Nome`, `Quantidade`, `Valor`) VALUES ('Refrigerante 1', '1', '8');
INSERT INTO `liloca`.`produtos` (`Nome`, `Quantidade`, `Valor`) VALUES ('Refrigerante 2', '1', '10');
INSERT INTO `liloca`.`produtos` (`Nome`, `Quantidade`, `Valor`) VALUES ('Refrigerante 3', '1', '7');
INSERT INTO `liloca`.`produtos` (`Nome`, `Quantidade`, `Valor`) VALUES ('Faixa de Mesa 2', '1', '39');



INSERT INTO `liloca`.`bebidas` (`Marca`, `Litros`, `Sabor`, `Produtos_idProdutos`) VALUES ('CocaCola', '1', 'Coca', '12');
INSERT INTO `liloca`.`bebidas` (`Marca`, `Litros`, `Sabor`, `Produtos_idProdutos`) VALUES ('CocaCola 0', '1', 'Coca', '12');
INSERT INTO `liloca`.`bebidas` (`Marca`, `Litros`, `Sabor`, `Produtos_idProdutos`) VALUES ('Dolly', '1', 'Guaraná', '11');
INSERT INTO `liloca`.`bebidas` (`Marca`, `Litros`, `Sabor`, `Produtos_idProdutos`) VALUES ('Dolly', '1', 'Laranja', '11');
INSERT INTO `liloca`.`bebidas` (`Marca`, `Litros`, `Sabor`, `Produtos_idProdutos`) VALUES ('Fanta', '1', 'Uva', '13');
INSERT INTO `liloca`.`bebidas` (`Marca`, `Litros`, `Sabor`, `Produtos_idProdutos`) VALUES ('Fanta', '1', 'Laranja', '11');
INSERT INTO `liloca`.`bebidas` (`Marca`, `Litros`, `Sabor`, `Produtos_idProdutos`) VALUES ('Guaraná Jeses', '1', 'Tutti Frutti', '13');


INSERT INTO `liloca`.`alimentos` (`Medida`, `Sabor`, `Recheio`, `Produtos_idProdutos`) VALUES ('1', 'Chocolate', 'Chocolate', '1');
INSERT INTO `liloca`.`alimentos` (`Medida`, `Sabor`, `Recheio`, `Produtos_idProdutos`) VALUES ('1', 'Morango', 'Chocolate', '1');
INSERT INTO `liloca`.`alimentos` (`Medida`, `Sabor`, `Recheio`, `Produtos_idProdutos`) VALUES ('1', 'Chocolate', 'Morango', '1');
INSERT INTO `liloca`.`alimentos` (`Medida`, `Sabor`, `Recheio`, `Produtos_idProdutos`) VALUES ('1', 'Cenoura', 'Chocolate', '1');
INSERT INTO `liloca`.`alimentos` (`Medida`, `Sabor`, `Recheio`, `Produtos_idProdutos`) VALUES ('1', 'Nozes', 'Chocolate', '3');
INSERT INTO `liloca`.`alimentos` (`Medida`, `Sabor`, `Recheio`, `Produtos_idProdutos`) VALUES ('1', 'Comun', 'Beijinho', '3');
INSERT INTO `liloca`.`alimentos` (`Medida`, `Sabor`, `Recheio`, `Produtos_idProdutos`) VALUES ('1', 'Baba de moça', 'Doce de leite', '3');
INSERT INTO `liloca`.`alimentos` (`Medida`, `Sabor`, `Recheio`, `Produtos_idProdutos`) VALUES ('1', 'Comun', 'Doce de leite', '2');
INSERT INTO `liloca`.`alimentos` (`Medida`, `Sabor`, `Recheio`, `Produtos_idProdutos`) VALUES ('50', 'Comun', 'Frango', '4');
INSERT INTO `liloca`.`alimentos` (`Medida`, `Sabor`, `Recheio`, `Produtos_idProdutos`) VALUES ('50', 'Comun', 'Calabresa', '4');
INSERT INTO `liloca`.`alimentos` (`Medida`, `Sabor`, `Recheio`, `Produtos_idProdutos`) VALUES ('40', 'Comun', 'Queijo', '4');
INSERT INTO `liloca`.`alimentos` (`Medida`, `Sabor`, `Recheio`, `Produtos_idProdutos`) VALUES ('80', 'Morango', 'Morango', '6');
INSERT INTO `liloca`.`alimentos` (`Medida`, `Sabor`, `Recheio`, `Produtos_idProdutos`) VALUES ('80', 'Uva', 'Uva', '6');
INSERT INTO `liloca`.`alimentos` (`Medida`, `Sabor`, `Recheio`, `Produtos_idProdutos`) VALUES ('40', 'Chocolate', 'Morango', '5');
INSERT INTO `liloca`.`alimentos` (`Medida`, `Sabor`, `Recheio`, `Produtos_idProdutos`) VALUES ('40', 'Chocolate', 'Chocolate Branco', '5');
INSERT INTO `liloca`.`alimentos` (`Medida`, `Sabor`, `Recheio`, `Produtos_idProdutos`) VALUES ('100', 'Coco', 'Doce de Leite', '2');
INSERT INTO `liloca`.`alimentos` (`Medida`, `Sabor`, `Recheio`, `Produtos_idProdutos`) VALUES ('100', 'Granulado', 'Chocolate', '3');



INSERT INTO `liloca`.`enfeites` (`Cor`, `Produtos_idProdutos`) VALUES ('Rosa', '14');
INSERT INTO `liloca`.`enfeites` (`Cor`, `Produtos_idProdutos`) VALUES ('Azul', '9');


INSERT INTO `liloca`.`itens` (`Pedido_idPedido`, `Produtos_idProdutos`, `Quantidade`, `Valor_Pago`) VALUES ('1', '1', '20', '8000.0');
INSERT INTO `liloca`.`itens` (`Pedido_idPedido`, `Produtos_idProdutos`, `Quantidade`, `Valor_Pago`) VALUES ('1', '3', '10', '1000.0');
INSERT INTO `liloca`.`itens` (`Pedido_idPedido`, `Produtos_idProdutos`, `Quantidade`, `Valor_Pago`) VALUES ('2', '13', '5', '2000.0');
INSERT INTO `liloca`.`itens` (`Pedido_idPedido`, `Produtos_idProdutos`, `Quantidade`, `Valor_Pago`) VALUES ('2', '3', '10', '1150.0');
INSERT INTO `liloca`.`itens` (`Pedido_idPedido`, `Produtos_idProdutos`, `Quantidade`, `Valor_Pago`) VALUES ('2', '2', '10', '1400.0');
INSERT INTO `liloca`.`itens` (`Pedido_idPedido`, `Produtos_idProdutos`, `Quantidade`, `Valor_Pago`) VALUES ('3', '12', '8', '1440.0');
INSERT INTO `liloca`.`itens` (`Pedido_idPedido`, `Produtos_idProdutos`, `Quantidade`, `Valor_Pago`) VALUES ('3', '3', '5', '500.0');
INSERT INTO `liloca`.`itens` (`Pedido_idPedido`, `Produtos_idProdutos`, `Quantidade`, `Valor_Pago`) VALUES ('3', '10', '25', '250.0');
INSERT INTO `liloca`.`itens` (`Pedido_idPedido`, `Produtos_idProdutos`, `Quantidade`, `Valor_Pago`) VALUES ('3', '9', '20', '160.0');
INSERT INTO `liloca`.`itens` (`Pedido_idPedido`, `Produtos_idProdutos`, `Quantidade`, `Valor_Pago`) VALUES ('4', '12', '4', '720.0');
INSERT INTO `liloca`.`itens` (`Pedido_idPedido`, `Produtos_idProdutos`, `Quantidade`, `Valor_Pago`) VALUES ('4', '3', '4', '560');
INSERT INTO `liloca`.`itens` (`Pedido_idPedido`, `Produtos_idProdutos`, `Quantidade`, `Valor_Pago`) VALUES ('4', '2', '7', '805.0');
INSERT INTO `liloca`.`itens` (`Pedido_idPedido`, `Produtos_idProdutos`, `Quantidade`, `Valor_Pago`) VALUES ('5', '10', '6', '60');
INSERT INTO `liloca`.`itens` (`Pedido_idPedido`, `Produtos_idProdutos`, `Quantidade`, `Valor_Pago`) VALUES ('5', '1', '100', '12000.0');
INSERT INTO `liloca`.`itens` (`Pedido_idPedido`, `Produtos_idProdutos`, `Quantidade`, `Valor_Pago`) VALUES ('5', '11', '400', '4000.0');
INSERT INTO `liloca`.`itens` (`Pedido_idPedido`, `Produtos_idProdutos`, `Quantidade`, `Valor_Pago`) VALUES ('6', '6', '100', '3000.0');
INSERT INTO `liloca`.`itens` (`Pedido_idPedido`, `Produtos_idProdutos`, `Quantidade`, `Valor_Pago`) VALUES ('7', '3', '6', '690');
INSERT INTO `liloca`.`itens` (`Pedido_idPedido`, `Produtos_idProdutos`, `Quantidade`, `Valor_Pago`) VALUES ('8', '1', '9', '1080.0');
INSERT INTO `liloca`.`itens` (`Pedido_idPedido`, `Produtos_idProdutos`, `Quantidade`, `Valor_Pago`) VALUES ('9', '2', '22', '3080.0');


